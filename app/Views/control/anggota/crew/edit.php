<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Crew -->
<?php foreach ($crew as $organizer) : ?>
    <?php $data = json_decode($organizer['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Crew</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>crew/update/<?= $organizer['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama Crew -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Crew</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Nickname -->
                    <div class="form-group row">
                        <label for="nickname" class="col-sm-3 col-form-label">Nickname</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nickname" value="<?= $data->nickname; ?>" required>
                        </div>
                    </div>

                    <!-- Jurusan -->
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="jurusan" value="<?= $data->jurusan; ?>" required>
                        </div>
                    </div>

                    <!-- Semester -->
                    <div class="form-group row">
                        <label for="semester" class="col-sm-3 col-form-label">Semester</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="semester" value="<?= $data->semester; ?>" required>
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
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nohp" value="<?= $data->nohp; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value="<?= $data->status; ?>" selected></option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div class="form-group row">
                        <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="instagram" value="<?= $data->instagram; ?>" required>
                        </div>
                    </div>

                    <!-- Twitter -->
                    <div class="form-group row">
                        <label for="twitter" class="col-sm-3 col-form-label">twitter</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="twitter" value="<?= $data->twitter; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/crew" class="btn btn-dark mb-1">Back</a>
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