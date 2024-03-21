<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Konten -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Konten</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>konten/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Judul" name="judul" required autofocus>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="hari" placeholder="Senin - Minggu" required>
                    </div>
                    <label for="tanggal" class="col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Platform -->
                <div class="form-group row">
                    <label for="platform" class="col-sm-3 col-form-label">Platform</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="TikTok | YouTube | Instagram | Dll" name="platform" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="&#8212;">Belum Upload</option>
                            <option value="&#9989;">Sudah Upload</option>
                            <option value="&times;">Gagal Upload</option>
                        </select>
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="keterangan" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/konten" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>