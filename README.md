#Beautify

Beautify is a PHP-function which combines four text tools into one function
- Markdown: Simpler and more readable than HTML
- SmartyPants: Adds better typography (curly quotes, ellipsis...)
- GeSHi: Adds syntax highlighting to source code
- Dot: Converts the Dot graph language to SVG and VML

For more information, read [Beautify: Markdown, SmartyPants, GeSHi and Dot combined](http://www.bitstorm.org/weblog/2012-8/Beautify_Markdown_SmartyPants_GeSHi_and_Dot_combined.html).

*Remark about VML*: IE8 does not support SVG. It does support VML, Microsoft's own vector format, but only
*without* standards support (so no doctype). See [KB932175](http://support.microsoft.com/kb/932175).
So you have to chose between standards support and VML support. #facepalm

Copyright 2012 Edwin Martin <edwin@bitstorm.org>

License: MIT or GPL

To get Beautify:

git clone https://github.com/edwinm/Beautify.git