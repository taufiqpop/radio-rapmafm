<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Berita Web -->
<?php foreach ($beritaweb as $berita) : ?>
    <?php $data = json_decode($berita['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Berita Web</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>beritaweb/update/<?= $berita['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images ?>">

                    <!-- Judul Berita -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-3 col-form-label">Judul Berita</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul" value="<?= $data->judul; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Link -->
                    <div class="form-group row">
                        <label for="link" class="col-sm-3 col-form-label">Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="link" value="<?= $data->link; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hari" value="<?= $data->hari; ?>" required>
                        </div>
                        <label for="tanggal" class="col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>


                    <!-- Deskripsi -->
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="deskripsi" value="<?= $data->deskripsi; ?>" required>
                        </div>
                    </div>

                    <!-- Thumbnail -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-3 col-form-label">Thumbnail</label>
                        <div class="col-sm-3">
                            <img src="<?= base_url(); ?>img/beritaweb/<?= $data->images ?>" class="img-thumbnail img-preview">
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
                            <a href="<?= base_url(); ?>control/beritaweb" class="btn btn-dark mb-1">Back</a>
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