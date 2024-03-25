<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-microphone fa-spin"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rapma FM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>user">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- User Management -->
    <?php if (in_groups(['Admin', 'GM'])) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- User Management -->
        <div class="sidebar-heading">User Management</div>

        <!-- User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>admin">
                <i class="fas fa-users"></i>
                <span>User List</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>profile/<?= user()->id; ?>">
            <i class="fas fa-user"></i>
            <span>My Profile</span>
        </a>
    </li>

    <!-- ==================================================================== -->

    <!-- GMPA -->
    <?php if (in_groups(['Admin', 'GM', 'PA', 'Crew'])) : ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Divisi GMPA</div>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'PA'])) : ?>

        <!-- General Manager -->
        <!-- Timeline GMPA -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/gmpa">
                <i class="fas fa-business-time"></i>
                <span>Timeline GMPA</span>
            </a>
        </li>

        <!-- Personal Assistant -->
        <!-- Surat Masuk -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/suratmasuk">
                <i class="fas fa-envelope"></i>
                <span>Surat Masuk</span>
            </a>
        </li>

        <!-- Surat Keluar -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/suratkeluar">
                <i class="fas fa-envelope-open-text"></i>
                <span>Surat Keluar</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'PA', 'Crew'])) : ?>
        <!-- Arus Kas -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/aruskas">
                <i class="fas fa-dollar-sign"></i>
                <span>Arus Kas</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- ==================================================================== -->

    <!-- Divisi Umum -->
    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat', 'Crew'])) : ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Divisi Umum</div>
    <?php endif; ?>

    <!-- Manager -->
    <?php if (in_groups(['Admin', 'GM', 'MU', 'AOn', 'AOff', 'Teknisi'])) : ?>
        <!-- Timeline Divisi Umum -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/umum">
                <i class="fas fa-business-time"></i>
                <span>Timeline Divum</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Admisi On Air -->
    <?php if (in_groups(['Admin', 'GM', 'MU', 'AOn'])) : ?>
        <!-- Data Konten -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/konten">
                <i class="fas fa-chart-bar"></i>
                <span>Data Konten</span>
            </a>
        </li>

        <!-- Achievements -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/achievements">
                <i class="fas fa-trophy"></i>
                <span>Achievements</span>
            </a>
        </li>

        <!-- Events -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/events">
                <i class="fas fa-calendar-week"></i>
                <span>Events</span>
            </a>
        </li>

        <!-- Structure of Organization -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/structure">
                <i class="fas fa-address-card"></i>
                <span>Struktur Organisasi</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Admisi Off Air -->
    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat', 'Crew'])) : ?>
        <!-- Jadwal Piket -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/jadwalpiket">
                <i class="fas fa-calendar-check"></i>
                <span>Jadwal Piket</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'MU', 'AOff'])) : ?>
        <!-- Data Inventaris -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/inventaris">
                <i class="fas fa-database"></i>
                <span>Data Inventaris</span>
            </a>
        </li>

        <!-- Kerja Bakti -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/kerjabakti">
                <i class="fas fa-broom"></i>
                <span>Kerja Bakti</span>
            </a>
        </li>

        <!-- Data Peminjaman -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/peminjaman">
                <i class="fas fa-people-carry"></i>
                <span>Data Peminjaman</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Teknisi -->
    <?php if (in_groups(['Admin', 'GM', 'MU', 'Teknisi'])) : ?>
        <!-- Pemancar -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/pemancar">
                <i class="fas fa-broadcast-tower"></i>
                <span>Pemancar</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- ==================================================================== -->

    <!-- Divisi Kepenyiaran -->
    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat', 'Crew'])) : ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Divisi Kepenyiaran</div>
    <?php endif; ?>

    <!-- Manager -->
    <?php if (in_groups(['Admin', 'GM', 'MK', 'Produksi', 'Jurnalistik', 'MD'])) : ?>
        <!-- Timeline Divisi Kepenyiaran -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/kepenyiaran">
                <i class="fas fa-business-time"></i>
                <span>Timeline Kepenyiaran</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat', 'Crew'])) : ?>
        <!-- Jadwal Siar -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/jadwalsiar">
                <i class="fas fa-calendar-alt"></i>
                <span>Jadwal Siar</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Jurnalistik -->
    <?php if (in_groups(['Admin', 'GM', 'MK', 'Jurnalistik'])) : ?>
        <!-- Artikel Blog -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/blog">
                <i class="fab fa-blogger-b"></i>
                <span>Artikel Blog</span>
            </a>
        </li>

        <!-- Berita Website -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/beritaweb">
                <i class="fas fa-code"></i>
                <span>Berita Website</span>
            </a>
        </li>

        <!-- Rapma News -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/news">
                <i class="fas fa-newspaper"></i>
                <span>Rapma News</span>
            </a>
        </li>

        <!-- Live Report -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/livereport">
                <i class="fas fa-camera"></i>
                <span>Live Report</span>
            </a>
        </li>

        <!-- Infografis -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/infografis">
                <i class="fas fa-file-image"></i>
                <span>Infografis</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat', 'Crew'])) : ?>
        <!-- Newsflash -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/newsflash">
                <i class="fas fa-bolt"></i>
                <span>Newsflash</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Music Director -->
    <?php if (in_groups(['Admin', 'GM', 'MK', 'MD'])) : ?>
        <!-- Bank Lagu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/lagu">
                <i class="fas fa-music"></i>
                <span>Bank Lagu</span>
            </a>
        </li>

        <!-- Pemutaran Serentak -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/pemutaranserentak">
                <i class="fas fa-rss"></i>
                <span>Pemutaran Serentak</span>
            </a>
        </li>

        <!-- Label Rekaman -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/labelrekaman">
                <i class="fas fa-compact-disc"></i>
                <span>Label Rekaman</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Produksi -->
    <?php if (in_groups(['Admin', 'GM', 'MK', 'Produksi'])) : ?>
        <!-- Program Siar -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/program">
                <i class="fas fa-headphones-alt"></i>
                <span>Program Siar</span>
            </a>
        </li>

        <!-- Data Podcast -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/podcast">
                <i class="fas fa-headset"></i>
                <span>Podcast</span>
            </a>
        </li>

        <!-- Data Audio -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/audios">
                <i class="fas fa-microphone"></i>
                <span>Data Audio</span>
            </a>
        </li>

        <!-- Data Videos -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/videos">
                <i class="fas fa-video"></i>
                <span>Data Video</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- ==================================================================== -->

    <!-- Marketing -->
    <?php if (in_groups(['Admin', 'GM', 'MM', 'MOn', 'MOff'])) : ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">Divisi Marketing</div>
    <?php endif; ?>

    <!-- Manager -->
    <?php if (in_groups(['Admin', 'GM', 'MM', 'MOn', 'MOff'])) : ?>
        <!-- Timeline Divisi Marketing -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/marketing">
                <i class="fas fa-business-time"></i>
                <span>Timeline Marketing</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- MOn -->
    <?php if (in_groups(['Admin', 'GM', 'MM', 'MOn'])) : ?>
        <!-- Media Partner -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/medpart">
                <i class="fas fa-bullhorn"></i>
                <span>Media Partner</span>
            </a>
        </li>

        <!-- Iklan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/iklan">
                <i class="fab fa-adversal"></i>
                <span>Iklan</span>
            </a>
        </li>

        <!-- Denda Adlibs & Spot -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/dendadlibs">
                <i class="fab fa-amazon-pay"></i>
                <span>Denda Adlibs & Spot</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- MOff -->
    <?php if (in_groups(['Admin', 'GM', 'MM', 'MOff'])) : ?>
        <!-- M-Talent -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/mtalent">
                <i class="fas fa-star"></i>
                <span>M-Talent</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- ==================================================================== -->

    <!-- Personalia -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Personalia</div>

    <!-- Manager -->
    <?php if (in_groups(['Admin', 'GM', 'MP', 'HRD', 'Advokat'])) : ?>
        <!-- Timeline Divisi Personalia -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/personalia">
                <i class="fas fa-business-time"></i>
                <span>Timeline Personalia</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Advokat -->
    <?php if (in_groups(['Admin', 'GM', 'MP', 'Advokat'])) : ?>
        <!-- Surat SP -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/suratsp">
                <i class="fas fa-exclamation-triangle"></i>
                <span>Surat SP</span>
            </a>
        </li>

        <!-- Kontrak Capeng -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/capeng">
                <i class="	fas fa-file-signature"></i>
                <span>Kontrak Capeng</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- HRD -->
    <?php if (in_groups(['Admin', 'GM', 'MP', 'HRD'])) : ?>
        <!-- Magang Internal -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/maganginternal">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Magang Internal</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'MP', 'HRD'])) : ?>
        <!-- Workshop Broadcast -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/workshopbroadcast">
                <i class="fas fa-chart-line"></i>
                <span>Workshop Broadcast</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Pengurus -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/pengurus">
            <i class="fas fa-restroom"></i>
            <span>Pengurus</span>
        </a>
    </li>

    <!-- Crew -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/crew">
            <i class="fas fa-child"></i>
            <span>Crew</span>
        </a>
    </li>

    <!-- Alumni -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/alumni">
            <i class="fas fa-graduation-cap"></i>
            <span>Alumni</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Others -->
    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat'])) : ?>
        <div class="sidebar-heading">Others</div>

        <!-- Pesan -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>pesan">
                <i class="fas fa-comment"></i>
                <span>Pesan</span>
            </a>
        </li>
    <?php endif; ?>

    <!-- Settings -->
    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'Teknisi', 'MD', 'MOn', 'MOff'])) : ?>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/settings">
                <i class="fas fa-cog"></i>
                <span>Pengaturan</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <?php endif; ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>