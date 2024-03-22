<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Lagu -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Lagu</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>lagu/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul Lagu -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Judul Lagu</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Judul Lagu" name="judul" required autofocus>
                    </div>
                </div>

                <!-- Artist -->
                <div class="form-group row">
                    <label for="artist" class="col-sm-3 col-form-label">Artist</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Artist" name="artist" required>
                    </div>
                </div>

                <!-- Album -->
                <div class="form-group row">
                    <label for="album" class="col-sm-3 col-form-label">Album</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Album" name="album" required>
                    </div>
                </div>

                <!-- Genre -->
                <div class="form-group row">
                    <label for="genre" class="col-sm-3 col-form-label">Genre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Jazz | Pop | Blues | Dll" name="genre" required>
                    </div>
                </div>

                <!-- Type -->
                <div class="form-group row">
                    <label for="tipe" class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Upbeat | Slow | Dll" name="tipe" required>
                    </div>
                </div>

                <!-- Lokasi -->
                <div class="form-group row">
                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Indonesia" name="lokasi" required>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="2000" name="tahun" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/lagu" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>