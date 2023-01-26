const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js('resources/js/main.js', 'public/js/script.min.js')
  .sass('resources/sass/style.scss', 'public/css/style.min.css')
  .sourceMaps()
  .webpackConfig({
    devtool: 'source-map'
  })
  .options({
    processCssUrls: false
  })
  .browserSync({
    proxy: 'http://127.0.0.1:8000'
  })
  .version();
