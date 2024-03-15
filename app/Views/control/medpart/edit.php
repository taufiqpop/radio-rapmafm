<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Media Partner -->
<?php foreach ($medpart as $mediapartner) : ?>
    <?php $data = json_decode($mediapartner['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Media Partner</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>medpart/update/<?= $mediapartner['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal Masuk -->
                    <div class="form-group row">
                        <label for="tglmasuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="tglmasuk" value="<?= $data->tglmasuk; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Pelaksanaan -->
                    <div class="form-group row">
                        <label for="pelaksanaan" class="col-sm-3 col-form-label">Pelaksanaan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pelaksanaan" value="<?= $data->pelaksanaan; ?>" required>
                        </div>
                    </div>

                    <!-- Instansi -->
                    <div class="form-group row">
                        <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="instansi" value="<?= $data->instansi; ?>" required>
                        </div>
                    </div>

                    <!-- Acara -->
                    <div class="form-group row">
                        <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="acara" value="<?= $data->acara; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="status" value="<?= $data->status; ?>" required>
                        </div>
                    </div>

                    <!-- Kontraprestasi -->
                    <div class="form-group row">
                        <label for="kontraprestasi" class="col-sm-3 col-form-label">Kontraprestasi</label>
                        <div class="col-sm-7">
                            <textarea class="tinymce" name="kontraprestasi"><?= $data->kontraprestasi; ?></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/medpart" class="btn btn-dark mb-1">Back</a>
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