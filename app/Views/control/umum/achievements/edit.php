<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Achievements -->
<?php foreach ($achievements as $achievement) : ?>
    <?php $data = json_decode($achievement['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Achievements</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>achievements/update/<?= $achievement['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images ?>">

                    <!-- Judul Achievements -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-3 col-form-label">Judul Achievements</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul" value="<?= $data->judul ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Link -->
                    <div class="form-group row">
                        <label for="link" class="col-sm-3 col-form-label">Link</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link" value="<?= $data->link ?>" required>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="tahun" value="<?= $achievement['tahun'] ?>" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-3 col-form-label">Images</label>
                        <div class="col-sm-3">
                            <img src="<?= base_url(); ?>img/achievements/<?= $data->images ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgRapma" name="images" onchange="previewImgRapma()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('images'); ?>
                                </div>
                                <label class="custom-file-label" for="images"><?= $data->images ?></label>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/achievements" class="btn btn-dark mb-1">Back</a>
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