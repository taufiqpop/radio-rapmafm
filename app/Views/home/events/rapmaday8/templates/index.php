<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>events/rapmaday8/img/rapday8.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="<?= base_url(); ?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url(); ?>events/rapmaday8/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmaday8/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmaday8/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmaday8/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmaday8/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url(); ?>events/rapmaday8/coming-soon/css/bootstrap.comingsoon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>events/rapmaday8/coming-soon/css/comingsoon.css" rel="stylesheet"> -->

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>events/rapmaday8/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <header id="header" class="d-flex align-items-center" style="background-position-y: 98%; background-size: 100%; padding-top: 0px;">
        <div class="container-fluid container-xxl d-flex align-items-center">
            <div id="logo" class="me-auto">
                <a href="<?= base_url(); ?>" class="scrollto"><img src="<?= base_url(); ?>events/rapmaday8/img/logo rapday 8.png" alt="RAPMAFEST#8" title="RAPMAFEST#8"></a>
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="<?= base_url(); ?>#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#about">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#aplikasi">What's New</a></li>
                    <!-- <li><a class="nav-link scrollto" href="<?= base_url(); ?>#charity">Charity</a></li> -->
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#sponsor">Sponsor & Media Partner</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url(); ?>#contact">Find Us</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a class="buy-tickets scrollto" href="<?= base_url(); ?>#about"><strong>Watch Now !</strong></a>
        </div>
    </header>

    <!-- Main Content -->
    <?= $this->renderSection('page-content'); ?>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy;<strong> 2022</strong> Rapma FM
            </div>
        </div>
    </footer>

    <!-- Pop Up
    <style>
        #topbar {
            height: 30px;
            width: auto;
            margin: auto;
            background: #1B1366;
            background-repeat: repeat-x;
            text-align: left;
            padding-top: 4px;
        }
        
        #adsground {
            height: auto;
            margin: auto;
            width: 100%;
            background: #fff;
            border-bottom: 4px #1B1366 solid;
            border-right: 4px #1B1366 solid;
            border-left: 4px #1B1366 solid;
            text-align: center;
            padding: 4px;
        }
        
        #headlineatas {
            opacity: 0.98;
            height: auto;
            width: auto;
            position: fixed;
            border-bottom: 1px #1B1366;
            border-bottom: 0px #1B1366;
            color: #333;
            padding: 0px;
            z-index: 1001;
            position: fixed;
            top: 10%;
            left: 465px;
            font-size: 20px;
        }
        
        #clos {
            color: #fff;
            font-size: 13px;
            font-weight: bold;
            text-shadow: black 0.1em 0.1em 0.1em;
            float: right;
            padding-top: 3px;
            padding-right: 47%;
        }
        
        @media (max-width: 675px) {
            #headlineatas {
                left: 0%;
                right: 0%;
                top: 20%;
            }
            #merch {
                width: 100%;
            }
            #clos {
                padding-right: 45%;
            }
        }
    </style>

    <script type="text/javascript">
        function getValue() {
            document.getElementById("headlineatas").style.display = 'none';
        }
    </script>

    <div id="headlineatas">
        <div id="topbar">
            <span id="clos"><a target="_blank" onclick="getValue()">Close</a></span>
        </div>
        <div id="adsground">
            <p>
                <img id="merch" height="400px" src="<?= base_url(); ?>events/rapmaday8/img/POP UP RAPMERCH.jpg">
                <hr>
                <h5><b><a href="https://wa.me/+6281914781694?text=Halo%20kak%2C%20aku%20mau%20beli%20Merchandise%20Rapmaday%20%238%20ya!%20%3A)" target="_blank">Ihan (0819-1478-1694)</a></h5></b>
            </p>
        </div>
    </div>
    
    <style>
        #topbar {
            height: 30px;
            width: auto;
            margin: auto;
            background: #1B1366;
            background-repeat: repeat-x;
            text-align: left;
            padding-top: 4px;
        }
        
        #adsground {
            padding: 4px;
            height: auto;
            margin: auto;
            width: 100%;
            background: #fff;
            border-bottom: 4px #1B1366 solid;
            border-right: 4px #1B1366 solid;
            border-left: 4px #1B1366 solid;
            text-align: center;
        }
        
        #headlineatas {
            opacity: 0.98;
            height: auto;
            width: auto;
            position: fixed;
            border-bottom: 1px #1B1366;
            border-bottom: 0px #1B1366;
            color: #333;
            padding: 0px;
            z-index: 1001;
            position: fixed;
            top: 10%;
            left: 35%;
            font-size: 20px;
        }
        
        #clos {
            color: #fff;
            font-size: 13px;
            font-weight: bold;
            text-shadow: black 0.1em 0.1em 0.1em;
            float: right;
            padding-top: 3px;
            padding-right: 47%;
        }
        
        @media (max-width: 1300px) {
            #headlineatas {
                left: 34%;
                top: 10%;
            }
            #clos {
                padding-right: 45%;
            }
        }
        
        @media (max-width: 1000px) {
            #headlineatas {
                left: 30%;
                top: 10%;
            }
            #clos {
                padding-right: 45%;
            }
        }
        
        @media (max-width: 881px) {
            #headlineatas {
                left: 25%;
                top: 10%;
            }
            #clos {
                padding-right: 45%;
            }
        }

        @media (max-width: 675px) {
            #headlineatas {
                left: 0%;
                right: 0%;
                top: 20%;
            }
            #merch {
                width: 100%;
            }
            #clos {
                padding-right: 45%;
            }
        }
    </style>

    <script type="text/javascript">
        function getValue() {
            document.getElementById("headlineatas").style.display = 'none';
        }
    </script>

    <div id="headlineatas">
        <div id="topbar">
            <span id="clos"><a target="_blank" onclick="getValue()">Close</a></span>
        </div>
        <div class="adsground" style="background: #fff; text-align: center; border-bottom: 4px #1B1366 solid;
        border-right: 4px #1B1366 solid; border-left: 4px #1B1366 solid; padding: 4px;">
            <p>
                <img id="merch" height="400px" src="<?= base_url(); ?>events/rapmaday8/img/POP UP RAPMERCH.jpg">
                <hr>
                <h5><b><a href="https://wa.me/+6281914781694?text=Halo%20kak%2C%20aku%20mau%20beli%20Merchandise%20Rapmafest%20%238%20ya!%20%3A)" target="_blank">Ihan (0819-1478-1694)</a></b></h5>
            </p>
        </div>
    </div> -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>events/rapmaday8/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>events/rapmaday8/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmaday8/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmaday8/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>events/rapmaday8/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="<?= base_url(); ?>events/rapmaday8/coming-soon/js/bootstrap.comingsoon.min.js"></script>
    <script src="<?= base_url(); ?>events/rapmaday8/coming-soon/js/comingsoon.js"></script> -->

    <!-- Main JS -->
    <script src="<?= base_url(); ?>events/rapmaday8/js/main.js"></script>

</body>

</html>