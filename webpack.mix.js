const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.scripts([
    'resources/sass/admin/jquery.min.js',
    'resources/sass/admin/bootstrap.min.js',
    'resources/sass/admin/metisMenu.min.js',
    'resources/sass/admin/raphael.min.js',
    'resources/sass/admin/morris.css',
    'resources/sass/admin/morris-data.js',
], 'public/js/admin/all.js');
