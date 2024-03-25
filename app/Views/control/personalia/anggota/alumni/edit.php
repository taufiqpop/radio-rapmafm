<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Alumni -->
<?php foreach ($alumni as $organizer) : ?>
    <?php $data = json_decode($organizer['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Alumni</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>alumni/update/<?= $organizer['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama Alumni -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Alumni</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Nickname Alumni -->
                    <div class="form-group row">
                        <label for="nickname" class="col-sm-3 col-form-label">Nickname Alumni</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nickname" value="<?= $data->nickname ?>" required>
                        </div>
                    </div>

                    <!-- Tahun Kepengurusan -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun Kepengurusan</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="tahun" value="<?= $organizer['tahun']; ?>" required>
                        </div>
                    </div>

                    <!-- Divisi -->
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                        <div class="col-sm-7">
                            <select name="divisi">
                                <option value="<?= $data->divisi; ?>" selected><?= $data->divisi; ?></option>
                                <option value="GMPA">GMPA</option>
                                <option value="Divisi Umum">Divisi Umum</option>
                                <option value="Divisi Kepenyiaran">Divisi Kepenyiaran</option>
                                <option value="Divisi Marketing">Divisi Marketing</option>
                                <option value="Divisi Personalia">Divisi Personalia</option>
                            </select>
                        </div>
                    </div>

                    <!-- Sub Divisi -->
                    <div class="form-group row">
                        <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="subdivisi" value="<?= $data->subdivisi; ?>" required>
                        </div>
                    </div>

                    <!-- Jurusan -->
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="jurusan" value="<?= $data->jurusan; ?>" required>
                        </div>
                    </div>

                    <!-- Domisili -->
                    <div class="form-group row">
                        <label for="domisili" class="col-sm-3 col-form-label">Domisili</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="domisili" value="<?= $data->domisili; ?>" required>
                        </div>
                    </div>

                    <!-- No HP -->
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-3 col-form-label">No HP</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="nohp" value="<?= $data->nohp; ?>" required>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="form-group row">
                        <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="instagram" value="<?= $data->instagram; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/alumni" class="btn btn-dark mb-1">Back</a>
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