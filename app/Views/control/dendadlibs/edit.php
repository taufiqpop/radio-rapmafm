<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Denda Adlibs & Spot -->
<?php foreach ($dendadlibs as $denda) : ?>
    <?php $data = json_decode($denda['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Denda Adlibs & Spot</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>dendadlibs/update/<?= $denda['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama -->
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Acara -->
                    <div class="form-group row">
                        <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="acara" value="<?= $data->acara; ?>" required>
                        </div>
                    </div>

                    <!-- Program -->
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
                                <option value="SUDUT KAMPUS">SUDUT KAMPUS</option>
                                <option value="NO SATNIGHT">NO SATNIGHT</option>
                                <option value="CLASSIC NIGHT">CLASSIC NIGHT</option>
                                <option value="RAPMATALKS">RAPMATALKS</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Hari -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="hari" value="<?= $data->hari; ?>" required>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="form-group row">
                        <label for="total" class="col-sm-3 col-form-label">Total (Tanpa Rp.)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="total" value="<?= $data->total; ?>" required>
                        </div>
                    </div>

                    <!-- Keterangan -->
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-7">
                            <select name="keterangan">
                                <option value="<?= $data->keterangan; ?>" selected></option>
                                <option value="LUNAS">LUNAS</option>
                                <option value="BELUM LUNAS">BELUM LUNAS</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/dendadlibs" class="btn btn-dark mb-1">Back</a>
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