<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Podcast -->
<?php foreach ($podcast as $podcasts) : ?>
    <?php $data = json_decode($podcasts['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Podcast</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>podcast/update/<?= $podcasts['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="imgLama" value="<?= $data->images ?>">

                    <!-- Judul Podcast -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul Podcast</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul" value="<?= $data->judul ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Program Siar -->
                    <div class="form-group row">
                        <label for="program" class="col-sm-2 col-form-label">Program Siar</label>
                        <div class="col-sm-7">
                            <select name="program">
                                <option value="<?= $podcasts['program']; ?>" selected></option>
                                <option value="RAPMATALKS">RAPMATALKS</option>
                                <option value="BASOSAPI">BASOSAPI</option>
                                <option value="11N1">11N1</option>
                                <option value="RAPMANESIA">RAPMANESIA</option>
                                <option value="THE GOOD VIBES">THE GOOD VIBES</option>
                                <option value="KHASANAH PETANG">KHASANAH PETANG</option>
                                <option value="MUSIC BOX">MUSIC BOX</option>
                                <option value="AFTERDAY">AFTERDAY</option>
                                <option value="MOVIE SCREEN">MOVIE SCREEN</option>
                                <option value="KING & QUEEN">KING & QUEEN</option>
                                <option value="INDIEZONE">INDIEZONE</option>
                                <option value="TEKSAS">TEKSAS</option>
                                <option value="MERINDING">MERINDING</option>
                                <option value="K-ARENA">K-ARENA</option>
                                <option value="SPORTACULAR">SPORTACULAR</option>
                                <option value="SUDUT KAMPUS">SUDUT KAMPUS</option>
                                <option value="NO SATNIGHT">NO SATNIGHT</option>
                                <option value="CLASSIC NIGHT">CLASSIC NIGHT</option>
                            </select>
                        </div>
                    </div>

                    <!-- Nama Talent -->
                    <div class="form-group row">
                        <label for="talent" class="col-sm-2 col-form-label">Nama Talent</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="talent" value="<?= $data->talent ?>" required>
                        </div>
                    </div>

                    <!-- Narasumber -->
                    <div class="form-group row">
                        <label for="narasumber" class="col-sm-2 col-form-label">Narasumber</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="narasumber" value="<?= $data->narasumber ?>" required>
                        </div>
                    </div>

                    <!-- Link -->
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link" value="<?= $data->link ?>" required>
                        </div>
                    </div>

                    <!-- Hari -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hari" value="<?= $data->hari ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal ?>" required>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="tahun" value="<?= $podcasts['tahun']; ?>" required>
                        </div>
                    </div>

                    <!-- Images -->
                    <div class="form-group row">
                        <label for="images" class="col-sm-2 col-form-label">Images</label>
                        <div class="col-sm-4">
                            <img src="<?= base_url(); ?>img/podcast/<?= $data->images ?>" class="img-thumbnail img-preview">
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
                            <a href="<?= base_url(); ?>control/podcast" class="btn btn-dark mb-1">Back</a>
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