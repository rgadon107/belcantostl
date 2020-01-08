## Summary

The remote repository for the web site of the Bel Canto Chorus of the St. Louis, MO [https://belcantostl.org]. 

This repo contains a mu-plugin directory and the _Developers_ Genesis child theme used on the website. 

The `mu-plugin` plugin directory includes the `central-hub` plugin, which manages the registration of 
custom post types, meta-boxes, custom taxonomies, and shortcodes for the site. 

The `Developers` child theme includes a style sheet broken up into SCSS partial files. A `gulp` task runner automates
and manages a series of tasks, that include watch, convert SCSS -> CSS, lint, build, autoprefix, and minify the stylesheet.  
