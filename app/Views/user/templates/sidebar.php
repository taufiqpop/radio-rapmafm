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

    <!-- Umum -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Umum</div>

    <!-- Achievements -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/achievements">
            <i class="fas fa-hand-holding-medical"></i>
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

    <!-- Kepenyiaran -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Kepenyiaran</div>

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
            <i class="fas fa-microphone"></i>
            <span>Program Siar</span>
        </a>
    </li>

    <!-- Rapma News -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/news">
            <i class="fas fa-newspaper"></i>
            <span>Rapma News</span>
        </a>
    </li>

    <!-- Top Chart -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/topchart">
            <i class="fas fa-music"></i>
            <span>Top Chart</span>
        </a>
    </li>

    <!-- Marketing -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Marketing</div>

    <!-- Media Partner -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/medpart">
            <i class="fas fa-bullhorn"></i>
            <span>Media Partner</span>
        </a>
    </li>

    <!-- Events -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/events">
            <i class="fas fa-calendar-week"></i>
            <span>Events</span>
        </a>
    </li>

    <!-- Personalia -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Personalia</div>

    <!-- Alumni -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/alumni">
            <i class="fas fa-graduation-cap"></i>
            <span>Alumni</span>
        </a>
    </li>

    <!-- GMPA -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi GMPA</div>

    <!-- About -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/about">
            <i class="fab fa-amazon"></i>
            <span>About</span>
        </a>
    </li>

    <!-- Surat-Surat -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/surat">
            <i class="fas fa-envelope-open-text"></i>
            <span>Daftar Surat</span>
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