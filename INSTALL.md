# Installing Beautify

To get the Markdown, SmartyPants and GeSHi functionality, just use Git to get the repository and put it
on a PHP-enabled website.

git clone https://github.com/edwinm/Beautify.git

## Dot

To get the Dot functionality, you first have to install Dot.

### Install Dot for Windows

Go to the [Graphviz download page](http://www.graphviz.org/Download..php) and download and install Graphviz.
Find out the location of the Dot program.

### Install Dot for Mac or Linux

Use your package manager to install the graphviz package.

Use `which dot` to find the location of the dot program.

## Configuring beautify.php

Open beautify.php and find this line:

define('DOTPATH', '/usr/bin/dot');

Replace the path with the path of the dot program.

## Configuring VML support

Open beautify.php and find this line:

define('OUTPUTVML', false);

Change false to true to support VML.

