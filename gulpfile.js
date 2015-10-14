var elixir = require('laravel-elixir');
elixir.extend('sourcemaps', false);

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
    mix.scripts([
        'mymap.js',
        'jquery.simpleWeather.js',
        'weather.js'
    ],'./public/js/map.js');
    mix.scripts([
        'google_translate_flag_interaction.js'
    ],'./public/js/alls.js');
});
