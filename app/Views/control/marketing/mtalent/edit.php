<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit M-Talent -->
<?php foreach ($mtalent as $talent) : ?>
    <?php $data = json_decode($talent['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data M-Talent</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>mtalent/update/<?= $talent['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">

                    </div>

                    <!-- Hari Mulai -->
                    <div class="form-group row">
                        <label for="harimulai" class="col-sm-3 col-form-label">Hari Mulai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="harimulai" value="<?= $data->harimulai; ?>" required autofocus>
                        </div>
                        <label for="tglmulai" class="col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tglmulai" value="<?= $data->tglmulai; ?>" required>
                        </div>
                    </div>

                    <!-- Hari Selesai -->
                    <div class="form-group row">
                        <label for="hariselesai" class="col-sm-3 col-form-label">Hari Selesai</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hariselesai" value="<?= $data->hariselesai; ?>" required>
                        </div>
                        <label for="tglselesai" class="col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tglselesai" value="<?= $data->tglselesai; ?>" required>
                        </div>
                    </div>

                    <!-- Jenis -->
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="jenis" value="<?= $data->jenis; ?>" required>
                        </div>
                    </div>

                    <!-- Instansi -->
                    <div class="form-group row">
                        <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="instansi" value="<?= $data->instansi; ?>" required>
                        </div>
                    </div>

                    <!-- Acara -->
                    <div class="form-group row">
                        <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="acara" value="<?= $data->acara; ?>" required>
                        </div>
                    </div>

                    <!-- Talent -->
                    <div class="form-group row">
                        <label for="talent" class="col-sm-3 col-form-label">Talent</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="talent" value="<?= $data->talent; ?>" required>
                        </div>
                    </div>

                    <!-- Tempat -->
                    <div class="form-group row">
                        <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="tempat" value="<?= $data->tempat; ?>" required>
                        </div>
                    </div>

                    <!-- Fee Talent -->
                    <div class="form-group row">
                        <label for="feetalent" class="col-sm-3 col-form-label">Fee Talent (Tanpa Rp.)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="feetalent" value="<?= $data->feetalent; ?>" required>
                        </div>
                    </div>

                    <!-- Fee Rapma FM -->
                    <div class="form-group row">
                        <label for="feerapma" class="col-sm-3 col-form-label">Fee Rapma FM (Tanpa Rp.)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="feerapma" value="<?= $data->feerapma; ?>" required>
                        </div>
                    </div>

                    <!-- Kontraprestasi -->
                    <div class="form-group row">
                        <label for="paket" class="col-sm-3 col-form-label">Kontraprestasi</label>
                        <div class="col-sm-7">
                            <textarea class="tinymce" name="kontraprestasi"><?= $data->kontraprestasi; ?></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/mtalent" class="btn btn-dark mb-1">Back</a>
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