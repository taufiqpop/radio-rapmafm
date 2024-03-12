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

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Page Management -->
    <div class="sidebar-heading">Divisi Umum</div>

    <!-- Achievements -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>control/achievements">
            <i class="fas fa-hand-holding-medical"></i>
            <span>Achievements</span>
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