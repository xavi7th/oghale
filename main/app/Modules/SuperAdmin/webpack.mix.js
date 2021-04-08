const mix = require('laravel-mix');

mix.webpackConfig({
	resolve: {
		extensions: ['.js', '.svelte', '.json'],
		alias: {
			'@superadmin-pages': __dirname + '/Resources/js/Pages',
			'@superadmin-assets': __dirname + '/Resources',
			'@superadmin-shared': __dirname + '/Resources/js/Shared'
		},
	},
})

mix.js(__dirname + '/Resources/js/app.js', 'js/superadmin.js')
    .sass( __dirname + '/Resources/sass/app.scss', 'css/superadmin.css');
