const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .webpackConfig({
        resolve: {
            fallback: { "fs": false, "path": false }
        }
    });

if (mix.inProduction()) {
    mix.version();
}
