const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix.styles([
      'bulma.css',
      'social.css',
      'transition.css',
      'dropdown.css',
    ], 'public/css/app.css')
    .scripts([
      'twitter-text.js',
      'transition.js',
      'dropdown.js',
      ], 'public/js/app.js')
    .version(['css/app.css', 'js/app.js']);
});
