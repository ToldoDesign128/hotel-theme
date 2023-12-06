// webpack.mix.js
let mix = require('laravel-mix');

require('mix-tailwindcss');

mix.sass('assets/sass/style.scss', 'style.css')
  .tailwind('tailwind.config.js');

mix.combine(['assets/js/animation.js','assets/js/hamburger.js'], 'main.js')
  .minify('main.js');

mix.webpackConfig({
  watchOptions: {
    ignored: /node_modules/
  }
});