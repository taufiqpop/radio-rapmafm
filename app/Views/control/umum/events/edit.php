<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Events -->
<?php foreach ($events as $event) : ?>
    <?php $data = json_decode($event['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Events</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>events/update/<?= $event['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images ?>">

                    <!-- Nama Events -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Events</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Jenis -->
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                        <div class="col-sm-7">
                            <select name="jenis">
                                <option value="<?= $data->jenis; ?>" selected> <?= $data->jenis; ?></option>
                                <option value="RAPMAFEST">RAPMAFEST</option>
                                <option value="RAPMADAY">RAPMADAY</option>
                                <option value="OPEN RECRUITMENT">OPEN RECRUITMENT</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="tahun" value="<?= $data->tahun; ?>" required>
                        </div>
                    </div>

                    <!-- Link -->
                    <div class="form-group row">
                        <label for="link" class="col-sm-3 col-form-label">Link</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link" value="<?= $data->link; ?>" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-3 col-form-label">Images</label>
                        <div class="col-sm-3">
                            <img src="<?= base_url(); ?>img/events/<?= $data->images ?>" class="img-thumbnail img-preview">
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
                            <a href="<?= base_url(); ?>control/events" class="btn btn-dark mb-1">Back</a>
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