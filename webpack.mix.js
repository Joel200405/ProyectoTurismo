const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('public/css1/app.css', 'public/css1', [
        require('tailwindcss'),
    ]);
