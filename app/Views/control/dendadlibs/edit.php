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
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="nama" value="<?= $data->nama; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Acara -->
                    <div class="form-group row">
                        <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="acara" value="<?= $data->acara; ?>" required>
                        </div>
                    </div>

                    <!-- Program -->
                    <div class="form-group row">
                        <label for="program" class="col-sm-3 col-form-label">Program Siar</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="program" value="<?= $data->program; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="form-group row">
                        <label for="total" class="col-sm-3 col-form-label">Total (Tanpa Rp.)</label>
                        <div class="col-sm-7">
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