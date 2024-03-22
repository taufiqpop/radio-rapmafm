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

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="hari" value="<?= $data->hari; ?>" required>
                        </div>
                        <label for="tanggal" class="col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Jam -->
                    <div class="form-group row">
                        <label for="jam" class="col-sm-3 col-form-label">Jam</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="jam" value="<?= $data->jam; ?>" required>
                        </div>
                    </div>

                    <!-- Program Siar -->
                    <div class="form-group row">
                        <label for="program" class="col-sm-3 col-form-label">Program Siar</label>
                        <div class="col-sm-7">
                            <select name="program">
                                <option value="<?= $data->program; ?>" selected></option>
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
                                <option value="TOP 15">TOP 15</option>
                                <option value="SUDUT KAMPUS">SUDUT KAMPUS</option>
                                <option value="NO SATNIGHT">NO SATNIGHT</option>
                                <option value="CLASSIC NIGHT">CLASSIC NIGHT</option>
                            </select>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="form-group row">
                        <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="lokasi" value="<?= $data->lokasi; ?>" required>
                        </div>
                    </div>

                    <!-- Perihal -->
                    <div class="form-group row">
                        <label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="perihal" value="<?= $data->perihal; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value="<?= $data->status; ?>"></option>
                                <option value="&#8212;">Belum Terlaksana</option>
                                <option value="&#9989;">Terlaksana</option>
                                <option value="&times;">Tidak Terlaksana</option>
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