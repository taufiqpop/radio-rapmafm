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
                                            <i class="fas fa-business-time fa-2x text-primary"></i>
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
                                            <i class="fas fa-envelope fa-2x text-info"></i>
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
                                            <i class="fas fa-envelope-open-text fa-2x text-info"></i>
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
                                            <i class="fas fa-business-time fa-2x text-primary"></i>
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
                                            <i class="fas fa-trophy fa-2x text-info"></i>
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
                                            <i class="fas fa-calendar-week fa-2x text-info"></i>
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
                                            <i class="fas fa-database fa-2x text-success"></i>
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
                                            <i class="fas fa-people-carry fa-2x text-success"></i>
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
                                            <i class="fas fa-business-time fa-2x text-primary"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rapma News -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Rapma News</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlNews; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/news">
                                            <i class="fas fa-newspaper fa-2x text-warning"></i>
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
                                            <i class="fas fa-music fa-2x text-info"></i>
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
                                            <i class="fas fa-rss fa-2x text-info"></i>
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
                                            <i class="fas fa-compact-disc fa-2x text-info"></i>
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
                                            <i class="fas fa-headphones-alt fa-2x text-success"></i>
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
                                            <i class="fas fa-microphone fa-2x text-success"></i>
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
                                            <i class="fas fa-headset fa-2x text-success"></i>
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
                                            <i class="fas fa-video fa-2x text-success"></i>
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
                                            <i class="fas fa-business-time fa-2x text-primary"></i>
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
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Denda Adlibs</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlDendaAdlibs; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <a href="<?= base_url(); ?>control/dendadlibs">
                                            <i class="fab fa-amazon-pay fa-2x text-info"></i>
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
                                            <i class="fab fa-adversal fa-2x text-info"></i>
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
                                            <i class="fas fa-bullhorn fa-2x text-info"></i>
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
                                            <i class="fas fa-star fa-2x text-success"></i>
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
                                            <i class="fas fa-business-time fa-2x text-primary"></i>
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
                                            <i class="fas fa-graduation-cap fa-2x text-success"></i>
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
                                            <i class="fas fa-child fa-2x text-success"></i>
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
                                            <i class="fas fa-restroom fa-2x text-success"></i>
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
                                            <i class="fas fa-chalkboard-teacher fa-2x text-info"></i>
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
                                            <i class="fas fa-chart-line fa-2x text-info"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (in_groups(['Admin', 'GM'])) : ?>
                <!-- Admin -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Admin</h1>
                </div>
                <div class="row">
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
                                            <i class="fas fa-users fa-2x text-primary"></i>
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
                                            <i class="fas fa-comment fa-2x text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>