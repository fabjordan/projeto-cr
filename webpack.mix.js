const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   	.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/estilo.scss', 'public/css')
   	// .copy('resources/sass/app.scss', 'public/css/teste.css')
    .sourceMaps()
    .browserSync('localhost:8000');
    /*.browserSync({
    	ui: false,
    	injectChanges: true,
    	proxy: 'localhost',
    	open: 'external',
    	port: '8000',
    	open: false,
    	// browser: 'firefox',
    });*/

// mix.browserSync('localhost:8000');