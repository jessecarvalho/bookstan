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

mix.styles([
    'resources/views/website/css/style.css'
], 'public/website/css/style.css')

    .scripts([
        'resources/views/website/js/script.js'
    ], 'public/website/js/script.js')

    .version();
