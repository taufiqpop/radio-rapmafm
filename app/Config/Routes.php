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
$routes->add('/podcasts', 'Home::podcasts');
$routes->add('/contact/insert', 'Home::insert');

// RAPMAFEST //
$routes->get('/rapmafest8', 'Rapmafest8::index');
$routes->get('/rapmafest9', 'Rapmafest9::index');
$routes->get('/rapmafest10', 'Rapmafest10::index');

// RAPMADAY
$routes->get('/rapmaday8', 'rapmaday8::index');

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
// Timeline GMPA
$routes->add('/control/gmpa', 'GMPA::index', ['filter' => 'role:Admin, GM, PA']);
$routes->get('/control/gmpa/form', 'GMPA::form', ['filter' => 'role:Admin, GM']);
$routes->get('/control/gmpa/edit/(:num)', 'GMPA::edit/$1', ['filter' => 'role:Admin, GM']);
$routes->delete('/control/gmpa/(:num)', 'GMPA::delete/$1', ['filter' => 'role:Admin, GM']);
$routes->add('/gmpa/insert', 'GMPA::insert', ['filter' => 'role:Admin, GM']);
$routes->add('/gmpa/update/(:num)', 'GMPA::update/$1', ['filter' => 'role:Admin, GM']);

// Surat Masuk
$routes->add('/control/suratmasuk', 'SuratMasuk::index', ['filter' => 'role:Admin, GM, PA']);
$routes->get('/control/suratmasuk/form', 'SuratMasuk::form', ['filter' => 'role:Admin, PA']);
$routes->get('/control/suratmasuk/edit/(:num)', 'SuratMasuk::edit/$1', ['filter' => 'role:Admin, PA']);
$routes->delete('/control/suratmasuk/(:num)', 'SuratMasuk::delete/$1', ['filter' => 'role:Admin, PA']);
$routes->add('/suratmasuk/insert', 'SuratMasuk::insert', ['filter' => 'role:Admin, PA']);
$routes->add('/suratmasuk/update/(:num)', 'SuratMasuk::update/$1', ['filter' => 'role:Admin, PA']);

// Surat Keluar
$routes->add('/control/suratkeluar', 'SuratKeluar::index', ['filter' => 'role:Admin, GM, PA']);
$routes->get('/control/suratkeluar/form', 'SuratKeluar::form', ['filter' => 'role:Admin, PA']);
$routes->get('/control/suratkeluar/edit/(:num)', 'SuratKeluar::edit/$1', ['filter' => 'role:Admin, PA']);
$routes->delete('/control/suratkeluar/(:num)', 'SuratKeluar::delete/$1', ['filter' => 'role:Admin, PA']);
$routes->add('/suratkeluar/insert', 'SuratKeluar::insert', ['filter' => 'role:Admin, PA']);
$routes->add('/suratkeluar/update/(:num)', 'SuratKeluar::update/$1', ['filter' => 'role:Admin, PA']);

// DIVISI UMUM //
// About
$routes->get('/control/about', 'About::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->add('/about/update/(:num)', 'About::update/$1', ['filter' => 'role:Admin, AOn']);

// Timeline Divisi Umum
$routes->add('/control/umum', 'Umum::index', ['filter' => 'role:Admin, GM, MU, AOn, AOff, Teknisi']);
$routes->get('/control/umum/form', 'Umum::form', ['filter' => 'role:Admin, MU']);
$routes->get('/control/umum/edit/(:num)', 'Umum::edit/$1', ['filter' => 'role:Admin, MU']);
$routes->delete('/control/umum/(:num)', 'Umum::delete/$1', ['filter' => 'role:Admin, MU']);
$routes->add('/umum/insert', 'Umum::insert', ['filter' => 'role:Admin, MU']);
$routes->add('/umum/update/(:num)', 'Umum::update/$1', ['filter' => 'role:Admin, MU']);

// Konten
$routes->add('/control/konten', 'Konten::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/konten/form', 'Konten::form', ['filter' => 'role:Admin, AOn']);
$routes->get('/control/konten/edit/(:num)', 'Konten::edit/$1', ['filter' => 'role:Admin, AOn']);
$routes->delete('/control/konten/(:num)', 'Konten::delete/$1', ['filter' => 'role:Admin, AOn']);
$routes->add('/konten/insert', 'Konten::insert', ['filter' => 'role:Admin, AOn']);
$routes->add('/konten/update/(:num)', 'Konten::update/$1', ['filter' => 'role:Admin, AOn']);

// Achievements
$routes->add('/control/achievements', 'Achievements::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/achievements/form', 'Achievements::form', ['filter' => 'role:Admin, AOn']);
$routes->get('/control/achievements/edit/(:num)', 'Achievements::edit/$1', ['filter' => 'role:Admin, AOn']);
$routes->delete('/control/achievements/(:num)', 'Achievements::delete/$1', ['filter' => 'role:Admin, AOn']);
$routes->add('/achievements/insert', 'Achievements::insert', ['filter' => 'role:Admin, AOn']);
$routes->add('/achievements/update/(:num)', 'Achievements::update/$1', ['filter' => 'role:Admin, AOn']);

// Events
$routes->add('/control/events', 'Events::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/events/form', 'Events::form', ['filter' => 'role:Admin, AOn']);
$routes->get('/control/events/edit/(:num)', 'Events::edit/$1', ['filter' => 'role:Admin, AOn']);
$routes->delete('/control/events/(:num)', 'Events::delete/$1', ['filter' => 'role:Admin, AOn']);
$routes->add('/events/insert', 'Events::insert', ['filter' => 'role:Admin, AOn']);
$routes->add('/events/update/(:num)', 'Events::update/$1', ['filter' => 'role:Admin, AOn']);

// Structure
$routes->add('/control/structure', 'Structure::index', ['filter' => 'role:Admin, GM, MU, AOn']);
$routes->get('/control/structure/edit/(:num)', 'Structure::edit/$1', ['filter' => 'role:Admin, AOn']);
$routes->get('/control/structure/member', 'Structure::member', ['filter' => 'role:Admin, AOn']);
$routes->add('/structure/update/(:num)', 'Structure::update/$1', ['filter' => 'role:Admin, AOn']);
$routes->add('/structure/member/update/(:num)', 'Structure::new/$1', ['filter' => 'role:Admin, AOn']);

// Inventaris
$routes->add('/control/inventaris', 'Inventaris::index', ['filter' => 'role:Admin, GM, MU, AOff']);
$routes->get('/control/inventaris/form', 'Inventaris::form', ['filter' => 'role:Admin, AOff']);
$routes->get('/control/inventaris/edit/(:num)', 'Inventaris::edit/$1', ['filter' => 'role:Admin, AOff']);
$routes->delete('/control/inventaris/(:num)', 'Inventaris::delete/$1', ['filter' => 'role:Admin, AOff']);
$routes->add('/inventaris/insert', 'Inventaris::insert', ['filter' => 'role:Admin, AOff']);
$routes->add('/inventaris/update/(:num)', 'Inventaris::update/$1', ['filter' => 'role:Admin, AOff']);

// Peminjaman
$routes->add('/control/peminjaman', 'Peminjaman::index', ['filter' => 'role:Admin, GM, MU, AOff']);
$routes->get('/control/peminjaman/form', 'Peminjaman::form', ['filter' => 'role:Admin, AOff']);
$routes->get('/control/peminjaman/edit/(:num)', 'Peminjaman::edit/$1', ['filter' => 'role:Admin, AOff']);
$routes->delete('/control/peminjaman/(:num)', 'Peminjaman::delete/$1', ['filter' => 'role:Admin, AOff']);
$routes->add('/peminjaman/insert', 'Peminjaman::insert', ['filter' => 'role:Admin, AOff']);
$routes->add('/peminjaman/update/(:num)', 'Peminjaman::update/$1', ['filter' => 'role:Admin, AOff']);

// Kerja Bakti
$routes->add('/control/kerjabakti', 'KerjaBakti::index', ['filter' => 'role:Admin, GM, MU, AOff']);
$routes->get('/control/kerjabakti/form', 'KerjaBakti::form', ['filter' => 'role:Admin, AOff']);
$routes->get('/control/kerjabakti/edit/(:num)', 'KerjaBakti::edit/$1', ['filter' => 'role:Admin, AOff']);
$routes->delete('/control/kerjabakti/(:num)', 'KerjaBakti::delete/$1', ['filter' => 'role:Admin, AOff']);
$routes->add('/kerjabakti/insert', 'KerjaBakti::insert', ['filter' => 'role:Admin, AOff']);
$routes->add('/kerjabakti/update/(:num)', 'KerjaBakti::update/$1', ['filter' => 'role:Admin, AOff']);

// Jadwal Piket
$routes->add('/control/jadwalpiket', 'JadwalPiket::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->get('/control/jadwalpiket/form', 'JadwalPiket::form', ['filter' => 'role:Admin, AOff']);
$routes->get('/control/jadwalpiket/edit/(:num)', 'JadwalPiket::edit/$1', ['filter' => 'role:Admin, AOff']);
$routes->delete('/control/jadwalpiket/(:num)', 'JadwalPiket::delete/$1', ['filter' => 'role:Admin, AOff']);
$routes->add('/jadwalpiket/insert', 'JadwalPiket::insert', ['filter' => 'role:Admin, AOff']);
$routes->add('/jadwalpiket/update/(:num)', 'JadwalPiket::update/$1', ['filter' => 'role:Admin, AOff']);

// Pemancar
$routes->add('/control/pemancar', 'Pemancar::index', ['filter' => 'role:Admin, GM, MU, Teknisi']);
$routes->get('/control/pemancar/detail/(:num)', 'Pemancar::detail/$1', ['filter' => 'role:Admin, GM, MU, Teknisi']);
$routes->get('/control/pemancar/form/(:num)', 'Pemancar::form/$1', ['filter' => 'role:Admin, Teknisi']);
$routes->get('/control/pemancar/edit/(:num)', 'Pemancar::edit/$1', ['filter' => 'role:Admin, Teknisi']);
$routes->delete('/control/pemancar/(:num)', 'Pemancar::delete/$1', ['filter' => 'role:Admin, Teknisi']);
$routes->add('/pemancar/add', 'Pemancar::add', ['filter' => 'role:Admin, Teknisi']);
$routes->add('/pemancar/insert/(:num)', 'Pemancar::insert/$1', ['filter' => 'role:Admin, Teknisi']);
$routes->add('/pemancar/update/(:num)', 'Pemancar::update/$1', ['filter' => 'role:Admin, Teknisi']);

// DIVISI KEPENYIARAN //
// Timeline Divisi Kepenyiaran
$routes->add('/control/kepenyiaran', 'Kepenyiaran::index', ['filter' => 'role:Admin, GM, MK, Produksi, Jurnalistik, MD']);
$routes->get('/control/kepenyiaran/form', 'Kepenyiaran::form', ['filter' => 'role:Admin, MK']);
$routes->get('/control/kepenyiaran/edit/(:num)', 'Kepenyiaran::edit/$1', ['filter' => 'role:Admin, MK']);
$routes->delete('/control/kepenyiaran/(:num)', 'Kepenyiaran::delete/$1', ['filter' => 'role:Admin, MK']);
$routes->add('/kepenyiaran/insert', 'Kepenyiaran::insert', ['filter' => 'role:Admin, MK']);
$routes->add('/kepenyiaran/update/(:num)', 'Kepenyiaran::update/$1', ['filter' => 'role:Admin, MK']);

// Jadwal Siar
$routes->add('/control/jadwalsiar', 'JadwalSiar::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->get('/control/jadwalsiar/edit/(:num)', 'JadwalSiar::edit/$1', ['filter' => 'role:Admin, MK']);
$routes->add('/jadwalsiar/update/(:num)', 'JadwalSiar::update/$1', ['filter' => 'role:Admin, MK']);

// Penyiar
$routes->add('/control/penyiar', 'Penyiar::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->get('/control/penyiar/edit/(:num)', 'Penyiar::edit/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->add('/penyiar/update/(:num)', 'Penyiar::update/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);

// Berita Web
$routes->add('/control/beritaweb', 'BeritaWeb::index', ['filter' => 'role:Admin, GM, MK, Jurnalistik']);
$routes->add('/control/beritaweb/form', 'BeritaWeb::form', ['filter' => 'role:Admin, Jurnalistik']);
$routes->get('/control/beritaweb/edit/(:num)', 'BeritaWeb::edit/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->delete('/control/beritaweb/(:num)', 'BeritaWeb::delete/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/beritaweb/insert', 'BeritaWeb::insert', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/beritaweb/update/(:num)', 'BeritaWeb::update/$1', ['filter' => 'role:Admin, Jurnalistik']);

// Live Report
$routes->add('/control/livereport', 'LiveReport::index', ['filter' => 'role:Admin, GM, MK, Jurnalistik']);
$routes->add('/control/livereport/form', 'LiveReport::form', ['filter' => 'role:Admin, Jurnalistik']);
$routes->get('/control/livereport/edit/(:num)', 'LiveReport::edit/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->delete('/control/livereport/(:num)', 'LiveReport::delete/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/livereport/insert', 'LiveReport::insert', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/livereport/update/(:num)', 'LiveReport::update/$1', ['filter' => 'role:Admin, Jurnalistik']);

// Blog
$routes->add('/control/blog', 'Blog::index', ['filter' => 'role:Admin, GM, MK, Jurnalistik']);
$routes->add('/control/blog/form', 'Blog::form', ['filter' => 'role:Admin, Jurnalistik']);
$routes->get('/control/blog/edit/(:num)', 'Blog::edit/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->delete('/control/blog/(:num)', 'Blog::delete/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/blog/insert', 'Blog::insert', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/blog/update/(:num)', 'Blog::update/$1', ['filter' => 'role:Admin, Jurnalistik']);

// Infografis
$routes->add('/control/infografis', 'Infografis::index', ['filter' => 'role:Admin, GM, MK, Jurnalistik']);
$routes->add('/control/infografis/form', 'Infografis::form', ['filter' => 'role:Admin, Jurnalistik']);
$routes->get('/control/infografis/edit/(:num)', 'Infografis::edit/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->delete('/control/infografis/(:num)', 'Infografis::delete/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/infografis/insert', 'Infografis::insert', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/infografis/update/(:num)', 'Infografis::update/$1', ['filter' => 'role:Admin, Jurnalistik']);

// Rapma News
$routes->add('/control/news', 'News::index', ['filter' => 'role:Admin, GM, MK, Jurnalistik']);
$routes->add('/control/news/form', 'News::form', ['filter' => 'role:Admin, Jurnalistik']);
$routes->get('/control/news/edit/(:num)', 'News::edit/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->delete('/control/news/(:num)', 'News::delete/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/news/insert', 'News::insert', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/news/update/(:num)', 'News::update/$1', ['filter' => 'role:Admin, Jurnalistik']);

// Newsflash
$routes->add('/control/newsflash', 'Newsflash::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->add('/control/newsflash/form', 'Newsflash::form', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->get('/control/newsflash/edit/(:num)', 'Newsflash::edit/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->delete('/control/newsflash/(:num)', 'Newsflash::delete/$1', ['filter' => 'role:Admin, Jurnalistik']);
$routes->add('/newsflash/insert', 'Newsflash::insert', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);
$routes->add('/newsflash/update/(:num)', 'Newsflash::update/$1', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Crew']);

// Bank Lagu
$routes->add('/control/lagu', 'Lagu::index', ['filter' => 'role:Admin, GM, MK, MD']);
$routes->add('/control/lagu/form', 'Lagu::form', ['filter' => 'role:Admin, MD']);
$routes->get('/control/lagu/edit/(:num)', 'Lagu::edit/$1', ['filter' => 'role:Admin, MD']);
$routes->delete('/control/lagu/(:num)', 'Lagu::delete/$1', ['filter' => 'role:Admin, MD']);
$routes->add('/lagu/insert', 'Lagu::insert', ['filter' => 'role:Admin, MD']);
$routes->add('/lagu/update/(:num)', 'Lagu::update/$1', ['filter' => 'role:Admin, MD']);

// Top Chart
$routes->add('/control/topchart', 'Topchart::index', ['filter' => 'role:Admin, GM, MK, MD']);
$routes->get('/control/topchart/edit/(:num)', 'Topchart::edit/$1', ['filter' => 'role:Admin, MD']);
$routes->delete('/control/topchart/(:num)', 'Topchart::delete/$1', ['filter' => 'role:Admin, MD']);
$routes->add('/topchart/insert', 'Topchart::insert', ['filter' => 'role:Admin, MD']);
$routes->add('/topchart/update/(:num)', 'Topchart::update/$1', ['filter' => 'role:Admin, MD']);

// Label Rekaman
$routes->add('/control/labelrekaman', 'LabelRekaman::index', ['filter' => 'role:Admin, GM, MK, MD']);
$routes->add('/control/labelrekaman/form', 'LabelRekaman::form', ['filter' => 'role:Admin, MD']);
$routes->get('/control/labelrekaman/edit/(:num)', 'LabelRekaman::edit/$1', ['filter' => 'role:Admin, MD']);
$routes->delete('/control/labelrekaman/(:num)', 'LabelRekaman::delete/$1', ['filter' => 'role:Admin, MD']);
$routes->add('/labelrekaman/insert', 'LabelRekaman::insert', ['filter' => 'role:Admin, MD']);
$routes->add('/labelrekaman/update/(:num)', 'LabelRekaman::update/$1', ['filter' => 'role:Admin, MD']);

// Pemutaran Serentak
$routes->add('/control/pemutaranserentak', 'PemutaranSerentak::index', ['filter' => 'role:Admin, GM, MK, MD']);
$routes->add('/control/pemutaranserentak/form', 'PemutaranSerentak::form', ['filter' => 'role:Admin, MD']);
$routes->get('/control/pemutaranserentak/edit/(:num)', 'PemutaranSerentak::edit/$1', ['filter' => 'role:Admin, MD']);
$routes->delete('/control/pemutaranserentak/(:num)', 'PemutaranSerentak::delete/$1', ['filter' => 'role:Admin, MD']);
$routes->add('/pemutaranserentak/insert', 'PemutaranSerentak::insert', ['filter' => 'role:Admin, MD']);
$routes->add('/pemutaranserentak/update/(:num)', 'PemutaranSerentak::update/$1', ['filter' => 'role:Admin, MD']);

// Program
$routes->add('/control/program', 'Program::index', ['filter' => 'role:Admin, GM, MK, Produksi']);
$routes->get('/control/program/form', 'Program::form', ['filter' => 'role:Admin, Produksi']);
$routes->get('/control/program/edit/(:num)', 'Program::edit/$1', ['filter' => 'role:Admin, Produksi']);
$routes->delete('/control/program/(:num)', 'Program::delete/$1', ['filter' => 'role:Admin, Produksi']);
$routes->add('/program/insert', 'Program::insert', ['filter' => 'role:Admin, Produksi']);
$routes->add('/program/update/(:num)', 'Program::update/$1', ['filter' => 'role:Admin, Produksi']);

// Podcast
$routes->add('/control/podcast', 'Podcast::index', ['filter' => 'role:Admin, GM, MK, Produksi']);
$routes->get('/control/podcast/form', 'Podcast::form', ['filter' => 'role:Admin, Produksi']);
$routes->get('/control/podcast/edit/(:num)', 'Podcast::edit/$1', ['filter' => 'role:Admin, Produksi']);
$routes->delete('/control/podcast/(:num)', 'Podcast::delete/$1', ['filter' => 'role:Admin, Produksi']);
$routes->add('/podcast/insert', 'Podcast::insert', ['filter' => 'role:Admin, Produksi']);
$routes->add('/podcast/update/(:num)', 'Podcast::update/$1', ['filter' => 'role:Admin, Produksi']);

// Audios
$routes->add('/control/audios', 'Audios::index', ['filter' => 'role:Admin, GM, MK, Produksi']);
$routes->get('/control/audios/form', 'Audios::form', ['filter' => 'role:Admin, Produksi']);
$routes->get('/control/audios/edit/(:num)', 'Audios::edit/$1', ['filter' => 'role:Admin, Produksi']);
$routes->delete('/control/audios/(:num)', 'Audios::delete/$1', ['filter' => 'role:Admin, Produksi']);
$routes->add('/audios/insert', 'Audios::insert', ['filter' => 'role:Admin, Produksi']);
$routes->add('/audios/update/(:num)', 'Audios::update/$1', ['filter' => 'role:Admin, Produksi']);

// Videos
$routes->add('/control/videos', 'Videos::index', ['filter' => 'role:Admin, GM, MK, Produksi']);
$routes->get('/control/videos/form', 'Videos::form', ['filter' => 'role:Admin, Produksi']);
$routes->get('/control/videos/edit/(:num)', 'Videos::edit/$1', ['filter' => 'role:Admin, Produksi']);
$routes->delete('/control/videos/(:num)', 'Videos::delete/$1', ['filter' => 'role:Admin, Produksi']);
$routes->add('/videos/insert', 'Videos::insert', ['filter' => 'role:Admin, Produksi']);
$routes->add('/videos/update/(:num)', 'Videos::update/$1', ['filter' => 'role:Admin, Produksi']);

// DIVISI MARKETING //
// Timeline Divisi Marketing
$routes->add('/control/marketing', 'Marketing::index', ['filter' => 'role:Admin, GM, MM, MOn, MOff']);
$routes->get('/control/marketing/form', 'Marketing::form', ['filter' => 'role:Admin, MM']);
$routes->get('/control/marketing/edit/(:num)', 'Marketing::edit/$1', ['filter' => 'role:Admin, MM']);
$routes->delete('/control/marketing/(:num)', 'Marketing::delete/$1', ['filter' => 'role:Admin, MM']);
$routes->add('/marketing/insert', 'Marketing::insert', ['filter' => 'role:Admin, MM']);
$routes->add('/marketing/update/(:num)', 'Marketing::update/$1', ['filter' => 'role:Admin, MM']);

// Medpart
$routes->add('/control/medpart', 'Medpart::index', ['filter' => 'role:Admin, GM, MM, MOn']);
$routes->get('/control/medpart/form', 'Medpart::form', ['filter' => 'role:Admin, MOn']);
$routes->get('/control/medpart/edit/(:num)', 'Medpart::edit/$1', ['filter' => 'role:Admin, MOn']);
$routes->delete('/control/medpart/(:num)', 'Medpart::delete/$1', ['filter' => 'role:Admin, MOn']);
$routes->add('/medpart/insert', 'Medpart::insert', ['filter' => 'role:Admin, MOn']);
$routes->add('/medpart/update/(:num)', 'Medpart::update/$1', ['filter' => 'role:Admin, MOn']);

// Iklan
$routes->add('/control/iklan', 'Iklan::index', ['filter' => 'role:Admin, GM, MM, MOn']);
$routes->get('/control/iklan/form', 'Iklan::form', ['filter' => 'role:Admin, MOn']);
$routes->get('/control/iklan/edit/(:num)', 'Iklan::edit/$1', ['filter' => 'role:Admin, MOn']);
$routes->delete('/control/iklan/(:num)', 'Iklan::delete/$1', ['filter' => 'role:Admin, MOn']);
$routes->add('/iklan/insert', 'Iklan::insert', ['filter' => 'role:Admin, MOn']);
$routes->add('/iklan/update/(:num)', 'Iklan::update/$1', ['filter' => 'role:Admin, MOn']);

// Denda Adlibs & Spot
$routes->add('/control/dendadlibs', 'DendaAdlibs::index', ['filter' => 'role:Admin, GM, MM, MOn']);
$routes->get('/control/dendadlibs/form', 'DendaAdlibs::form', ['filter' => 'role:Admin, MOn']);
$routes->get('/control/dendadlibs/edit/(:num)', 'DendaAdlibs::edit/$1', ['filter' => 'role:Admin, MOn']);
$routes->delete('/control/dendadlibs/(:num)', 'DendaAdlibs::delete/$1', ['filter' => 'role:Admin, MOn']);
$routes->add('/dendadlibs/insert', 'DendaAdlibs::insert', ['filter' => 'role:Admin, MOn']);
$routes->add('/dendadlibs/update/(:num)', 'DendaAdlibs::update/$1', ['filter' => 'role:Admin, MOn']);

// M-Talent
$routes->add('/control/mtalent', 'MTalent::index', ['filter' => 'role:Admin, GM, MM, MOff']);
$routes->get('/control/mtalent/form', 'MTalent::form', ['filter' => 'role:Admin, MOff']);
$routes->get('/control/mtalent/edit/(:num)', 'MTalent::edit/$1', ['filter' => 'role:Admin, MOff']);
$routes->delete('/control/mtalent/(:num)', 'MTalent::delete/$1', ['filter' => 'role:Admin, MOff']);
$routes->add('/mtalent/insert', 'MTalent::insert', ['filter' => 'role:Admin, MOff']);
$routes->add('/mtalent/update/(:num)', 'MTalent::update/$1', ['filter' => 'role:Admin, MOff']);


// DIVISI PERSONALIA //
// Timeline Divisi Personalia
$routes->add('/control/personalia', 'Personalia::index', ['filter' => 'role:Admin, GM, MP, HRD, Advokat']);
$routes->get('/control/personalia/form', 'Personalia::form', ['filter' => 'role:Admin, MP']);
$routes->get('/control/personalia/edit/(:num)', 'Personalia::edit/$1', ['filter' => 'role:Admin, MP']);
$routes->delete('/control/personalia/(:num)', 'Personalia::delete/$1', ['filter' => 'role:Admin, MP']);
$routes->add('/personalia/insert', 'Personalia::insert', ['filter' => 'role:Admin, MP']);
$routes->add('/personalia/update/(:num)', 'Personalia::update/$1', ['filter' => 'role:Admin, MP']);

// Surat SP
$routes->add('/control/suratsp', 'SuratSP::index', ['filter' => 'role:Admin, GM, MP, Advokat']);
$routes->get('/control/suratsp/form', 'SuratSP::form', ['filter' => 'role:Admin, Advokat']);
$routes->get('/control/suratsp/edit/(:num)', 'SuratSP::edit/$1', ['filter' => 'role:Admin, Advokat']);
$routes->delete('/control/suratsp/(:num)', 'SuratSP::delete/$1', ['filter' => 'role:Admin, Advokat']);
$routes->add('/suratsp/insert', 'SuratSP::insert', ['filter' => 'role:Admin, Advokat']);
$routes->add('/suratsp/update/(:num)', 'SuratSP::update/$1', ['filter' => 'role:Admin, Advokat']);

// Capeng
$routes->add('/control/capeng', 'Capeng::index', ['filter' => 'role:Admin, GM, MP, Advokat']);
$routes->get('/control/capeng/form', 'Capeng::form', ['filter' => 'role:Admin, Advokat']);
$routes->get('/control/capeng/edit/(:num)', 'Capeng::edit/$1', ['filter' => 'role:Admin, Advokat']);
$routes->delete('/control/capeng/(:num)', 'Capeng::delete/$1', ['filter' => 'role:Admin, Advokat']);
$routes->add('/capeng/insert', 'Capeng::insert', ['filter' => 'role:Admin, Advokat']);
$routes->add('/capeng/update/(:num)', 'Capeng::update/$1', ['filter' => 'role:Admin, Advokat']);

// Magang Internal
$routes->add('/control/maganginternal', 'MagangInternal::index', ['filter' => 'role:Admin, GM, MP, HRD']);
$routes->get('/control/maganginternal/form', 'MagangInternal::form', ['filter' => 'role:Admin, HRD']);
$routes->get('/control/maganginternal/edit/(:num)', 'MagangInternal::edit/$1', ['filter' => 'role:Admin, HRD']);
$routes->delete('/control/maganginternal/(:num)', 'MagangInternal::delete/$1', ['filter' => 'role:Admin, HRD']);
$routes->add('/maganginternal/insert', 'MagangInternal::insert', ['filter' => 'role:Admin, HRD']);
$routes->add('/maganginternal/update/(:num)', 'MagangInternal::update/$1', ['filter' => 'role:Admin, HRD']);

// Workshop Broadcast
$routes->add('/control/workshopbroadcast', 'WorkshopBroadcast::index', ['filter' => 'role:Admin, GM, MP, HRD']);
$routes->get('/control/workshopbroadcast/form', 'WorkshopBroadcast::form', ['filter' => 'role:Admin, HRD']);
$routes->get('/control/workshopbroadcast/edit/(:num)', 'WorkshopBroadcast::edit/$1', ['filter' => 'role:Admin, HRD']);
$routes->delete('/control/workshopbroadcast/(:num)', 'WorkshopBroadcast::delete/$1', ['filter' => 'role:Admin, HRD']);
$routes->add('/workshopbroadcast/insert', 'WorkshopBroadcast::insert', ['filter' => 'role:Admin, HRD']);
$routes->add('/workshopbroadcast/update/(:num)', 'WorkshopBroadcast::update/$1', ['filter' => 'role:Admin, HRD']);

// Crew
$routes->add('/control/crew', 'Crew::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/control/crew/form', 'Crew::form', ['filter' => 'role:Admin, HRD']);
$routes->get('/control/crew/edit/(:num)', 'Crew::edit/$1', ['filter' => 'role:Admin, HRD']);
$routes->delete('/control/crew/(:num)', 'Crew::delete/$1', ['filter' => 'role:Admin, HRD']);
$routes->add('/crew/insert', 'Crew::insert', ['filter' => 'role:Admin, HRD']);
$routes->add('/crew/update/(:num)', 'Crew::update/$1', ['filter' => 'role:Admin, HRD']);

// Pengurus
$routes->add('/control/pengurus', 'Pengurus::index', ['filter' => 'role:Admin, GM, PA, MM, MP, MU, MK, Produksi, Jurnalistik, MD, AOn, AOff, Teknisi, HRD, Advokat, MOn, MOff, Alumni, Demis, Crew']);
$routes->get('/control/pengurus/form', 'Pengurus::form', ['filter' => 'role:Admin, HRD']);
$routes->get('/control/pengurus/edit/(:num)', 'Pengurus::edit/$1', ['filter' => 'role:Admin, HRD']);
$routes->delete('/control/pengurus/(:num)', 'Pengurus::delete/$1', ['filter' => 'role:Admin, HRD']);
$routes->add('/pengurus/insert', 'Pengurus::insert', ['filter' => 'role:Admin, HRD']);
$routes->add('/pengurus/update/(:num)', 'Pengurus::update/$1', ['filter' => 'role:Admin, HRD']);

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
