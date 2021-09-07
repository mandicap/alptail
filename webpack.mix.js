let mix = require('laravel-mix');
let tailwind = require('tailwindcss');
let src = 'source/_assets';

require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js(`${src}/js/main.js`, 'js')
    .postCss(`${src}/css/tailwind.css`, 'css', [
       tailwind('./tailwind.config.js')
    ])
    .version();
