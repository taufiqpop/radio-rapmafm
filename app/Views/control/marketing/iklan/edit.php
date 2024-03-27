<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Iklan -->
<?php foreach ($iklan as $ads) : ?>
    <?php $data = json_decode($ads['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Iklan</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>iklan/update/<?= $ads['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama Penembus -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Penembus</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Client -->
                    <div class="form-group row">
                        <label for="client" class="col-sm-3 col-form-label">Client</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="client" value="<?= $data->client; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal MOU -->
                    <div class="form-group row">
                        <label for="tglmou" class="col-sm-3 col-form-label">Tanggal MOU</label>
                        <div class="col-sm-1">
                            <select name="hari" required>
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
                            <input type="date" class="form-control" name="tglmou" value="<?= $data->tglmou; ?>" required>
                        </div>
                    </div>

                    <!-- Harga -->
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="harga" value="<?= $data->harga; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value="<?= $data->status; ?>" selected><?= $data->status; ?></option>
                                <option value="Sudah Tembus">Sudah Tembus</option>
                                <option value="Belum Tembus">Belum Tembus</option>
                                <option value="Tidak Tembus">Tidak Tembus</option>
                            </select>
                        </div>
                    </div>

                    <!-- Paket Iklan -->
                    <div class="form-group row">
                        <label for="paket" class="col-sm-3 col-form-label">Paket Iklan</label>
                        <div class="col-sm-7">
                            <textarea class="form-control areatext" name="paket"><?= $data->paket; ?></textarea>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/iklan" class="btn btn-dark mb-1">Back</a>
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