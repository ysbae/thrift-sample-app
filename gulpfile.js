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

    mix.scripts([
        '../bower/jquery/jquery.js',
        '../bower/thrift/lib/js/src/thrift.js',
        '../bower/thrift-sample/dist-js/thrift-sample.js'
    ], 'public/js/vendor.js');

    mix.scripts(['../js/main.js'], 'public/js/main.js');
});