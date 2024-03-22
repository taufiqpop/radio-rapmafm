<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Dashboard -->
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">

            <!-- Message -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <?php if (in_groups(['Admin', 'GM', 'PA'])) : ?>
                <!-- Dashboard GMPA -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard GMPA</h1>
                    <?php if (in_groups(['Admin', 'GM', 'PA'])) : ?>
                        <a href="https://app.crisp.chat/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i class="fas fa-bell fa-sm text-white-50"></i> Live Chat</a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <!-- Total Timeline GMPA -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Timeline GMPA</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlGMPA; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/gmpa">
                                            <i class="fas fa-business-time slow-spin fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Surat Masuk -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Surat Masuk</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlSuratMasuk; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/suratmasuk">
                                            <i class="fas fa-envelope slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Surat Keluar -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Surat Keluar</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlSuratKeluar; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/suratkeluar">
                                            <i class="fas fa-envelope-open-text slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_groups(['Admin', 'GM', 'MU', 'AOn', 'AOff', 'Teknisi'])) : ?>
                <!-- Dashboard Divisi Umum -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Dashboard Divisi Umum</h1>
                    <?php if (in_groups(['MU', 'AOn', 'AOff', 'Teknisi'])) : ?>
                        <a href="https://app.crisp.chat/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i class="fas fa-bell fa-sm text-white-50"></i> Live Chat</a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <!-- Total Timeline Divisi Umum -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Timeline Divisi Umum</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUmum; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/umum">
                                            <i class="fas fa-business-time slow-spin fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Data Konten -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Konten</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlKonten; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/events">
                                            <i class="fas fa-chart-bar slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Achievements -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Achievements</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlAchievements; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/achievements">
                                            <i class="fas fa-trophy slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Events -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Events</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlEvents; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/events">
                                            <i class="fas fa-calendar-week slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Inventaris -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Inventaris</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlInventaris; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/inventaris">
                                            <i class="fas fa-database slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Peminjaman -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Peminjaman</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPeminjaman; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/peminjaman">
                                            <i class="fas fa-people-carry slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Kerja Bakti -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kerja Bakti</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlKerjaBakti; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/kerjabakti">
                                            <i class="fas fa-broom slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_groups(['Admin', 'GM', 'MK', 'MD', 'Jurnalistik', 'Produksi'])) : ?>
                <!-- Dashboard Divisi Kepenyiaran -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Dashboard Divisi Kepenyiaran</h1>
                    <?php if (in_groups(['MK', 'MD', 'Jurnalistik', 'Produksi'])) : ?>
                        <a href="https://app.crisp.chat/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i class="fas fa-bell fa-sm text-white-50"></i> Live Chat</a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <!-- Total Timeline Divisi Kepenyiaran -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Timeline Divisi Kepenyiaran</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlKepenyiaran; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/kepenyiaran">
                                            <i class="fas fa-business-time slow-spin fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Lagu -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lagu</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlLagu; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/lagu">
                                            <i class="fas fa-music slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Pemutaran Serentak -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pemutaran Serentak</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPemutaranSerentak; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/pemutaranserentak">
                                            <i class="fas fa-rss slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Label Rekaman -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Label Rekaman</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlLabelRekaman; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/labelrekaman">
                                            <i class="fas fa-compact-disc slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Program -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Program</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlProgram; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/program">
                                            <i class="fas fa-headphones-alt slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Podcast -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Podcast</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPodcast; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/podcast">
                                            <i class="fas fa-headset slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Audios -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Audios</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlAudios; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/audios">
                                            <i class="fas fa-microphone slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Videos -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Videos</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlVideos; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/videos">
                                            <i class="fas fa-video slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Artikel Blog -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Artikel Blog</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlBlog; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/blog">
                                            <i class="fab fa-blogger-b slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rapma News -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Rapma News</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlNews; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/news">
                                            <i class="fas fa-newspaper slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Live Report -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Live Report</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlLiveReport; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/livereport">
                                            <i class="fas fa-camera slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infografis -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Infografis</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlInfografis; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/infografis">
                                            <i class="fas fa-file-image slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Newsflash -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Newsflash</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlNewsflash; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/livereport">
                                            <i class="fas fa-bolt slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_groups(['Admin', 'GM', 'MM', 'MOn', 'MOff'])) : ?>
                <!-- Dashboard Divisi Marketing -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Dashboard Divisi Marketing</h1>
                    <?php if (in_groups(['MM', 'MOn', 'MOff'])) : ?>
                        <a href="https://app.crisp.chat/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i class="fas fa-bell fa-sm text-white-50"></i> Live Chat</a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <!-- Total Timeline Divisi Marketing -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Timeline Divisi Marketing</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlMarketing; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/marketing">
                                            <i class="fas fa-business-time slow-spin fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Media Partner -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Media Partner</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlMedpart; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/medpart">
                                            <i class="fas fa-bullhorn slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Iklan -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Iklan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlIklan; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/iklan">
                                            <i class="fab fa-adversal slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Denda Adlibs -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Denda Adlibs & Spot</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlDendaAdlibs; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/dendadlibs">
                                            <i class="fab fa-amazon-pay slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total M-Talent -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">M-Talent</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlMtalent; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/mtalent">
                                            <i class="fas fa-star slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_groups(['Admin', 'GM', 'MP', 'HRD', 'Advokat'])) : ?>
                <!-- Dashboard Divisi Personalia -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> Dashboard Divisi Personalia</h1>
                    <?php if (in_groups(['MP', 'HRD', 'Advokat'])) : ?>
                        <a href="https://app.crisp.chat/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i class="fas fa-bell fa-sm text-white-50"></i> Live Chat</a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <!-- Total Timeline Divisi Personalia -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Timeline Divisi Personalia</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPersonalia; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/personalia">
                                            <i class="fas fa-business-time slow-spin fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Alumni -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Alumni</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlAlumni; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/alumni">
                                            <i class="fas fa-graduation-cap slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Crew -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Crew</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlCrew; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/crew">
                                            <i class="fas fa-child slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Pengurus -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengurus</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPengurus; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/pengurus">
                                            <i class="fas fa-restroom slow-spin fa-2x text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Surat SP -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Surat SP</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlSuratSP; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/suratsp">
                                            <i class="fas fa-exclamation-triangle slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Kontrak Capeng -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Kontrak Capeng</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlCapeng; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/capeng">
                                            <i class="fas fa-file-signature slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Magang Internal -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Magang Internal</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlMagangInternal; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/maganginternal">
                                            <i class="fas fa-chalkboard-teacher slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Workshop Broadcast -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Workshop Broadcast</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlWorkshopBroadcast; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/workshopbroadcast">
                                            <i class="fas fa-chart-line slow-spin fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Admin -->
            <?php if (in_groups(['Admin', 'Crew', 'Alumni', 'Demis'])) : ?>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php if (in_groups(['Admin', 'GM'])) : ?>
                    <!-- Total Users -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUsers; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>admin">
                                            <i class="fas fa-users slow-spin fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Pesan -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pesan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPesan; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>pesan">
                                            <i class="fas fa-comment slow-spin fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (in_groups(['Admin', 'Crew', 'Alumni', 'Demis'])) : ?>
                    <!-- Penyiar -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <marquee style="color: red;" behavior="alternate" direction="left" scrolldelay="80" truespeed>
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">Ganti Penyiar</div>
                                        </marquee>
                                        <?php foreach ($penyiar as $siar) : ?>
                                            <?php $data = json_decode($siar['value']) ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <marquee style="color: red;" behavior="alternate" direction="left" scrolldelay="80" truespeed>
                                                    <?= $data->program; ?> ||
                                                    <?= $data->penyiar1; ?>
                                                    <?php if ($data->penyiar2 != '-') : ?>
                                                        X <?= $data->penyiar2; ?>
                                                    <?php endif; ?>
                                                </marquee>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/penyiar">
                                            <i class="fas fa-microphone slow-spin fa-3x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>