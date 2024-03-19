<!DOCTYPE html>

<!-- Teknisi On Air 2021 (Taufiq Pop) -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>logo.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|
    Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,
    700i" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url(); ?>css/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Link -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>css/style.css" rel="stylesheet">

    <!-- My CSS -->
    <link href="<?= base_url(); ?>css/my-style-frontend.css" rel="stylesheet">
</head>

<body>
    <!-- Mobile Nav Toggle Button -->
    <i class="bi bi-list mobile-nav-toggle"></i>


    <?php foreach ($settings as $setting) : ?>
        <!-- Header -->
        <header id="header" stats="false">
            <div class="d-flex flex-column">
                <div class="profile">
                    <img src="<?= base_url(); ?>img/home/RapmaFM.png" class="img-fluid rounded-circle">
                    <h1 class="text-light"><a href="<?= base_url(); ?>" title="Rapma FM"><?= $setting['owner']; ?></a></h1>
                </div>

                <!-- Navbar -->
                <nav id="navbar" class="nav-menu navbar">
                    <ul>
                        <li><a href="<?= base_url(); ?>index#hero" class="nav-link scrollto active"><i class="bx bx-home" title="Home"></i>
                                <span>Home</span></a></li>
                        <li><a href="<?= base_url(); ?>index#structure" class="nav-link scrollto"><i class="bx bx-user" title="Structure"></i>
                                <span>Structure</span></a></li>
                        <li><a href="<?= base_url(); ?>index#program" class="nav-link scrollto"><i class="bx bx-microphone" title="Program"></i>
                                <span>Program</span></a></li>
                        <li><a href="<?= base_url(); ?>index#chart" class="nav-link scrollto"><i class="bx bx-music" title="Top Chart"></i>
                                <span>Top Chart</span></a></li>
                        <li><a href="<?= base_url(); ?>index#event" class="nav-link scrollto"><i class="bx bx-calendar-event" title="Events"></i>
                                <span>Events</span></a></li>
                        <li><a href="<?= base_url(); ?>index#achievement" class="nav-link scrollto"><i class="bx bx-trophy" title="Achievements"></i>
                                <span>Achievements</span></a></li>
                        <li><a href="<?= base_url(); ?>index#news" class="nav-link scrollto"><i class="bx bx-news" title="Rapma News"></i>
                                <span>Rapma News</span></a></li>
                        <li><a href="<?= base_url(); ?>index#contact" class="nav-link scrollto"><i class="bx bx-envelope" title="Contact"></i>
                                <span>Contact</span></a></li>
                    </ul>
                </nav>
                <audio id="demosMenu" controls autoplay style="width: auto; height: 25px;">
                    <source src="<?= $setting['streaming']; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <a href="<?= base_url(); ?>user" style="color:black;" target="_blank"><a href="<?= base_url(); ?>user" style="color:black;" target="_blank"> &copy;</a>
            </div>
        </header>
    <?php endforeach ?>


    <!-- Main Content -->
    <?= $this->renderSection('page-content'); ?>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright <strong><span><?= date('Y'); ?> <a href="<?= base_url(); ?>login" style="color:black;" target="_blank"> &copy;</a> Rapma FM</span></strong>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>js/aos/aos.js"></script>
    <script src="<?= base_url(); ?>js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>js/glightbox/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>js/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>js/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>js/typed.js/typed.min.js"></script>
    <script src="<?= base_url(); ?>js/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- JS Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main JavaScript -->
    <script src="<?= base_url(); ?>js/main-frontend.js"></script>

    <!-- My JS -->
    <script src="<?= base_url(); ?>js/my-scripts-frontend.js"></script>
</body>

</html>