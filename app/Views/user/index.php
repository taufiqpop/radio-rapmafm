<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Dashboard -->
<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">

            <!-- Dashboard -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <div class="row">
                <!-- Total Users -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlUsers; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>admin">
                                        <i class="fas fa-users fa-2x text-primary"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Pesan -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pesan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jmlPesan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url(); ?>pesan">
                                        <i class="fas fa-envelope fa-2x text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Dashboard -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>