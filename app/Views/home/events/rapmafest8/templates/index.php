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
    <link href="<?= base_url(); ?>events/rapmafest8/ico/rapmafest.ico" rel="icon">

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

    <!-- Main Content -->
    <?= $this->renderSection('page-content'); ?>


    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright &copy;<strong> 2021</strong> Rapma FM
            </div>
        </div>
    </footer>

    <!-- Pop Up -->
    <!-- <style>
        #topbar {
            height: 30px;
            width: auto;
            margin: auto;
            background: #4da1a3;
            background-repeat: repeat-x;
            text-align: left;
            padding-top: 4px;
        }
        
        #adsground {
            height: auto;
            margin: auto;
            width: 100%;
            background: #fff;
            border-bottom: 4px #4da1a3 solid;
            border-right: 4px #4da1a3 solid;
            border-left: 4px #4da1a3 solid;
            text-align: center;
            padding: 4px;
        }
        
        #headlineatas {
            opacity: 0.98;
            height: auto;
            width: auto;
            position: fixed;
            border-bottom: 1px #4da1a3;
            border-bottom: 0px #4da1a3;
            color: #333;
            padding: 0px;
            z-index: 1001;
            position: fixed;
            top: 10%;
            left: 350px;
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
                <img id="merch" width="633px" src="events/rapmafest8/img/Rapmerch PopUp.png">
                <hr>
                <h5><b><a href="https://wa.me/+6281226112589?text=Halo%20kak%2C%20aku%20mau%20beli%20Merchandise%20Rapmafest%20%238%20ya!%20%3A)" target="_blank">Ara (0812‑2611-2589)</a></h5></b>
            </p>
        </div>
    </div> -->

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