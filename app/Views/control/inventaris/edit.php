<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Inventaris -->
<?php foreach ($inventaris as $invent) : ?>
    <?php $data = json_decode($invent['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Inventaris</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>inventaris/update/<?= $invent['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Nama Barang -->
                    <div class="form-group row">
                        <label for="barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="barang" value="<?= $data->barang ?>" autofocus required>
                        </div>
                    </div>

                    <!-- Nomor Barang -->
                    <div class="form-group row">
                        <label for="nomor" class="col-sm-3 col-form-label">Nomor Barang</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="nomor" value="<?= $data->nomor ?>" required>
                        </div>
                    </div>

                    <!-- Jumlah Barang -->
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Barang</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="jumlah" value="<?= $data->jumlah ?>" required>
                        </div>
                    </div>

                    <!-- Kode Barang -->
                    <div class="form-group row">
                        <label for="kode" class="col-sm-3 col-form-label">Kode Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kode" value="<?= $invent['kode']; ?>" required>
                        </div>
                    </div>

                    <!-- Kondisi Barang -->
                    <div class="form-group row">
                        <label for="kondisi" class="col-sm-3 col-form-label">Kondisi Barang</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kondisi" value="<?= $data->kondisi ?>" required>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-7">
                            <input type="number" class="form-control" name="tahun" value="<?= $invent['tahun']; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/inventaris" class="btn btn-dark mb-1">Back</a>
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