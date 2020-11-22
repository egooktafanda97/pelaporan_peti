<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);



// route admin ======================================
$routes->group('/', function($routes){
	$routes->add('login', 'Admin\Admin::login');
	$routes->add('logout', 'Admin\Admin::logout');
	$routes->add('proses_login', 'Admin\Admin::prosesLogin');

	$routes->add('container', 'Admin\Admin::index');
	$routes->add('lapTolak', 'Admin\Admin::laporan_ditolak');
	$routes->add('lapPenyelidikan', 'Admin\Admin::laporan_terima');
	$routes->add('laporanhasil', 'Admin\Admin::laporan_hasil');

	$routes->add('previews/(:any)', 'Admin\Admin::preview/$1');
	$routes->add('lap_preview/(:any)', 'Admin\Admin::print_laporn_pelapor/$1');
	$routes->add('status_hasil', 'Admin\Admin::hasil');
	$routes->add('postBerita', 'Admin\Admin::postBerita');

	$routes->add('upBerita', 'Admin\Admin::up_berita');
	$routes->add('EdBerita', 'Admin\Admin::ed_berita');

	$routes->add('admprofil', 'Admin\Admin::profil');
	$routes->add('upProfil', 'Admin\Admin::upProfil');
	


	$routes->add('lapprint/(:any)/(:any)/(:any)', 'Admin\Admin::printAll/$1/$2/$3');
	$routes->add('deleteLap/(:any)/(:any)/(:any)', 'Admin\Admin::deleteLap/$1/$2/$3');

	$routes->add('deleteBerita/(:any)', 'Admin\Admin::deleteBerita/$1');





	$routes->add('cekBerita', 'Admin\Admin::cekBerita');

	$routes->add('status_proses', 'Admin\Admin::upStatus_next_proses');

	$routes->add('adm_laporan/(:any)', 'Admin\Admin::laporan/$1');
	$routes->add('prev/(:any)', 'Admin\Admin::prev/$1');

	$routes->add('search_', 'Admin\Admin::search_');

	$routes->add('berita', 'User_controller::V_berita');
	$routes->add('Vberita/(:any)', 'User_controller::view_berita/$1');

	


});
// ===================================================

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('user', 'User_controller::index');
$routes->get('laporan', 'User_controller::laporan');
$routes->add('LaporanUser/(:any)', 'User_controller::LaporanUser/$1');
$routes->add('Profil_', 'User_controller::profile');
$routes->add('kontak', 'User_controller::kontak');
// $routes->get('save_laporan', 'User_controller::laporan');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
