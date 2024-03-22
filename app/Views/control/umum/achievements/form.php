<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Achievements -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Achievements</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>achievements/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul Achievements -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-3 col-form-label">Judul Achievements</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Judul Achievements" name="judul" required autofocus>
                    </div>
                </div>

                <!-- Link -->
                <div class="form-group row">
                    <label for="link" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="https://" name="link" required>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" placeholder="2021" name="tahun" required>
                    </div>
                </div>

                <!-- Thumbnail -->
                <div class="form-group row">
                    <label for="images" class="col-sm-3 col-form-label">Thumbnail</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-4">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgRapma" name="images" onchange="previewImgRapma()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Thumbnail</label>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/achievements" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>