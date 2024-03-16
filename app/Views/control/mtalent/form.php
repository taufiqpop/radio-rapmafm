<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form M-Talent -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data M-Talent</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>mtalent/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="01 Januari 2000" name="tanggal" required autofocus>
                    </div>
                </div>

                <!-- Jenis -->
                <div class="form-group row">
                    <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="MC | Moderator | Rapma Band | Dll" name="jenis" required>
                    </div>
                </div>

                <!-- Instansi -->
                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Instansi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Instansi" name="instansi" required>
                    </div>
                </div>

                <!-- Acara -->
                <div class="form-group row">
                    <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Acara" name="acara" required>
                    </div>
                </div>

                <!-- Talent -->
                <div class="form-group row">
                    <label for="talent" class="col-sm-3 col-form-label">Talent</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama Talent" name="talent" required>
                    </div>
                </div>

                <!-- Tempat -->
                <div class="form-group row">
                    <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Tempat" name="tempat" required>
                    </div>
                </div>

                <!-- Fee Talent -->
                <div class="form-group row">
                    <label for="feetalent" class="col-sm-3 col-form-label">Fee Talent (Tanpa Rp.)</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="100.000" name="feetalent" required>
                    </div>
                </div>

                <!-- Fee Rapma FM -->
                <div class="form-group row">
                    <label for="feerapma" class="col-sm-3 col-form-label">Fee Rapma FM (Tanpa Rp.)</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="100.000" name="feerapma" required>
                    </div>
                </div>

                <!-- Kontraprestasi -->
                <div class="form-group row">
                    <label for="paket" class="col-sm-3 col-form-label">Kontraprestasi</label>
                    <div class="col-sm-7">
                        <textarea class="tinymce" placeholder="write here.." name="kontraprestasi"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/mtalent" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>