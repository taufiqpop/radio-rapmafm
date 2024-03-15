<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Media Partner -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Media Partner</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>medpart/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal Masuk -->
                <div class="form-group row">
                    <label for="tglmasuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Tanggal Masuk" name="tglmasuk" required autofocus>
                    </div>
                </div>

                <!-- Pelaksanaan -->
                <div class="form-group row">
                    <label for="pelaksanaan" class="col-sm-3 col-form-label">Pelaksanaan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Pelaksanaan" name="pelaksanaan" required>
                    </div>
                </div>

                <!-- Instansi -->
                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Instansi" name="instansi" required>
                    </div>
                </div>

                <!-- Acara -->
                <div class="form-group row">
                    <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Acara" name="acara" required>
                    </div>
                </div>

                <!-- Kontraprestasi -->
                <div class="form-group row">
                    <label for="kontraprestasi" class="col-sm-3 col-form-label">Kontraprestasi</label>
                    <div class="col-sm-7">
                        <textarea class="tinymce" placeholder="write here.." name="kontraprestasi"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/medpart" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>