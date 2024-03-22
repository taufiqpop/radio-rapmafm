<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>events/rapmafest10/img/logo besar.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>events/rapmafest10/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest10/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest10/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest10/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmafest10/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="<?= base_url(); ?>events/rapmafest10/css/variables.css" rel="stylesheet">
    <!-- <link href="<?= base_url(); ?>events/rapmafest10/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url(); ?>events/rapmafest10/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url(); ?>events/rapmafest10/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url(); ?>events/rapmafest10/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url(); ?>events/rapmafest10/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url(); ?>events/rapmafest10/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>events/rapmafest10/css/main.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?= base_url(); ?>events/rapmafest10/img/logo & tema.png" alt="">
                <h1><span></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#home">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#about">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#timeline">Timeline</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#kelas-online">Kelas Online</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#konser">Concert</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#rapmerch">Rapmerch</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#sponsor">Sponsor</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#medpart">Media Partner</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none" style="color: #29466e;"></i>
            </nav><!-- .navbar -->
            <a class="btn-getstarted scrollto" href="#buytiket">Buy Ticket</a>
        </div>
    </header><!-- End Header -->

    <!-- Main Content -->
    <?= $this->renderSection('page-content'); ?>

    <!-- Footer -->
    <footer id="footer" style="background-color: black;">
        <center>
            <div class="container p-2">
                <div class="copyright">
                    Copyright &copy;<strong> 2023</strong> Rapma FM
                </div>
            </div>
        </center>
    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>events/rapmafest10/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest10/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest10/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest10/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest10/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmafest10/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>events/rapmafest10/js/main.js"></script>

</body>

</html>