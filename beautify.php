<?php
/**
 * Beautify
 * Combines four text tools into one function
 * - Markdown: Simpeler and more readable than HTML
 * - SmartyPants: Better typography (curly quotes, ellipsis...)
 * - GeSHi: Adds syntax highlighting to code
 * - dot: Converts Dot diagrams to SVG
 *
 * Copyright 2012 Edwin Martin <edwin@bitstorm.org>
 *
 * License: MIT and GPL
 *
 * Caveat: SVG does not display in IE8 and older
 *
 */

// Download latest version from http://michelf.ca/projects/php-markdown/
require_once "PHP-Markdown-Extra-1.2.5/markdown.php";
// Download latest version from http://sourceforge.net/projects/geshi/files/
require_once "geshi/geshi.php";
// Download latest version from http://daringfireball.net/projects/smartypants/
require_once "SmartyPants/smartypants-typographer.php";

// Full path to dot (install graphviz to get dot)
define('DOTPATH', '/usr/bin/dot');
// define('DOTPATH', '/opt/local/bin/dot');
// Capture dot error messages in file
define('DOTERRLOGPATH', '/tmp/dot-errorlog.txt');

/**
 * @param $s Input string
 * @return string HTML string
 */
function beautify($s) {
    $offset = 0;
    $result = '';
    $n = preg_match_all('|((\r\n~~~+)\s*([a-z0-9_-]*)\r\n)(.*?)\2\r\n|s', $s, $matches, PREG_OFFSET_CAPTURE);
    for($i = 0; $i < $n; $i++) {
        $md = substr($s, $offset, $matches[4][$i][1] - $offset - strlen($matches[1][$i][0]));
        $result .= Markdown(SmartyPants($md));
        $code = html_entity_decode(trim($matches[4][$i][0]));
        $language = $matches[3][$i][0];
        if ($language == "dot-view") {
                $descriptorspec = array(
                   0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
                   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
                   2 => array("file", DOTERRLOGPATH, "w") // stderr is a file to write to
                );
                $proc = proc_open(DOTPATH." -Tsvg", $descriptorspec, $pipes);
                if (is_resource($proc)) {
                    fwrite($pipes[0], $code);
                    fclose($pipes[0]);
                    $svg = stream_get_contents($pipes[1]);
                    fclose($pipes[1]);
                    proc_close($proc);
                    $svg = preg_replace("/.*<svg/s", "<svg", $svg); // Remove <?xml and <!doctype...
                    $svg .= "<!--[if lte IE 8]><p>SVG is not supported by your browser.</p><![endif]-->\r\n";
                    $result .= $svg;
                }
        } else {
            if (!$language) {
                $language = 'text';
            }
            $geshi = new GeSHi($code, $language);
            // Optionally enable GeSHi-features:
            // $geshi->enable_classes();
            // $geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
            $result .= $geshi->parse_code();
        }
        $offset = $matches[4][$i][1] + strlen($matches[4][$i][0]) + strlen($matches[2][$i][0]);
    }
    $result .= Markdown(SmartyPants(substr($s, $offset)));

    return $result;
}
?>