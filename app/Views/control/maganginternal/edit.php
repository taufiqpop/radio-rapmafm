<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit MagangInternal -->
<?php foreach ($maganginternal as $magang) : ?>
    <?php $data = json_decode($magang['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data MagangInternal</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>maganginternal/update/<?= $magang['id']; ?>" method="post" enctype="multipart/form-data">

                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value="<?= $data->status; ?>" selected></option>
                                <option value="Terlaksana">Terlaksana</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>
                        </div>
                    </div>

                    <!-- Waktu -->
                    <div class="form-group row">
                        <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="waktu" value="<?= $data->waktu; ?>" required>
                        </div>
                    </div>

                    <!-- Tempat -->
                    <div class="form-group row">
                        <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="tempat" value="<?= $data->tempat; ?>" required>
                        </div>
                    </div>

                    <!-- Pemateri -->
                    <div class="form-group row">
                        <label for="pemateri" class="col-sm-3 col-form-label">Pemateri</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pemateri" value="<?= $data->pemateri; ?>" required>
                        </div>
                    </div>

                    <!-- Materi -->
                    <div class="form-group row">
                        <label for="materi" class="col-sm-3 col-form-label">Materi</label>
                        <div class="col-sm-7">
                            <textarea class="tinymce" name="materi"><?= $data->materi; ?></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/maganginternal" class="btn btn-dark mb-1">Back</a>
                            <button type="submit" class="btn btn-primary mb-1">Publish</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>