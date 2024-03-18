<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Divisi Personalia -->
<?php foreach ($personalia as $kepen) : ?>
    <?php $data = json_decode($kepen['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Divisi Personalia</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>personalia/update/<?= $kepen['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Sub Divisi -->
                    <div class="form-group row">
                        <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="subdivisi" value="<?= $data->subdivisi; ?>" required>
                        </div>
                    </div>

                    <!-- Program Kerja -->
                    <div class="form-group row">
                        <label for="proker" class="col-sm-3 col-form-label">Program Kerja</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="proker" value="<?= $data->proker; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal Pelaksanaan -->
                    <div class="form-group row">
                        <label for="dari" class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="dari" value="<?= $data->dari; ?>" required>
                        </div>
                        <label for="sampai" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="sampai" value="<?= $data->sampai; ?>" required>
                        </div>
                    </div>

                    <!-- Kendala -->
                    <div class="form-group row">
                        <label for="kendala" class="col-sm-3 col-form-label">Kendala</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kendala" value="<?= $data->kendala; ?>" required>
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

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/personalia" class="btn btn-dark mb-1">Back</a>
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