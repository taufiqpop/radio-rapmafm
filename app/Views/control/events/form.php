<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Events -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Events</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>events/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama Events -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Events</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama Events" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Jenis Events -->
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Events</label>
                    <div class="col-sm-10">
                        <select name="jenis">
                            <option value="RAPMAFEST">RAPMAFEST</option>
                            <option value="RAPMADAY">RAPMADAY</option>
                            <option value="OPEN RECRUITMENT">OPEN RECRUITMENT</option>
                        </select>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Tahun" name="tahun" required>
                    </div>
                </div>

                <!-- Link -->
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Link" name="link" required>
                    </div>
                </div>

                <!-- Images -->
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgRapma" name="images" onchange="previewImgRapma()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Image</label>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/events" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>