<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>logo.ico">

    <!-- Fonts -->
    <link href="<?= base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- My CSS Backend -->
    <link href="<?= base_url(); ?>css/my-style.css" rel="stylesheet">

    <!-- TRIX Editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?= $this->include('user/templates/sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?= $this->include('user/templates/topbar'); ?>

                <!-- Page Content -->
                <?= $this->renderSection('page-content'); ?>

            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto" style="color: black;">
                        <span><a href="https://pdki-indonesia.dgip.go.id/search?nomor=EC00202336098&type=copyright&keyword=rapma+fm&id=d91a5e8620b933340f84680116cd8cc0265e0eccc3b1e27bb648fcc0f4b42a50&page=1" target="_blank" style="color: black; text-decoration: none;">Copyright</a> <strong><?= date('Y'); ?> &copy; <a href="https://drive.google.com/file/d/1nfa2ZLJhaE8l9t1I5TggJp8cHY91-3Rm/view" target="_blank" style="color: black; text-decoration: none;">Taufiq Pop</a></span></strong>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik Tombol "Logout" Jika Ingin Keluar, Terima Kasih!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url(); ?>js/sb-admin-2.min.js"></script>

    <!-- JQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- My Script -->
    <script src="<?= base_url(); ?>js/my-script.js"></script>

    <!-- TRIX Editor -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
</body>

</html>