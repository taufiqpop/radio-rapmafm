<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Kerja Bakti -->
<?php foreach ($kerjabakti as $kerja) : ?>
    <?php $data = json_decode($kerja['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Kerja Bakti</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>kerjabakti/update/<?= $kerja['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-1">
                            <select name="hari" required autofocus>
                                <option value="<?= $data->hari; ?>"><?= $data->hari; ?></option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Jumlah -->
                    <div class="form-group row">
                        <label for="jmlpengurus" class="col-sm-3 col-form-label">Pengurus</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="jmlpengurus" value="<?= $data->jmlpengurus; ?>" required>
                        </div>
                        <label for="jmlcrew" class="col-form-label">Crew</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="jmlcrew" value="<?= $data->jmlcrew; ?>" required>
                        </div>
                    </div>

                    <!-- Alasan -->
                    <div class="form-group row">
                        <label for="alasan" class="col-sm-3 col-form-label">Alasan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="alasan" value="<?= $data->alasan; ?>" required>
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
                                <option value="<?= $data->status; ?>"><?= $data->status; ?></option>
                                <option value="&#8212;">Belum Terlaksana</option>
                                <option value="&#9989;">Terlaksana</option>
                                <option value="&times;">Tidak Terlaksana</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/kerjabakti" class="btn btn-dark mb-1">Back</a>
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