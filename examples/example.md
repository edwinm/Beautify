#Beatify

Beatify is a PHP-function which combines four powerful text tools into one function

- Markdown: Simpler and more readable than HTML
- SmartyPants: Adds better typography ("curly quotes", ellipsis...)
- GeSHi: Adds syntax highlighting to source code
- Dot: Converts the Dot graph language to SVG and VML

For more information, read [Beautify: Markdown, SmartyPants, GeSHi and Dot combined](http://www.bitstorm.org/weblog/2012-8/Beautify_Markdown_SmartyPants_GeSHi_and_Dot_combined.html).

Copyright 2012 Edwin Martin <edwin@bitstorm.org>

License: MIT or GPL

Example of syntax highlighting with GeSHi:

~~~ javascript
var promise = $.ajax({
  url: "/myServerScript"
});

promise.done(mySuccessFunction);
promise.fail(myErrorFunction);
~~~

Example of Dot:

~~~ dot-view
digraph G {
    input -> process;
    process -> output;
}
~~~

To get Beautify:

git clone https://github.com/edwinm/Beautify.git