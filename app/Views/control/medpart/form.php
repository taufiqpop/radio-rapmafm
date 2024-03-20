<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Media Partner -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Media Partner</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>medpart/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal Masuk -->
                <div class="form-group row">
                    <label for="tglmasuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tglmasuk" required autofocus>
                    </div>
                </div>

                <!-- Hari Masuk -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-3 col-form-label">Hari Masuk</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="hari" placeholder="Senin - Minggu" required>
                    </div>
                </div>

                <!-- Nama Instansi -->
                <div class="form-group row">
                    <label for="instansi" class="col-sm-3 col-form-label">Nama Instansi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama Instansi" name="instansi" required>
                    </div>
                </div>

                <!-- Acara -->
                <div class="form-group row">
                    <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Acara" name="acara" required>
                    </div>
                </div>

                <!-- Hari & Tanggal Mulai -->
                <div class="form-group row">
                    <label for="harimulai" class="col-sm-3 col-form-label">Hari Mulai</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="harimulai" placeholder="-" required>
                    </div>
                    <label for="tglmulai" class="col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tglmulai" required>
                    </div>
                </div>

                <!-- Hari & Tanggal Selesai -->
                <div class="form-group row">
                    <label for="hariselesai" class="col-sm-3 col-form-label">Hari Selesai</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="hariselesai" placeholder="-" required>
                    </div>
                    <label for="tglselesai" class="col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tglselesai" required>
                    </div>
                </div>

                <!-- Jenis -->
                <div class="form-group row">
                    <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                    <div class="col-sm-7">
                        <select name="jenis">
                            <option value="Internal">Internal</option>
                            <option value="Eksternal">Eksternal</option>
                        </select>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="Belum Terlaksana">Belum Terlaksana</option>
                            <option value="Terlaksana">Terlaksana</option>
                            <option value="Cancel">Cancel</option>
                        </select>
                    </div>
                </div>

                <!-- Kontraprestasi -->
                <div class="form-group row">
                    <label for="kontraprestasi" class="col-sm-3 col-form-label">Kontraprestasi</label>
                    <div class="col-sm-7">
                        <textarea class="tinymce" placeholder="write here.." name="kontraprestasi"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/medpart" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>