=== Gutenberg Starter Theme ===
Contributors: Zao
Tags: one-column, flexible-header, accessibility-ready, custom-colors, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, rtl-language-support, sticky-post, threaded-comments, translation-ready
Requires at least: 4.9.6
Tested up to: WordPress 5.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Our Gutenberg Starter Theme is a stripped down version of 2019. This is meant to be the foundation to build a great gutenberg ready theme.

== Development ==
Fork or download a zip of the theme. Install and activate on your site. 

The theme is styled via Sass. In order to get dependencies make sure that you have Nodejs and npm. First get the npm dependencies:

`npm install`
Then run
`npm run watch` to watch your sass changes 
Or
`npm run build` to build the files.

== Helpful Tips ==
Within the `functions.php` the editor-font-sizes should correspond with the font sizes in `sass/variables-site/_fonts.scss`
Additionally, the editor-color-palette in the `functions.php` should correspond with the colors in `sass/variables-site/_colors.scss`

== Resources ==
* Twentyninenteen, © 2018-2019 the WordPress Team, GNU GPL v2 or later
* normalize.css, © 2012-2018 Nicolas Gallagher and Jonathan Neal, MIT
* Underscores, © 2012-2018 Automattic, Inc., GNU GPL v2 or later
