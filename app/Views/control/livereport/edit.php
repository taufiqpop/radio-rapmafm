<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Live Report -->
<?php foreach ($livereport as $live) : ?>
    <?php $data = json_decode($live['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Live Report</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>livereport/update/<?= $live['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Hari -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hari" value="<?= $data->hari; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Jam -->
                    <div class="form-group row">
                        <label for="jam" class="col-sm-3 col-form-label">Jam</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="jam" value="<?= $data->jam; ?>" required>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="lokasi" value="<?= $data->lokasi; ?>" required>
                        </div>
                    </div>

                    <!-- Kendala -->
                    <div class="form-group row">
                        <label for="kendala" class="col-sm-3 col-form-label">Kendala</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="kendala" value="<?= $data->kendala; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value="<?= $data->status; ?>" selected>Terlaksana</option>
                                <option value="Terlaksana">Terlaksana</option>
                                <option value="Belum Terlaksana">Belum Terlaksana</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/livereport" class="btn btn-dark mb-1">Back</a>
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