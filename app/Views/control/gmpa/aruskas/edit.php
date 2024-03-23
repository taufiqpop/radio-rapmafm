<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Arus Kas -->
<?php foreach ($aruskas as $kas) : ?>
    <?php $data = json_decode($kas['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Arus Kas</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>aruskas/update/<?= $kas['id']; ?>" method="post" enctype="multipart/form-data">
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
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="form-group row">
                        <label for="total" class="col-sm-3 col-form-label">Total (Tanpa Rp.)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="total" value="<?= $data->total; ?>" required>
                        </div>
                    </div>

                    <!-- Belum Bayar -->
                    <div class="form-group row">
                        <label for="blmbayar" class="col-sm-3 col-form-label">Belum Bayar (Tanpa Rp.)</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="blmbayar" value="<?= $data->blmbayar; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value="<?= $data->status; ?>" selected></option>
                                <option value="Belum Bayar">Belum Bayar</option>
                                <option value="Bayar">Bayar</option>
                                <option value="Tidak Bayar">Tidak Bayar</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/aruskas" class="btn btn-dark mb-1">Back</a>
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