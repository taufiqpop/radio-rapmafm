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
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link" value="<?= $data->link; ?>" required>
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

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-3">
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
                                <option value=<?= $data->status; ?>" selected></option>
                                <option value="&#8212;">Belum Terlaksana</option>
                                <option value="&#9989;">Terlaksana</option>
                                <option value="&times;">Tidak Terlaksana</option>
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