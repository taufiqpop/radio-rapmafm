<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Kerja Bakti -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Kerja Bakti</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>kerjabakti/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-3 col-form-label">Hari</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="hari" placeholder="Senin - Minggu" required>
                    </div>
                    <label for="tanggal" class="col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Jumlah -->
                <div class="form-group row">
                    <label for="jmlpengurus" class="col-sm-3 col-form-label">Pengurus</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="00" name="jmlpengurus" required>
                    </div>
                    <label for="jmlcrew" class="col-form-label">Crew</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="00" name="jmlcrew" required>
                    </div>
                </div>

                <!-- Alasan -->
                <div class="form-group row">
                    <label for="alasan" class="col-sm-3 col-form-label">Alasan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="alasan" required>
                    </div>
                </div>

                <!-- Kendala -->
                <div class="form-group row">
                    <label for="kendala" class="col-sm-3 col-form-label">Kendala</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="kendala" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="&#8212;">Belum Terlaksana</option>
                            <option value="&#9989;">Terlaksana</option>
                            <option value="&times;">Tidak Terlaksana</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/kerjabakti" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>