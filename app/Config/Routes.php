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
$routes->add('/contact/insert', 'Home::insert');

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

// GMPA //
// About
$routes->get('/control/about', 'About::index');
$routes->add('/about/update/(:num)', 'About::update/$1');

// DIVISI UMUM //
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
$routes->get('/control/structure/edit/(:num)', 'Structure::edit/$1');
$routes->add('/structure/update/(:num)', 'Structure::update/$1');
$routes->get('/control/structure/member', 'Structure::member');
$routes->add('/structure/member/update/(:num)', 'Structure::new/$1');

// Inventaris
$routes->add('/control/inventaris', 'Inventaris::index');
$routes->get('/control/inventaris/form', 'Inventaris::form');
$routes->add('/inventaris/insert', 'Inventaris::insert');
$routes->get('/control/inventaris/edit/(:num)', 'Inventaris::edit/$1');
$routes->add('/inventaris/update/(:num)', 'Inventaris::update/$1');
$routes->delete('/control/inventaris/(:num)', 'Inventaris::delete/$1');

// Pemancar
$routes->add('/control/pemancar', 'Pemancar::index');
$routes->add('/pemancar/add', 'Pemancar::add');
$routes->get('/control/pemancar/form/(:num)', 'Pemancar::form/$1');
$routes->add('/pemancar/insert/(:num)', 'Pemancar::insert/$1');
$routes->get('/control/pemancar/edit/(:num)', 'Pemancar::edit/$1');
$routes->add('/pemancar/update/(:num)', 'Pemancar::update/$1');
$routes->get('/control/pemancar/detail/(:num)', 'Pemancar::detail/$1');
$routes->delete('/control/pemancar/(:num)', 'Pemancar::delete/$1');

// DIVISI KEPENYIARAN //
// Program
$routes->add('/control/program', 'Program::index');
$routes->get('/control/program/form', 'Program::form');
$routes->add('/program/insert', 'Program::insert');
$routes->get('/control/program/edit/(:num)', 'Program::edit/$1');
$routes->add('/program/update/(:num)', 'Program::update/$1');
$routes->delete('/control/program/(:num)', 'Program::delete/$1');

// Top Chart
$routes->add('/control/topchart', 'Topchart::index');
$routes->add('/topchart/insert', 'Topchart::insert');
$routes->get('/control/topchart/edit/(:num)', 'Topchart::edit/$1');
$routes->add('/topchart/update/(:num)', 'Topchart::update/$1');
$routes->delete('/control/topchart/(:num)', 'Topchart::delete/$1');

// DIVISI MARKETING //
// Events
$routes->add('/control/events', 'Events::index');
$routes->get('/control/events/form', 'Events::form');
$routes->add('/events/insert', 'Events::insert');
$routes->get('/control/events/edit/(:num)', 'Events::edit/$1');
$routes->add('/events/update/(:num)', 'Events::update/$1');
$routes->get('/control/events/detail/(:num)', 'Events::detail/$1');
$routes->delete('/control/events/(:num)', 'Events::delete/$1');

// Medpart
$routes->add('/control/medpart', 'Medpart::index');
$routes->get('/control/medpart/form', 'Medpart::form');
$routes->add('/medpart/insert', 'Medpart::insert');
$routes->get('/control/medpart/edit/(:num)', 'Medpart::edit/$1');
$routes->add('/medpart/update/(:num)', 'Medpart::update/$1');
$routes->get('/control/medpart/detail/(:num)', 'Medpart::detail/$1');
$routes->delete('/control/medpart/(:num)', 'Medpart::delete/$1');


// DIVISI PERSONALIA //
// Crew
$routes->add('/control/crew', 'Crew::index');
$routes->get('/control/crew/form', 'Crew::form');
$routes->add('/crew/insert', 'Crew::insert');
$routes->get('/control/crew/edit/(:num)', 'Crew::edit/$1');
$routes->add('/crew/update/(:num)', 'Crew::update/$1');
$routes->delete('/control/crew/(:num)', 'Crew::delete/$1');

// Pengurus
$routes->add('/control/pengurus', 'Pengurus::index');
$routes->get('/control/pengurus/form', 'Pengurus::form');
$routes->add('/pengurus/insert', 'Pengurus::insert');
$routes->get('/control/pengurus/edit/(:num)', 'Pengurus::edit/$1');
$routes->add('/pengurus/update/(:num)', 'Pengurus::update/$1');
$routes->delete('/control/pengurus/(:num)', 'Pengurus::delete/$1');

// Alumni
$routes->add('/control/alumni', 'Alumni::index');
$routes->get('/control/alumni/form', 'Alumni::form');
$routes->add('/alumni/insert', 'Alumni::insert');
$routes->get('/control/alumni/edit/(:num)', 'Alumni::edit/$1');
$routes->add('/alumni/update/(:num)', 'Alumni::update/$1');
$routes->delete('/control/alumni/(:num)', 'Alumni::delete/$1');

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
