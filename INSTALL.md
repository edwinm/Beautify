# Installing Beautify

To get the Markdown, SmartyPants and GeSHi functionality, just use Git to get the repository and put it
on a PHP-enabled website.

`git clone https://github.com/edwinm/Beautify.git`

You are encouraged to update the libraries to the latest versions.

## Dot

To get the Dot functionality, you first have to install Dot.

### Install Dot for Windows

Go to the [Graphviz download page](http://www.graphviz.org/Download_windows.php) and download and install Graphviz.

### Install Dot for Mac or Linux

Use your package manager to install the graphviz package.

For example, when using MacPorts:

`sudo port install graphviz`

Or when using apt-get with Debian or Ubuntu:

`sudo apt-get install graphviz`

## Configuring VML support

Open beautify.php and find this line:

`define('OUTPUTVML', false);`

Leave it at false to show an error message in IE8 and older.

Change it to true to output VML. This only works when normal HTML standards mode is
turned off. For more information about this, read [KB932175](http://support.microsoft.com/kb/932175).

