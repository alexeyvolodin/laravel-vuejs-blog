var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function(mix) {
    mix.sass('app.scss')
			.browserify('dashboard.js')
			.version(['css/app.css', 'js/dashboard.js']);
});
