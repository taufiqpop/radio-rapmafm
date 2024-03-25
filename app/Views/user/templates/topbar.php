<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="navbar">

    <!-- Clock -->
    <i class="fas fa-clock fa-sm fa-fw mr-2 text-gray-400"></i>
    <strong>
        <span>
            <?php
            // Time Zone
            date_default_timezone_set('Asia/Jakarta');
            $hariIni = new DateTime();
            echo $hariIni->format('l, d F Y')
            ?>
            (<span id="jam"></span>
            <?= $hariIni->format('A') ?>)
        </span>
    </strong>

    <!-- Sidebar Toggle (Topbar Mobile Mode) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->fullname; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/user/<?= user()->user_image; ?>">
            </a>
            <!-- User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url(); ?>profile/<?= user()->id; ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    My Profile
                </a>
                <a class="dropdown-item" href="https://app.crisp.chat/" target="_blank">
                    <i class="fa fa-bell fa-sm fa-fw mr-2 text-gray-400"></i>
                    Live Chat
                </a>
                <?php if (in_groups(['Admin', 'GM', 'PA', 'MU', 'MK', 'MM', 'MP', 'AOn', 'AOff', 'Teknisi', 'Produksi', 'Jurnalistik', 'MD', 'MOn', 'MOff', 'HRD', 'Advokat'])) : ?>
                    <a class="dropdown-item" href="<?= base_url(); ?>pesan">
                        <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                        Pesan
                    </a>
                <?php endif; ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>