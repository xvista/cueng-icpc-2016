var elixir = require('laravel-elixir');
var connectPHP = require('gulp-connect-php');
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

elixir.config.css.autoprefix = {
    enabled: true
};

elixir(function (mix) {
    mix.less('**/*.less')
    connectPHP.server({
        base: './public',
        hostname: '0.0.0.0',
        port: 8888
    });
    mix.browserSync({
        online: false,
        proxy: 'localhost:8888',
        browser: 'google chrome'
    });
});
