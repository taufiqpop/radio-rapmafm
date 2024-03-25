<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Surat Keluar -->
<?php foreach ($suratkeluar as $surat) : ?>
    <?php $data = json_decode($surat['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Surat Keluar</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>suratkeluar/update/<?= $surat['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
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

                    <!-- Nomor Surat -->
                    <div class="form-group row">
                        <label for="nosurat" class="col-sm-3 col-form-label">Nomor Surat</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nosurat" value="<?= $data->nosurat; ?>" required>
                        </div>
                    </div>

                    <!-- Nama Penerima -->
                    <div class="form-group row">
                        <label for="penerima" class="col-sm-3 col-form-label">Nama Penerima</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="penerima" value="<?= $data->penerima; ?>" required>
                        </div>
                    </div>

                    <!-- Perihal Surat -->
                    <div class="form-group row">
                        <label for="perihal" class="col-sm-3 col-form-label">Perihal Surat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="perihal" value="<?= $data->perihal; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/suratkeluar" class="btn btn-dark mb-1">Back</a>
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