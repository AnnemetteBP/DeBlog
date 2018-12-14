const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue'],
        alias: {
            '@': __dirname + '/resources'
        }
    }
});

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/read-app.js', 'public/js');
mix.js('resources/js/public-app.js', 'public/js');


mix.js('resources/js/app-admin-index.js', 'public/js');
mix.js('resources/js/app-admin-read.js', 'public/js');
mix.js('resources/js/app-admin-change.js', 'public/js');
mix.js('resources/js/app-admin-write.js', 'public/js');
