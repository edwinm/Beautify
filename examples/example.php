<!-- no standards mode doctype, otherwise VML in IE won't work :-[  -->
<html>
<head>
    <title>Beautify example</title>
</head>
<body>
<?php

require_once dirname(dirname(__FILE__))."/vendor/autoload.php";

$file = file_get_contents("example.md");

$beautifiedFile = beautify($file);

echo $beautifiedFile;

?>
</body>
</html>
