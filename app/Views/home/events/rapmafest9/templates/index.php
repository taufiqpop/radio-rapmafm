<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>events/rapmafest9/img/ico rapfest9.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest9/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>events/rapmafest9/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>events/rapmafest9/css/erwin.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Header -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="col-lg-2 w-auto">
                <img src="<?= base_url(); ?>events/rapmafest9/img/logo rapfest tanpa judul.png" style="width:159px; height:113px; margin-top: -12px;">
            </div>
            <div class="w-auto">
                <nav id="navbar" class="navbar order-last order-lg-0 d-flex justify-content-between">
                    <ul class="me-2">
                        <li><a class="nav-link scrollto active" href="<?= base_url(); ?>#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#about">About</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#seminar">Seminar</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#konser">Concert</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#timeline">Timeline</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#sponsor">Sponsor</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#medpart">Media Partner</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#rapmerch">Rapmerch</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#contact">Contact</a></li>
                    </ul>
                    <a href="<?= base_url(); ?>#buytiket" class="get-started-btn scrollto text-white py-3">Buy Ticket</a>
                    <i class="bi bi-list mobile-nav-toggle me-1"></i>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <?= $this->renderSection('page-content'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Footer -->
    <footer id="footer">
        <center>
            <div class="container p-3">
                <div class="copyright">
                    Copyright &copy;<strong> 2022</strong> Rapma FM
                </div>
            </div>
        </center>
    </footer>

    <a href="<?= base_url(); ?>#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest9/vendor/php-email-form/validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>events/rapmafest9/js/main.js"></script>

</body>

</html>