<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Divisi Umum -->
<?php foreach ($umum as $timeline) : ?>
    <?php $data = json_decode($timeline['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Timeline Divisi Umum</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>umum/update/<?= $timeline['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal Perencanaan -->
                    <div class="form-group row">
                        <label for="daritgl" class="col-sm-3 col-form-label">Tanggal Perencanaan</label>
                        <div class="col-sm-1">
                            <select name="darihari" required autofocus>
                                <option value="<?= $data->darihari; ?>" selected><?= $data->darihari; ?></option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" name="daritgl" value="<?= $data->daritgl; ?>" required>
                        </div>
                        <label for="sampaitgl" class="col-form-label">-</label>
                        <div class="col-sm-1">
                            <select name="sampaihari" required>
                                <option value="<?= $data->sampaihari; ?>" selected><?= $data->sampaihari; ?></option>
                                <option value="Minggu">Minggu</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" name="sampaitgl" value="<?= $data->sampaitgl; ?>" required>
                        </div>
                    </div>

                    <!-- Sub Divisi -->
                    <div class="form-group row">
                        <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                        <div class="col-sm-7">
                            <select name="subdivisi">
                                <option value="<?= $data->subdivisi; ?>" selected><?= $data->subdivisi; ?></option>
                                <option value="Manager Umum">Manager Umum</option>
                                <option value="Admisi On Air">Admisi On Air</option>
                                <option value="Admisi Off Air">Admisi Off Air</option>
                                <option value="Teknisi">Teknisi</option>
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

                    <!-- Tanggal Pelaksanaan -->
                    <div class="form-group row">
                        <label for="mulaitgl" class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                        <div class="col-sm-1">
                            <select name="mulaihari" required autofocus>
                                <option value="<?= $data->mulaihari; ?>" selected><?= $data->mulaihari; ?></option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input type="date" class="form-control" name="mulaitgl" value="<?= $data->mulaitgl; ?>" required>
                        </div>
                        <label for="selesaitgl" class="col-form-label">-</label>
                        <div class="col-sm-1">
                            <select name="selesaihari" required>
                                <option value="<?= $data->selesaihari; ?>" selected><?= $data->selesaihari; ?></option>
                                <option value="Minggu">Minggu</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
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
                                <option value="<?= $data->status; ?>" selected><?= $data->status; ?></option>
                                <option value="Sudah Terlaksana">Sudah Terlaksana</option>
                                <option value="Belum Terlaksana">Belum Terlaksana</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/umum" class="btn btn-dark mb-1">Back</a>
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