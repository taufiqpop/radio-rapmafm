<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Divisi Personalia -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Divisi Personalia</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>personalia/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" required autofocus>
                    </div>
                </div>

                <!-- Subdivisi -->
                <div class="form-group row">
                    <label for="subdivisi" class="col-sm-3 col-form-label">Subdivisi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Subdivisi" name="subdivisi" required>
                    </div>
                </div>

                <!-- Proker -->
                <div class="form-group row">
                    <label for="proker" class="col-sm-3 col-form-label">Proker</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Proker" name="proker" required>
                    </div>
                </div>

                <!-- Pelaksanaan -->
                <div class="form-group row">
                    <label for="pelaksanaan" class="col-sm-3 col-form-label">Pelaksanaan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Pelaksanaan" name="pelaksanaan" required>
                    </div>
                </div>

                <!-- Kendala -->
                <div class="form-group row">
                    <label for="kendala" class="col-sm-3 col-form-label">Kendala</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Kendala" name="kendala" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="Terlaksana">Terlaksana</option>
                            <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/personalia" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>