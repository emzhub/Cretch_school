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
// mix.setPublicPath('resources/assets/');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
 'resources/assets/css/font-awesome.min.css',
     'resources/assets/css/bootstrap.min.css',
     'resources/assets/css/style.css',
          'resources/assets/css/cos.css'
   	   ], 'public/css/site.css')
      .scripts([
     'resources/assets/js/jquery-3.2.1.min.js',
   'resources/assets/js/popper.min.js',
       'resources/assets/js/bootstrap.min.js',
   'resources/assets/js/mdb.min.js',
    'resources/assets/public/js/mdb.js'
   ], 'public/js/site.js');