# Installing Beautify

To get the Markdown, SmartyPants and GeSHi functionality, just use Git to get the repository and put it
on a PHP-enabled website.

`git clone https://github.com/edwinm/Beautify.git`

You are encouraged to update Markdown, SmartyPants and GeSHi to the latest versions.

## Installing Dot

To be able to draw graphs, you first have to install Dot.

### Install Dot for Windows

Go to the [Graphviz download page](http://www.graphviz.org/Download_windows.php) and download and install Graphviz.

### Install Dot for Mac or Linux

Use your package manager to install the graphviz package.

For example, when using MacPorts:

`sudo port install graphviz`

Or when using apt-get with Debian or Ubuntu:

`sudo apt-get install graphviz`

## Configuring VML support

All modern browsers can show graphs. To see graphs in IE8 and older, you need VML.

Open beautify.php and find this line:

`define('OUTPUTVML', false);`

Change it to true to output VML. This only works when normal HTML standards mode is
turned off. For more information about this, read [KB932175](http://support.microsoft.com/kb/932175).

Leave it at false to show an error message in IE8 and older. You can use this if VML
does not work on your webpage.
