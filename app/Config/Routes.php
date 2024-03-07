<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Home
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');
$routes->get('/contact', 'Contact::index');
$routes->add('/contact/save', 'Contact::save');

// Admin
$routes->add('/admin', 'Admin::index', ['filter' => 'role:Admin']);
$routes->get('/admin/detail/(:num)', 'Admin::detail/$1', ['filter' => 'role:Admin']);
$routes->delete('/user/admin/(:num)', 'Admin::delete/$1', ['filter' => 'role:Admin']);

// User
$routes->get('/user', 'User::index');
$routes->get('/profile/(:num)', 'User::profile/$1');
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->add('/user/update/(:num)', 'User::update/$1');

// Password
$routes->get('/password/(:num)', 'ChangePassword::index/$1');
$routes->add('/password/setPassword/(:num)', 'ChangePassword::setPassword/$1');

// Pesan
$routes->add('/pesan', 'Pesan::index');

// Settings
$routes->get('/control/settings', 'Settings::index');
$routes->add('/settings/update/(:num)', 'Settings::update/$1');

// Pages
$routes->add('/control/pages', 'Pages::index');
$routes->get('/control/pages/form', 'Pages::form');
$routes->add('/pages/insert', 'Pages::insert');
$routes->get('/control/pages/edit/(:num)', 'Pages::edit/$1');
$routes->add('/pages/update/(:num)', 'Pages::update/$1');
$routes->get('/control/pages/detail/(:num)', 'Pages::detail/$1');
$routes->delete('/control/pages/(:num)', 'Pages::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
