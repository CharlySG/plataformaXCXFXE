let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .babel('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .copy('node_modules/materialize-css/dist/js/materialize.js', 'public/js/materialize.js')
    .copy('node_modules/materialize-css/dist/css/materialize.css', 'public/css/materialize.css')
    .copy('node_modules/material-design-icons/iconfont/material-icons.css', 'public/fonts/material-icons.css')
    .copy('node_modules/material-design-icons/iconfont/MaterialIcons-Regular.woff2', 'public/fonts/MaterialIcons-Regular.woff2')
    .copy('node_modules/material-design-icons/iconfont/MaterialIcons-Regular.woff', 'public/fonts/MaterialIcons-Regular.woff')
    .copy('node_modules/material-design-icons/iconfont/MaterialIcons-Regular.ttf', 'public/fonts/MaterialIcons-Regular.ttf')
    .copy('node_modules/sweetalert/dist/sweetalert.min.js', 'public/js/sweetalert.js')
    .babel('resources/js/app.js','public/js/app.js')
    .babel('resources/js/sidebar_actions.js','public/js/sidebar_actions.js')
    .babel('resources/js/saidi_por_causa.js','public/js/saidi_por_causa.js')
