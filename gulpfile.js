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
  mix.scripts(['bootstrap-select.js', 'bootstrap.js', 'flickity.js', "jquery-1.11.3.min.js"])
  mix.coffee(['app.coffee', 'controldiv.coffee']);
  mix.scriptsIn('public/js/');
});
