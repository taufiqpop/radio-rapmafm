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
    <?php if (in_groups('Admin')) : ?>
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
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi GMPA</div>

    <!-- General Manager -->
    <!-- Timeline GMPA -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/gmpa">
            <i class="fas fa-business-time"></i>
            <span>Timeline GMPA</span>
        </a>
    </li>

    <!-- Personal Assistant -->
    <!-- Daftar Surat -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/surat">
            <i class="fas fa-envelope-open-text"></i>
            <span>Daftar Surat</span>
        </a>
    </li>

    <!-- Data Keuangan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/keuangan">
            <i class="	fas fa-dollar-sign"></i>
            <span>Data Keuangan</span>
        </a>
    </li>

    <!-- ==================================================================== -->

    <!-- Umum -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Umum</div>

    <!-- Manager -->
    <!-- Timeline Divisi Umum -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/umum">
            <i class="fas fa-business-time"></i>
            <span>Timeline Divum</span>
        </a>
    </li>

    <!-- Admisi On Air -->
    <!-- Achievements -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/achievements">
            <i class="fas fa-trophy"></i>
            <span>Achievements</span>
        </a>
    </li>

    <!-- Structure of Organization -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/structure">
            <i class="fas fa-address-card"></i>
            <span>Struktur Organisasi</span>
        </a>
    </li>

    <!-- Admisi Off Air -->
    <!-- Data Inventaris -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/inventaris">
            <i class="fas fa-database"></i>
            <span>Data Inventaris</span>
        </a>
    </li>

    <!-- Teknisi -->
    <!-- Pemancar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/pemancar">
            <i class="fas fa-broadcast-tower"></i>
            <span>Pemancar</span>
        </a>
    </li>

    <!-- ==================================================================== -->

    <!-- Kepenyiaran -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Kepenyiaran</div>

    <!-- Timeline Divisi Kepenyiaran -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/kepenyiaran">
            <i class="fas fa-business-time"></i>
            <span>Timeline Kepenyiaran</span>
        </a>
    </li>

    <!-- Manager -->
    <!-- Jadwal Siar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/jadwalsiar">
            <i class="fas fa-calendar-alt"></i>
            <span>Jadwal Siar</span>
        </a>
    </li>

    <!-- Program Siar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/program">
            <i class="fas fa-grip-horizontal"></i>
            <span>Program Siar</span>
        </a>
    </li>

    <!-- Jurnalistik -->
    <!-- Rapma News -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/news">
            <i class="fas fa-newspaper"></i>
            <span>Rapma News</span>
        </a>
    </li>

    <!-- Music Director -->
    <!-- Bank Lagu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/lagu">
            <i class="fas fa-music"></i>
            <span>Bank Lagu</span>
        </a>
    </li>

    <!-- Produksi -->
    <!-- Data Podcast -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/podcast">
            <i class="fas fa-microphone"></i>
            <span>Podcast</span>
        </a>
    </li>

    <!-- ID's | RE | Spot -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/audios">
            <i class="fas fa-headset"></i>
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

    <!-- ==================================================================== -->

    <!-- Marketing -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Marketing</div>

    <!-- Manager -->
    <!-- Timeline Divisi Marketing -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/marketing">
            <i class="fas fa-business-time"></i>
            <span>Timeline Marketing</span>
        </a>
    </li>

    <!-- Marketing On Air -->
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

    <!-- Marketing Off Air -->
    <!-- Events -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/events">
            <i class="fas fa-calendar-week"></i>
            <span>Events</span>
        </a>
    </li>

    <!-- M-Talent -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/mtalent">
            <i class="fas fa-star"></i>
            <span>M-Talent</span>
        </a>
    </li>

    <!-- ==================================================================== -->

    <!-- Personalia -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Personalia</div>

    <!-- Manager -->
    <!-- Timeline Divisi Personalia -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/personalia">
            <i class="fas fa-business-time"></i>
            <span>Timeline Personalia</span>
        </a>
    </li>

    <!-- Advokat -->
    <!-- Rules -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/rules">
            <i class="fas fa-file-alt"></i>
            <span>Rules</span>
        </a>
    </li>

    <!-- HRD -->
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

    <!-- Page Management -->
    <div class="sidebar-heading">Others</div>

    <!-- Pesan -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>pesan">
            <i class="fas fa-comment"></i>
            <span>Pesan</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/settings">
            <i class="fas fa-cog"></i>
            <span>Pengaturan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>