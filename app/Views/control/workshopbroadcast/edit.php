<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Workshop Broadcast -->
<?php foreach ($workshopbroadcast as $ads) : ?>
    <?php $data = json_decode($ads['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Workshop Broadcast</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>workshopbroadcast/update/<?= $ads['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Hari -->
                    <div class="form-group row">
                        <label for="harimulai" class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="harimulai" value="<?= $data->harimulai; ?>" required autofocus>
                        </div>
                        <label for="hariselesai" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hariselesai" value="<?= $data->hariselesai; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="dari" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="dari" value="<?= $data->dari; ?>" required>
                        </div>
                        <label for="sampai" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="sampai" value="<?= $data->sampai; ?>" required>
                        </div>
                    </div>

                    <!-- Waktu -->
                    <div class="form-group row">
                        <label for="mulai" class="col-sm-3 col-form-label">Waktu</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mulai" value="<?= $data->mulai; ?>" required>
                        </div>
                        <label for="selesai" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="selesai" value="<?= $data->selesai; ?>" required>
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