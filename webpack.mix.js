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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/usuario_index.js', 'public/js/usuario_index.js')
    .js('resources/js/usuario_create.js', 'public/js/usuario_create.js')
    .js('resources/js/usuario_edit.js', 'public/js/usuario_edit.js')
    .js('resources/js/usuario_show.js', 'public/js/usuario_show.js')

    .js('resources/js/grupousuario_index.js', 'public/js/grupousuario_index.js')
    .js('resources/js/grupousuario_create.js', 'public/js/grupousuario_create.js')
    .js('resources/js/grupousuario_edit.js', 'public/js/grupousuario_edit.js')
    .js('resources/js/grupousuario_show.js', 'public/js/grupousuario_show.js')

    .js('resources/js/formulario_index.js', 'public/js/formulario_index.js')
    .js('resources/js/formulario_asignar.js', 'public/js/formulario_asignar.js')

    .react()
    .sass('resources/sass/app.scss', 'public/css');
