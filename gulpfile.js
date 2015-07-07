var elixir = require('laravel-elixir');

require('laravel-elixir-imagemin');
require('laravel-elixir-browser-sync');
require('laravel-elixir-serve');
require('laravel-elixir-clean');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;

elixir(function (mix) {

    mix

        /*
         * limpeza dos arquivos antigos
         */
        .clean('public/assets/*')



        /*
         * css
         * */
        .less([
            'layout.less',
            'responsive.less'
        ], 'resources/assets/css/frontend.css')

        .styles([
                'vendor/bower/bootstrap/dist/css/bootstrap.min.css',
                'vendor/bower/fontawesome/css/font-awesome.min.css',
                'vendor/bower/slick-carousel/slick/slick.css',
                'vendor/bower/slick-carousel/slick/slick-theme.css',
                'resources/assets/css/frontend.css',
            ],
            'public/assets/css/frontend.css',
            './'
        )



        /*
         * scripts
         * */
        .copy(
            'vendor/bower/modernizr/modernizr.js',
            'public/assets/js/modernizr.js'
        )

        .copy(
            'vendor/bower/html5shiv/dist/html5shiv.min.js',
            'public/assets/js/html5shiv.min.js'
        )

        .scripts([
                'vendor/bower/jquery/dist/jquery.min.js',
                'vendor/bower/bootstrap/dist/js/bootstrap.min.js',
                'vendor/bower/jquery-validate/dist/jquery.validate.min.js',
                'vendor/bower/jquery-validate/dist/additional-methods.min.js',
                'vendor/bower/jquery-validate/src/localization/messages_pt_BR.js',
                'vendor/bower/jquery-maskedinput/dist/jquery.maskedinput.min.js',
                'vendor/bower/jquery-maskmoney/dist/jquery.maskMoney.min.js',
                'vendor/bower/slick-carousel/slick/slick.min.js',
                'resources/assets/js/frontend.js',
            ],
            'public/assets/js/frontend.js',
            './'
        )



        /*
         * img
         * */
        .imagemin('*', 'public/assets/img/', {
            optimizationLevel: 3,
            progressive: true,
            interlaced: false,
            svgoPlugins: [{
                removeViewBox: false
            }]
        })



        /*
         * fonts
         * */
        .copy([
            'vendor/bower/bootstrap/fonts',
            'vendor/bower/slick-carousel/slick/fonts',
            'vendor/bower/fontawesome/fonts',
            'resources/assets/fonts'
        ], 'public/assets/fonts')



        /*
         * browser sync
         */
        .serve({
            port: 8888
        }).browserSync(null, {
            open: true,
            ui: false,
            proxy: 'localhost:' + 8888,
            port: 8889 // usar port: port(+1)
        })

});
