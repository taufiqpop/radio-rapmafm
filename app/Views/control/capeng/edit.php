<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Kontrak Capeng -->
<?php foreach ($capeng as $calon) : ?>
    <?php $data = json_decode($calon['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Kontrak Capeng</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>capeng/update/<?= $calon['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama Capeng -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama Capeng</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- TTD Kontrak -->
                    <div class="form-group row">
                        <label for="ttd" class="col-sm-3 col-form-label">TTD Kontrak</label>
                        <div class="col-sm-7">
                            <select name="ttd">
                                <option value="<?= $data->ttd; ?>" selected></option>
                                <option value="&#8212;">Belum TTD</option>
                                <option value="&#9989;">Sudah TTD</option>
                                <option value="&times;">Tidak TTD</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tanggal TTD -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari TTD</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hari" value="<?= $data->hari; ?>" required>
                        </div>
                        <label for="tanggal" class="col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Kartu Pers -->
                    <div class="form-group row">
                        <label for="pers" class="col-sm-3 col-form-label">Kartu Pers</label>
                        <div class="col-sm-7">
                            <select name="pers">
                                <option value="<?= $data->pers; ?>" selected></option>
                                <option value="&#8212;">Belum Dapat</option>
                                <option value="&#9989;">Sudah Dapat</option>
                                <option value="&times;">Tidak Dapat</option>
                            </select>
                        </div>
                    </div>

                    <!-- Lanyard -->
                    <div class="form-group row">
                        <label for="lanyard" class="col-sm-3 col-form-label">Lanyard</label>
                        <div class="col-sm-7">
                            <select name="lanyard">
                                <option value="<?= $data->lanyard; ?>" selected></option>
                                <option value="&#8212;">Belum Dapat</option>
                                <option value="&#9989;">Sudah Dapat</option>
                                <option value="&times;">Tidak Dapat</option>
                            </select>
                        </div>
                    </div>

                    <!-- PDH -->
                    <div class="form-group row">
                        <label for="pdh" class="col-sm-3 col-form-label">PDH</label>
                        <div class="col-sm-7">
                            <select name="pdh">
                                <option value="<?= $data->pdh; ?>" selected></option>
                                <option value="&#8212;">Belum Dapat</option>
                                <option value="&#9989;">Sudah Dapat</option>
                                <option value="&times;">Tidak Dapat</option>
                            </select>
                        </div>
                    </div>

                    <!-- Pin -->
                    <div class="form-group row">
                        <label for="pin" class="col-sm-3 col-form-label">Pin</label>
                        <div class="col-sm-7">
                            <select name="pin">
                                <option value="<?= $data->pin; ?>" selected></option>
                                <option value="&#8212;">Belum Dapat</option>
                                <option value="&#9989;">Sudah Dapat</option>
                                <option value="&times;">Tidak Dapat</option>
                            </select>
                        </div>
                    </div>

                    <!-- Keterangan -->
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="keterangan" value="<?= $data->keterangan; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/capeng" class="btn btn-dark mb-1">Back</a>
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