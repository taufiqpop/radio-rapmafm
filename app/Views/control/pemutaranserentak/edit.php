<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Pemutaran Serentak -->
<?php foreach ($pemutaranserentak as $pemutaran) : ?>
    <?php $data = json_decode($pemutaran['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Pemutaran Serentak</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>pemutaranserentak/update/<?= $pemutaran['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Label -->
                    <div class="form-group row">
                        <label for="label" class="col-sm-3 col-form-label">Label</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="label" value="<?= $data->label; ?>" required>
                        </div>
                    </div>

                    <!-- Penyanyi -->
                    <div class="form-group row">
                        <label for="penyanyi" class="col-sm-3 col-form-label">Penyanyi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="penyanyi" value="<?= $data->penyanyi; ?>" required>
                        </div>
                    </div>

                    <!-- Judul Lagu -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-3 col-form-label">Judul Lagu</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul" value="<?= $data->judul; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/pemutaranserentak" class="btn btn-dark mb-1">Back</a>
                            <button type="submit" class="btn btn-primary mb-1">Confirm Changes</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>