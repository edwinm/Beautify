#Beautify

Beautify is a PHP-function which combines four powerful text tools into one function

- Markdown: Simpler and more readable than HTML
- SmartyPants: Adds better typography ("curly quotes", ellipsis...)
- GeSHi: Adds syntax highlighting to source code
- Dot: Converts the Dot graph language to SVG and VML

For more information, read [Beautify: Markdown, SmartyPants, GeSHi and Dot combined](http://www.bitstorm.org/weblog/2012-8/Beautify_Markdown_SmartyPants_GeSHi_and_Dot_combined.html).

Copyright 2012 Edwin Martin <edwin@bitstorm.org>

License: MIT or GPL

## Examples

### Syntax highlighting with GeSHi:

~~~ javascript
$('#result').html('waiting...');

var promise = wait();
promise.done(result);

function result() {
  $('#result').html('done');
}

function wait() {
  var deferred = $.Deferred();

  setTimeout(function() {
    deferred.resolve();
  }, 2000);

  return deferred.promise();
}
~~~

### Graph made with Dot:

~~~ dot-view
digraph G {
    input -> process;
    process -> output;
}
~~~

## Get Beautify:

~~~ bash
git clone https://github.com/edwinm/Beautify.git
~~~

