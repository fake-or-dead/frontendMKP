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
	mix.stylesIn('resources/sass')
     .sass('app.scss');

  mix.coffee('app.coffee');
  // mix.coffee('controldiv.coffee');
  mix.coffee('controldiv.coffee', 'public/admin/js/controldiv.js');
});
