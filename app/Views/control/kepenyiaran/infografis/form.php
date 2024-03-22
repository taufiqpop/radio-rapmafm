<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Infografis -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Infografis</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>infografis/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul Infografis -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Infografis</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Judul Infografis" name="judul" required autofocus>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Senin - Minggu" name="hari" required>
                    </div>
                    <label for="tanggal" class="col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/infografis" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>