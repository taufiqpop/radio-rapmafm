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
$routes->add('/admin', 'Admin::index', ['filter' => 'role:Admin, GM']);
$routes->get('/admin/detail/(:num)', 'Admin::detail/$1', ['filter' => 'role:Admin, GM']);
$routes->delete('/user/admin/(:num)', 'Admin::delete/$1', ['filter' => 'role:Admin']);

// User
$routes->get('/user', 'User::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/profile/(:num)', 'User::profile/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/user/edit/(:num)', 'User::edit/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff']);
$routes->add('/user/update/(:num)', 'User::update/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff']);

// Password
$routes->get('/password/(:num)', 'ChangePassword::index/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff']);
$routes->add('/password/setPassword/(:num)', 'ChangePassword::setPassword/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff']);

// Pesan
$routes->add('/pesan', 'Pesan::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis']);

// Settings
$routes->get('/control/settings', 'Settings::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, MD, AOn, Teknisi, MOn, MOff']);
$routes->add('/settings/update/(:num)', 'Settings::update/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, MD, AOn, Teknisi, MOn, MOff']);

// GMPA //


// DIVISI UMUM //
// About
$routes->get('/control/about', 'About::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->add('/about/update/(:num)', 'About::update/$1', ['filter' => 'role:Admin, MU, AOn']);

// Achievements
$routes->add('/control/achievements', 'Achievements::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/achievements/form', 'Achievements::form', ['filter' => 'role:Admin, MU, AOn']);
$routes->get('/control/achievements/edit/(:num)', 'Achievements::edit/$1', ['filter' => 'role:Admin, MU, AOn']);
$routes->delete('/control/achievements/(:num)', 'Achievements::delete/$1', ['filter' => 'role:Admin, MU, AOn']);
$routes->add('/achievements/insert', 'Achievements::insert', ['filter' => 'role:Admin, MU, AOn']);
$routes->add('/achievements/update/(:num)', 'Achievements::update/$1', ['filter' => 'role:Admin, MU, AOn']);

// Events
$routes->add('/control/events', 'Events::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/events/form', 'Events::form', ['filter' => 'role:Admin, MU, AOn']);
$routes->get('/control/events/edit/(:num)', 'Events::edit/$1', ['filter' => 'role:Admin, MU, AOn']);
$routes->delete('/control/events/(:num)', 'Events::delete/$1', ['filter' => 'role:Admin, MU, AOn']);
$routes->add('/events/insert', 'Events::insert', ['filter' => 'role:Admin, MU, AOn']);
$routes->add('/events/update/(:num)', 'Events::update/$1', ['filter' => 'role:Admin, MU, AOn']);

// Structure
$routes->add('/control/structure', 'Structure::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/structure/edit/(:num)', 'Structure::edit/$1', ['filter' => 'role:Admin, MU, AOn']);
$routes->get('/control/structure/member', 'Structure::member', ['filter' => 'role:Admin, MU, AOn']);
$routes->add('/structure/update/(:num)', 'Structure::update/$1', ['filter' => 'role:Admin, MU, AOn']);
$routes->add('/structure/member/update/(:num)', 'Structure::new/$1', ['filter' => 'role:Admin, MU, AOn']);

// Inventaris
$routes->add('/control/inventaris', 'Inventaris::index', ['filter' => 'role:Admin, GM, MU, AOff']);
$routes->get('/control/inventaris/form', 'Inventaris::form', ['filter' => 'role:Admin, MU, AOff']);
$routes->get('/control/inventaris/edit/(:num)', 'Inventaris::edit/$1', ['filter' => 'role:Admin, MU, AOff']);
$routes->delete('/control/inventaris/(:num)', 'Inventaris::delete/$1', ['filter' => 'role:Admin, MU, AOff']);
$routes->add('/inventaris/insert', 'Inventaris::insert', ['filter' => 'role:Admin, MU, AOff']);
$routes->add('/inventaris/update/(:num)', 'Inventaris::update/$1', ['filter' => 'role:Admin, MU, AOff']);

// Pemancar
$routes->add('/control/pemancar', 'Pemancar::index', ['filter' => 'role:Admin, GM, MU, Teknisi']);
$routes->get('/control/pemancar/detail/(:num)', 'Pemancar::detail/$1', ['filter' => 'role:Admin, GM, MU, Teknisi']);
$routes->get('/control/pemancar/form/(:num)', 'Pemancar::form/$1', ['filter' => 'role:Admin, MU, Teknisi']);
$routes->get('/control/pemancar/edit/(:num)', 'Pemancar::edit/$1', ['filter' => 'role:Admin, MU, Teknisi']);
$routes->delete('/control/pemancar/(:num)', 'Pemancar::delete/$1', ['filter' => 'role:Admin, MU, Teknisi']);
$routes->add('/pemancar/add', 'Pemancar::add', ['filter' => 'role:Admin, MU, Teknisi']);
$routes->add('/pemancar/insert/(:num)', 'Pemancar::insert/$1', ['filter' => 'role:Admin, MU, Teknisi']);
$routes->add('/pemancar/update/(:num)', 'Pemancar::update/$1', ['filter' => 'role:Admin, MU, Teknisi']);

// DIVISI KEPENYIARAN //
// Program
$routes->add('/control/program', 'Program::index', ['filter' => 'role:Admin, GM, MK, Produksi, MD']);
$routes->get('/control/program/form', 'Program::form', ['filter' => 'role:Admin, MK, Produksi']);
$routes->get('/control/program/edit/(:num)', 'Program::edit/$1', ['filter' => 'role:Admin, MK, Produksi']);
$routes->delete('/control/program/(:num)', 'Program::delete/$1', ['filter' => 'role:Admin, MK, Produksi']);
$routes->add('/program/insert', 'Program::insert', ['filter' => 'role:Admin, MK, Produksi']);
$routes->add('/program/update/(:num)', 'Program::update/$1', ['filter' => 'role:Admin, MK, Produksi']);

// Top Chart
$routes->add('/control/topchart', 'Topchart::index', ['filter' => 'role:Admin, GM, MK, MD']);
$routes->get('/control/topchart/edit/(:num)', 'Topchart::edit/$1', ['filter' => 'role:Admin, MK, MD']);
$routes->delete('/control/topchart/(:num)', 'Topchart::delete/$1', ['filter' => 'role:Admin, MK, MD']);
$routes->add('/topchart/insert', 'Topchart::insert', ['filter' => 'role:Admin, MK, MD']);
$routes->add('/topchart/update/(:num)', 'Topchart::update/$1', ['filter' => 'role:Admin, MK, MD']);

// DIVISI MARKETING //
// Medpart
$routes->add('/control/medpart', 'Medpart::index', ['filter' => 'role:Admin, GM, MM, MOn']);
$routes->get('/control/medpart/form', 'Medpart::form', ['filter' => 'role:Admin, MM, MOn']);
$routes->get('/control/medpart/edit/(:num)', 'Medpart::edit/$1', ['filter' => 'role:Admin, MM, MOn']);
$routes->delete('/control/medpart/(:num)', 'Medpart::delete/$1', ['filter' => 'role:Admin, MM, MOn']);
$routes->add('/medpart/insert', 'Medpart::insert', ['filter' => 'role:Admin, MM, MOn']);
$routes->add('/medpart/update/(:num)', 'Medpart::update/$1', ['filter' => 'role:Admin, MM, MOn']);

// Iklan
$routes->add('/control/iklan', 'Iklan::index', ['filter' => 'role:Admin, GM, MM, MOn']);
$routes->get('/control/iklan/form', 'Iklan::form', ['filter' => 'role:Admin, MM, MOn']);
$routes->get('/control/iklan/edit/(:num)', 'Iklan::edit/$1', ['filter' => 'role:Admin, MM, MOn']);
$routes->delete('/control/iklan/(:num)', 'Iklan::delete/$1', ['filter' => 'role:Admin, MM, MOn']);
$routes->add('/iklan/insert', 'Iklan::insert', ['filter' => 'role:Admin, MM, MOn']);
$routes->add('/iklan/update/(:num)', 'Iklan::update/$1', ['filter' => 'role:Admin, MM, MOn']);

// Denda Adlibs & Spot
$routes->add('/control/dendadlibs', 'Dendadlibs::index', ['filter' => 'role:Admin, GM, MM, MOn']);
$routes->get('/control/dendadlibs/form', 'Dendadlibs::form', ['filter' => 'role:Admin, MM, MOn']);
$routes->get('/control/dendadlibs/edit/(:num)', 'Dendadlibs::edit/$1', ['filter' => 'role:Admin, MM, MOn']);
$routes->delete('/control/dendadlibs/(:num)', 'Dendadlibs::delete/$1', ['filter' => 'role:Admin, MM, MOn']);
$routes->add('/dendadlibs/insert', 'Dendadlibs::insert', ['filter' => 'role:Admin, MM, MOn']);
$routes->add('/dendadlibs/update/(:num)', 'Dendadlibs::update/$1', ['filter' => 'role:Admin, MM, MOn']);

// MTalent
$routes->add('/control/mtalent', 'MTalent::index', ['filter' => 'role:Admin, GM, MM, MOff']);
$routes->get('/control/mtalent/form', 'MTalent::form', ['filter' => 'role:Admin, MM, MOff']);
$routes->get('/control/mtalent/edit/(:num)', 'MTalent::edit/$1', ['filter' => 'role:Admin, MM, MOff']);
$routes->delete('/control/mtalent/(:num)', 'MTalent::delete/$1', ['filter' => 'role:Admin, MM, MOff']);
$routes->add('/mtalent/insert', 'MTalent::insert', ['filter' => 'role:Admin, MM, MOff']);
$routes->add('/mtalent/update/(:num)', 'MTalent::update/$1', ['filter' => 'role:Admin, MM, MOff']);


// DIVISI PERSONALIA //
// Magang Internal
$routes->add('/control/maganginternal', 'MagangInternal::index', ['filter' => 'role:Admin, GM, MP, HRD']);
$routes->get('/control/maganginternal/form', 'MagangInternal::form', ['filter' => 'role:Admin, MP, HRD']);
$routes->get('/control/maganginternal/edit/(:num)', 'MagangInternal::edit/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->delete('/control/maganginternal/(:num)', 'MagangInternal::delete/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/maganginternal/insert', 'MagangInternal::insert', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/maganginternal/update/(:num)', 'MagangInternal::update/$1', ['filter' => 'role:Admin, MP, HRD']);

// Workshop Broadcast
$routes->add('/control/workshopbroadcast', 'WorkshopBroadcast::index', ['filter' => 'role:Admin, GM, MP, HRD']);
$routes->get('/control/workshopbroadcast/form', 'WorkshopBroadcast::form', ['filter' => 'role:Admin, MP, HRD']);
$routes->get('/control/workshopbroadcast/edit/(:num)', 'WorkshopBroadcast::edit/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->delete('/control/workshopbroadcast/(:num)', 'WorkshopBroadcast::delete/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/workshopbroadcast/insert', 'WorkshopBroadcast::insert', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/workshopbroadcast/update/(:num)', 'WorkshopBroadcast::update/$1', ['filter' => 'role:Admin, MP, HRD']);

// Crew
$routes->add('/control/crew', 'Crew::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/control/crew/form', 'Crew::form', ['filter' => 'role:Admin, MP, HRD']);
$routes->get('/control/crew/edit/(:num)', 'Crew::edit/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->delete('/control/crew/(:num)', 'Crew::delete/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/crew/insert', 'Crew::insert', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/crew/update/(:num)', 'Crew::update/$1', ['filter' => 'role:Admin, MP, HRD']);

// Pengurus
$routes->add('/control/pengurus', 'Pengurus::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/control/pengurus/form', 'Pengurus::form', ['filter' => 'role:Admin, MP, HRD']);
$routes->get('/control/pengurus/edit/(:num)', 'Pengurus::edit/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->delete('/control/pengurus/(:num)', 'Pengurus::delete/$1', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/pengurus/insert', 'Pengurus::insert', ['filter' => 'role:Admin, MP, HRD']);
$routes->add('/pengurus/update/(:num)', 'Pengurus::update/$1', ['filter' => 'role:Admin, MP, HRD']);

// Alumni
$routes->add('/control/alumni', 'Alumni::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/control/alumni/form', 'Alumni::form', ['filter' => 'role:Admin, MP, HRD, Demis, Alumni']);
$routes->add('/alumni/insert', 'Alumni::insert', ['filter' => 'role:Admin, MP, HRD, Demis, Alumni']);
$routes->get('/control/alumni/edit/(:num)', 'Alumni::edit/$1', ['filter' => 'role:Admin, MP, HRD, Demis, Alumni']);
$routes->add('/alumni/update/(:num)', 'Alumni::update/$1', ['filter' => 'role:Admin, MP, HRD, Demis, Alumni']);
$routes->delete('/control/alumni/(:num)', 'Alumni::delete/$1', ['filter' => 'role:Admin, MP, HRD, Demis']);

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
