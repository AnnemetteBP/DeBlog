const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/read-app.js', 'public/js');

mix.js('resources/js/app-admin-index.js', 'public/js');

mix.js('resources/js/app-admin-read.js', 'public/js');

mix.js('resources/js/app-admin-change.js', 'public/js');
mix.js('resources/js/app-admin-write.js', 'public/js');
