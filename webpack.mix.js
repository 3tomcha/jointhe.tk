let mix = require('laravel-mix');

mix.sass('src/style.scss', 'dist');
mix.browserSync({
    proxy: {
        target: 'http://localhost:3000',
    },
    files: [
        'dist/style.css',
        '*.php'
    ]
});