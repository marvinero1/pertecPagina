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
/*
 |--------------------------------------------------------------------------
 | Core
 |--------------------------------------------------------------------------
 |
 */
 mix.sass('resources/assets/page/sass/app.scss', 'public/assets/page/css/app_page.css').version();
 
mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/pace-progress/pace.js',
    'resources/assets/js/app.js',

], 'public/assets/app/js/app.js').version();

mix.styles([
    'node_modules/font-awesome/css/font-awesome.css',
    'node_modules/pace-progress/themes/blue/pace-theme-minimal.css',
    'resources/assets/admin/css/font-awesome.css',
    'resources/assets/admin/css/font-awesome.min.css',
    
], 'public/assets/app/css/app.css').version();

mix.copy([
    'node_modules/font-awesome/fonts/',
    'resources/assets/page/fonts',
    
], 'public/assets/app/fonts');

/*
 |--------------------------------------------------------------------------
 | Page
 |--------------------------------------------------------------------------
 |
 */


 mix.styles([
    'resources/assets/page/css/external.css',
    'resources/assets/page/css/bootstrap.min.css',
    'resources/assets/page/css/style.css',
    
    'resources/assets/page/revolution/css/settings.css',
    'resources/assets/page/revolution/css/layers.css',
    'resources/assets/page/revolution/css/navigation.css',

    'node_modules/font-awesome/css/font-awesome.css',
    'resources/assets/page/css/font-awesome.css',
    'resources/assets/page/css/font-awesome.min.css',

], 'public/assets/page/css/app_page.css').version();



mix.scripts([
    'resources/assets/page/js/jquery-2.1.1.min.js',
    'resources/assets/page/js/plugins.js?v=1.0.0',
    'resources/assets/page/js/functions.js?v=1.2.0',


    'resources/assets/page/revolution/js/extensions/revolution.extension.video.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.extension.slideanims.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.extension.actions.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.extension.layeranimation.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.revolution.extension.kenburn.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.extension.navigation.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.extension.migration.min.js',
    'resources/assets/page/revolution/js/extensions/revolution.revolution.extension.parallax.min.js',


], 'public/assets/page/js/app_page.js').version();
/*
 |--------------------------------------------------------------------------
 | Auth
 |--------------------------------------------------------------------------
 |
 */

mix.styles('resources/assets/auth/css/login.css', 'public/assets/auth/css/login.css').version();
mix.styles('resources/assets/auth/css/register.css', 'public/assets/auth/css/register.css').version();
mix.styles('resources/assets/auth/css/passwords.css', 'public/assets/auth/css/passwords.css').version();

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/gentelella/vendors/animate.css/animate.css',
    'node_modules/gentelella/build/css/custom.css',
], 'public/assets/auth/css/auth.css').version();

/*
 |--------------------------------------------------------------------------
 | Admin
 |--------------------------------------------------------------------------
 |
 */

mix.scripts([
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js',
    'node_modules/gentelella/build/js/custom.js',
    'node_modules/guidechimp/dist/guidechimp.min.js',
    'node_modules/guidechimp/dist/plugins/multiPage.js',
    'resources/assets/admin/js/admin.js',
], 'public/assets/admin/js/admin.js').version(); 

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/gentelella/vendors/animate.css/animate.css',
    'node_modules/gentelella/build/css/custom.css',
    'node_modules/guidechimp/dist/guidechimp.min.css',
    'resources/assets/admin/css/admin.css',
], 'public/assets/admin/css/admin.css').version();


mix.copy([
    'node_modules/gentelella/vendors/bootstrap/dist/fonts',
], 'public/assets/admin/fonts');


mix.scripts([
    'node_modules/select2/dist/js/select2.full.js',
    'resources/assets/admin/js/users/edit.js',
], 'public/assets/admin/js/users/edit.js').version();

mix.styles([
    'node_modules/select2/dist/css/select2.css',
], 'public/assets/admin/css/users/edit.css').version();

mix.scripts([
    'node_modules/gentelella/vendors/Flot/jquery.flot.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.time.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.pie.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.stack.js',
    'node_modules/gentelella/vendors/Flot/jquery.flot.resize.js',

    'node_modules/gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js',
    'node_modules/gentelella/vendors/DateJS/build/date.js',
    'node_modules/gentelella/vendors/flot.curvedlines/curvedLines.js',
    'node_modules/gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js',

    'node_modules/gentelella/production/js/moment/moment.min.js',
    'node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js',


    'node_modules/gentelella/vendors/Chart.js/dist/Chart.js',
    'node_modules/jcarousel/dist/jquery.jcarousel.min.js',

    'resources/assets/admin/js/dashboard.js',
], 'public/assets/admin/js/dashboard.js').version();

mix.styles([
    'node_modules/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css',
    'resources/assets/admin/css/dashboard.css',
], 'public/assets/admin/css/dashboard.css').version();


