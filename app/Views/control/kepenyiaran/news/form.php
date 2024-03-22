<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form News -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data News</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>news/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul Berita -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Judul Berita" name="judul" required autofocus>
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

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="2021" name="tahun" required>
                    </div>
                </div>

                <!-- Link -->
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="https://" name="link" required>
                    </div>
                </div>

                <!-- Penulis -->
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Penulis" name="penulis" required>
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
                        <a href="<?= base_url(); ?>control/news" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>