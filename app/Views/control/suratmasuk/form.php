<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Surat Masuk -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Surat Masuk</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>suratmasuk/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="tanggal" required autofocus>
                    </div>
                </div>

                <!-- No Surat -->
                <div class="form-group row">
                    <label for="nosurat" class="col-sm-3 col-form-label">No Surat</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="001/A/GM/RAPMAFM/I/2021" name="nosurat" required>
                    </div>
                </div>

                <!-- Nama Instansi -->
                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Nama Instansi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama Instansi" name="instansi" required>
                    </div>
                </div>

                <!-- Perihal Surat -->
                <div class="form-group row">
                    <label for="perihal" class="col-sm-3 col-form-label">Perihal Surat</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Perihal Surat" name="perihal" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/suratmasuk" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>