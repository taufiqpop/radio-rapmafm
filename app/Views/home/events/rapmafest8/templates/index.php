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
    <link href="<?= base_url(); ?>events/rapmafest8/img/logo.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url(); ?>events/rapmafest8/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest8/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest8/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest8/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest8/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>events/rapmafest8/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- Header -->
    <header id="header" class="d-flex align-items-center" style="height: 100px;">
        <div class="container-fluid container-xxl d-flex align-items-center">
            <div id="logo" class="me-auto">
                <a href="<?= base_url(); ?>rapmafest8" class="scrollto"><img src="<?= base_url(); ?>events/rapmafest8/img/Logo Rapmafest 8.png" alt="RAPMAFEST#8" title="RAPMAFEST#8"></a>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url(); ?>#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#about">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#webinar">Webinar</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#concert">Concert</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#schedule">Timeline</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#sponsor">Sponsor</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#medpart">Medpart</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#rapmerch">Rapmerch</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a class="buy-tickets scrollto" href="<?= base_url(); ?>#buy-tickets"><strong>Buy Ticket</strong></a>
        </div>
    </header>

    <!-- Main Content -->
    <?= $this->renderSection('page-content'); ?>

    <!-- Pop Up -->
    <!-- <div id="headlineatas">
        <div id="topbar">
            <span id="clos"><a target="_blank" onclick="getValue()">Close</a></span>
        </div>
        <div id="adsground">
            <p>
                <img id="merch" width="633px" src="events/rapmafest8/img/Rapmerch PopUp.png">
                <hr>
            <h5>
                <b><a href="https://wa.me/+6281226112589?text=Halo%20kak%2C%20aku%20mau%20beli%20Merchandise%20Rapmafest%20%238%20ya!%20%3A)" target="_blank">Ara (0812-2611-2589)</a></b>
            </h5>
            </p>
        </div>
    </div> -->

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy;<strong> 2021</strong> Rapma FM
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>events/rapmafest8/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest8/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest8/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest8/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest8/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url(); ?>events/rapmafest8/js/main.js"></script>

</body>

</html>