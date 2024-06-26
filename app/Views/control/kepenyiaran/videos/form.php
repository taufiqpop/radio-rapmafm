<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Videos -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Videos</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>videos/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Title -->
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Title" name="title" required autofocus>
                    </div>
                </div>

                <!-- Type -->
                <div class="form-group row">
                    <label for="type" class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="MashUp | Weekend Rush | Company Profile" name="type" required>
                    </div>
                </div>

                <!-- Link -->
                <div class="form-group row">
                    <label for="link" class="col-sm-3 col-form-label">Link</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="https://" name="link" required>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-1">
                        <select name="hari" required>
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
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="2021" name="tahun" required>
                    </div>
                </div>

                <!-- Platform -->
                <div class="form-group row">
                    <label for="platform" class="col-sm-3 col-form-label">Platform</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Instagram | YouTube | TikTok | Dll" name="platform" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
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
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>