<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Videos -->
<?php foreach ($videos as $video) : ?>
    <?php $data = json_decode($video['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Videos</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>videos/update/<?= $video['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Title -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="title" value="<?= $data->title; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Type -->
                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="type" value="<?= $video['type'] ?>" required>
                        </div>
                    </div>

                    <!-- Link -->
                    <div class="form-group row">
                        <label for="link" class="col-sm-3 col-form-label">Link</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="link" value="<?= $data->link; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-3 col-form-label">Hari</label>
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
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="tahun" value="<?= $data->tahun; ?>" required>
                        </div>
                    </div>

                    <!-- Platform -->
                    <div class="form-group row">
                        <label for="platform" class="col-sm-3 col-form-label">Platform</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="platform" value="<?= $data->platform; ?>" required>
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-7">
                            <select name="status">
                                <option value=<?= $data->status; ?>" selected><?= $data->status; ?></option>
                                <option value="Belum Terlaksana">Belum Terlaksana</option>
                                <option value="Sudah Terlaksana">Sudah Terlaksana</option>
                                <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/videos" class="btn btn-dark mb-1">Back</a>
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