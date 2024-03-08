<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/dashboard', 'Home::index');
$routes->get('/', 'Home::landing');
$routes->get('/pra', 'praRegis::praRegis');
$routes->get('/log', 'Home::login');
$routes->get('/regis', 'Home::regis');

$routes->group('user', function ($rs) {
    // ['filter' =>'role:Admin,Owner1,Owner2']
    $rs->get('/', 'User::index');
    $rs->get('create', 'User::create');
    $rs->post('create', 'User::save');
    $rs->get('index', 'User::index');
    $rs->delete('(:num)', 'Users::delete/$1');
    $rs->get('edit/(:any)', 'Users::edit/$1');
    $rs->post('edit/(:any)', 'Users::update/$1');
});
