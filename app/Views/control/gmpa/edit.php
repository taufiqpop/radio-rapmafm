<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Divisi GMPA -->
<?php foreach ($gmpa as $timeline) : ?>
    <?php $data = json_decode($timeline['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Divisi GMPA</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>gmpa/update/<?= $timeline['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Hari Perencanaan -->
                    <div class="form-group row">
                        <label for="darihari" class="col-sm-3 col-form-label">Hari Perencanaan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="darihari" required value="<?= $data->darihari; ?>" autofocus>
                        </div>
                        <label for="sampaihari" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="sampaihari" value="<?= $data->sampaihari; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal Perencanaan -->
                    <div class="form-group row">
                        <label for="daritgl" class="col-sm-3 col-form-label">Tanggal Perencanaan</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="daritgl" value="<?= $data->daritgl; ?>" required>
                        </div>
                        <label for="sampaitgl" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="sampaitgl" value="<?= $data->sampaitgl; ?>" required>
                        </div>
                    </div>

                    <!-- Sub Divisi -->
                    <div class="form-group row">
                        <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                        <div class="col-sm-7">
                            <select name="subdivisi">
                                <option value="<?= $data->subdivisi; ?>" selected></option>
                                <option value="GM">General Manager</option>
                                <option value="PA">Personal Assistant</option>
                            </select>
                        </div>
                    </div>

                    <!-- Program Kerja -->
                    <div class="form-group row">
                        <label for="proker" class="col-sm-3 col-form-label">Program Kerja</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="proker" value="<?= $data->proker; ?>" required>
                        </div>
                    </div>

                    <!-- Hari Pelaksanaan -->
                    <div class="form-group row">
                        <label for="mulaihari" class="col-sm-3 col-form-label">Hari Pelaksanaan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="mulaihari" value="<?= $data->mulaihari; ?>" required>
                        </div>
                        <label for="selesaihari" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="selesaihari" value="<?= $data->selesaihari; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal Pelaksanaan -->
                    <div class="form-group row">
                        <label for="mulaitgl" class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="mulaitgl" value="<?= $data->mulaitgl; ?>" required>
                        </div>
                        <label for="selesaitgl" class="col-form-label">-</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="selesaitgl" value="<?= $data->selesaitgl; ?>" required>
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
                                <option value="<?= $data->status; ?>" selected></option>
                                <option value="Terlaksana">Terlaksana</option>
                                <option value="Belum Terlaksana">Belum Terlaksana</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/gmpa" class="btn btn-dark mb-1">Back</a>
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