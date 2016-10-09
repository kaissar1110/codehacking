var elixir = require('laravel-elixir');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
    .styles([
    	'Libs/blog-post.css',
    	'Libs/bootstrap.css',
    	'Libs/font-awesome.css',
    	'Libs/metisMenu.css',
    	'Libs/sb-admin-2.css'




    	],'./public/css/Libs.css')

    .scripts([

    	'Libs/jquery.js',
    	'Libs/bootstrap.js',
    	'Libs/metisMenu.js',
    	'Libs/sb-admin-2.js',
    	'Libs/script.js'



    	],'./public/js/Libs.js')
});



