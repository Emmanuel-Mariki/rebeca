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
    mix.sass('app.scss');
    //mix.sass('slippry.scss');

    /*mix.scripts([
        'jquery/dist/jquery.min.js',
        'bootstrap-sass/assets/javascripts/bootstrap.min.js' 
        ],'public/js/app.js','node_modules');

    mix.scripts([
        'js/app.js',
        'slide/src/slippry.js',
        'materialize/js/materialize.min.js',
        'js/custom.js',
        //'dreamcodes/js/modernizr.custom.js',
        //'dreamcodes/js/jquery.cslider.js'
        ],'public/js/app.js','public');

    mix.styles([
        //'dreamcodes/css/tsc_parallax.css',
        'slide/dist/slippry.css',
        'css/app.css'
    ],'public/css/app.css','public');*/
});
