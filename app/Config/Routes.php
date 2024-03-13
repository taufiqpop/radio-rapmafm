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
$routes->add('/contact/save', 'Home::save');

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

// About
$routes->get('/control/about', 'About::index');
$routes->add('/about/update/(:num)', 'About::update/$1');

// Achievements
$routes->add('/control/achievements', 'Achievements::index');
$routes->get('/control/achievements/form', 'Achievements::form');
$routes->add('/achievements/insert', 'Achievements::insert');
$routes->get('/control/achievements/edit/(:num)', 'Achievements::edit/$1');
$routes->add('/achievements/update/(:num)', 'Achievements::update/$1');
$routes->get('/control/achievements/detail/(:num)', 'Achievements::detail/$1');
$routes->delete('/control/achievements/(:num)', 'Achievements::delete/$1');

// Structure
$routes->add('/control/structure', 'Structure::index');
$routes->get('/control/structure/form', 'Structure::form');
$routes->add('/structure/insert', 'Structure::insert');
$routes->get('/control/structure/edit/(:num)', 'Structure::edit/$1');
$routes->add('/structure/update/(:num)', 'Structure::update/$1');
$routes->get('/control/structure/detail/(:num)', 'Structure::detail/$1');
$routes->delete('/control/structure/(:num)', 'Structure::delete/$1');

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
