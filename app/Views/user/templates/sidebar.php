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
    <?php if (in_groups(['Admin', 'GM', 'PA'])) : ?>
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
    <?php endif; ?>

    <!-- ==================================================================== -->

    <!-- Divisi Umum -->
    <?php if (in_groups(['Admin', 'GM', 'MU', 'AOn', 'AOff', 'Teknisi'])) : ?>
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
    <?php if (in_groups(['Admin', 'GM', 'MU', 'AOff'])) : ?>
        <!-- Data Inventaris -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/inventaris">
                <i class="fas fa-database"></i>
                <span>Data Inventaris</span>
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
    <hr class="sidebar-divider">
    <div class="sidebar-heading">Divisi Kepenyiaran</div>

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

    <!-- Jadwal Siar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/jadwalsiar">
            <i class="fas fa-calendar-alt"></i>
            <span>Jadwal Siar</span>
        </a>
    </li>

    <!-- Jurnalistik -->
    <?php if (in_groups(['Admin', 'GM', 'MK', 'Jurnalistik'])) : ?>
        <!-- Rapma News -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/news">
                <i class="fas fa-newspaper"></i>
                <span>Rapma News</span>
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
    <?php endif; ?>

    <!-- Produksi -->
    <?php if (in_groups(['Admin', 'GM', 'MK', 'Produksi', 'MD'])) : ?>
        <!-- Program Siar -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/program">
                <i class="fas fa-headphones-alt"></i>
                <span>Program Siar</span>
            </a>
        </li>
    <?php endif; ?>

    <?php if (in_groups(['Admin', 'GM', 'MK', 'Produksi'])) : ?>
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
        <!-- Rules -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>control/rules">
                <i class="fas fa-file-alt"></i>
                <span>Rules</span>
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
    <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat', 'Demis', 'Alumni'])) : ?>
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