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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}

mix.styles([
	'public/AdminLTE-3.1.0-rc/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
	'public/AdminLTE-3.1.0-rc/dist/css/adminlte.min.css',
	'public/AdminLTE-3.1.0-rc/plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css',
	'public/AdminLTE-3.1.0-rc/plugins/datatables-responsive/css/responsive.bootstrap4.min.css',
	'public/AdminLTE-3.1.0-rc/plugins/sweetalert2/sweetalert2.min.css',
	'public/AdminLTE-3.1.0-rc/custom/css/buttons.dataTables.min.css',
	'public/AdminLTE-3.1.0-rc/custom/css/buttons.jqueryui.min.css',
	'public/AdminLTE-3.1.0-rc/custom/css/dataTables.jqueryui.min.css',
	'public/AdminLTE-3.1.0-rc/custom/css/jquery-ui.min.css',	
], 
'public/css/adminlte-datatable-datatablestyle-swtalert.css').version();

mix.scripts([
	'public/AdminLTE-3.1.0-rc/plugins/jquery/jquery.min.js',
	'public/AdminLTE-3.1.0-rc/plugins/bootstrap/js/bootstrap.bundle.min.js',
	'public/AdminLTE-3.1.0-rc/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
	'public/AdminLTE-3.1.0-rc/dist/js/adminlte.min.js',
	'public/AdminLTE-3.1.0-rc/dist/js/demo.js',
	'public/AdminLTE-3.1.0-rc/plugins/moment/moment.min.js',
	'public/AdminLTE-3.1.0-rc/plugins/sweetalert2/sweetalert2.all.min.js',	
	'public/AdminLTE-3.1.0-rc/plugins/datatables/jquery.dataTables.min.js',	
	'public/AdminLTE-3.1.0-rc/plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js',
	'public/AdminLTE-3.1.0-rc/plugins/datatables-responsive/js/dataTables.responsive.min.js',
	'public/AdminLTE-3.1.0-rc/custom/js/dataTables.buttons.min.js',
	'public/AdminLTE-3.1.0-rc/custom/js/jszip.min.js',
	'public/AdminLTE-3.1.0-rc/custom/js/pdfmake.min.js',
	'public/AdminLTE-3.1.0-rc/custom/js/vfs_fonts.js',
	'public/AdminLTE-3.1.0-rc/custom/js/buttons.html5.min.js',
	'public/AdminLTE-3.1.0-rc/custom/js/dataTables.jqueryui.min.js',
	'public/AdminLTE-3.1.0-rc/custom/js/buttons.colVis.min.js',
],
'public/js/adminlte-datatable-datatablestyle-swtalert.js').version();