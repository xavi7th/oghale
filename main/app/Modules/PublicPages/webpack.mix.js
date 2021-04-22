const mix = require('laravel-mix');

mix.webpackConfig({
	resolve: {
		extensions: ['.js', '.svelte', '.json'],
		alias: {
			'@public-pages': __dirname + '/Resources/js/Pages',
			'@public-assets': __dirname + '/Resources',
			'@public-shared': __dirname + '/Resources/js/Shared'
		},
	},
})

	mix.copyDirectory(__dirname + '/Resources/img', 'public_html/img');
	mix.copyDirectory(__dirname + '/Resources/fonts', 'public_html/fonts');


// For JS files we cannot just import them into our app.js unless they have been written in a special way. So what we can do is to combine the scripts in order into one file and then load them
// Notice we are combining them into a file called public-vendor.js
// This file is loaded in our app.blade.php file.
	mix.scripts([
    __dirname + '/Resources/js/vendor/owl.carousel.min.js',
    // ... other vendor files to combine
  ], 'public_html/js/public-vendor.js');

	mix.scripts([
      // __dirname + '/Resources/js/vendor/main.js',
  ], 'public_html/js/public-init.js');

mix.js(__dirname + '/Resources/js/app.js', 'js/app.js')

mix.sass(__dirname + '/Resources/sass/app.scss', 'css/app.css')
