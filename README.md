JBST 1pxdeep Theme
============================
[JBST](http://www.jbst.eu/) is a powerful theme framework that can be used as a standalone website builder or as a framework to create child themes for wordpress build on Twitter's Bootstrap 3. Full customizable with [LESS](http://www.lesscss.org/). Relative color design is designing by relative visual weight, or designing with color schemes. [1pxdeep](http://rriepe.github.io/1pxdeep/) brings that concept to Bootstrap and this theme brings it to WordPress.

Getting started
---------------
 1. Download, install (do not active) JBST [https://github.com/bassjobsen/jamedo-bootstrap-start-theme/archive/master.zip](https://github.com/bassjobsen/jamedo-bootstrap-start-theme/archive/master.zip)
 2. Copy [JBST 1pxdeep Theme files](https://github.com/bassjobsen/jbst-1pxdeep-theme/archive/master.zip) to `wordpress/wp-content/themes/jbst-1pxdeep-theme/`
 3. rename the folder from step 2 and open 'style.css' and change the theme info (name, author, description, etc) 
 4. activate your child theme in your Dashboard: Appearance > Themes
 5. set the seed color in your Dashboard: Appearance > Less Compiler, enter `@seed-color: #578562;` in the text area and press "Recompile Less code" 
 
![Less Compiler](https://raw.github.com/bassjobsen/jbst-1pxdeep-theme/master/compiler.png)
 
LESS Compiler
-------------
The built-in LESS compiler (Appearance > LESS Compiler) plays an important role in JBST childtheming:

Use the built-in compiler to: 
- set any [Bootstrap](http://getbootstrap.com/customize/) variable or use Bootstrap's mixins:
	-`@navbar-default-color: blue;`
        - create a custom button: `.btn-custom {
  .button-variant(white; red; blue);
}`
- set any built-in LESS variable: for example `@footer_bg_color: black;` sets the background color of the footer to black
- use built-in mixins: - add a custom font: `.include-custom-font(@family: arial,@font-path, @path: @custom-font-dir, @weight: normal, @style: normal);

Alternatively you can also add the LESS code mentioned above to less/custom.less in your child theme's folder.

You always have to recompile your LESS code into CSS by using the recompile function (Appearance > LESS Compiler) after changing less/custom.less.

Example
-------
![ScreenShot](https://raw.github.com/bassjobsen/jbst-1pxdeep-theme/master/screenshot.png)

