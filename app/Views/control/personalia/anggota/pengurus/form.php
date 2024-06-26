<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Pengurus -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Pengurus</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>pengurus/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama Pengurus -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Pengurus</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Nickname -->
                <div class="form-group row">
                    <label for="nickname" class="col-sm-3 col-form-label">Nama Panggilan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Nickname" name="nickname" required>
                    </div>
                </div>

                <!-- Divisi -->
                <div class="form-group row">
                    <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                    <div class="col-sm-7">
                        <select name="divisi">
                            <option value="GMPA">GMPA</option>
                            <option value="Divisi Umum">Divisi Umum</option>
                            <option value="Divisi Kepenyiaran">Divisi Kepenyiaran</option>
                            <option value="Divisi Marketing">Divisi Marketing</option>
                            <option value="Divisi Personalia">Divisi Personalia</option>
                        </select>
                    </div>
                </div>

                <!-- Sub Divisi -->
                <div class="form-group row">
                    <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Sub Divisi" name="subdivisi" required>
                    </div>
                </div>

                <!-- Jurusan -->
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Jurusan Kuliah" name="jurusan" required>
                    </div>
                </div>

                <!-- Semester -->
                <div class="form-group row">
                    <label for="semester" class="col-sm-3 col-form-label">Semester</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" placeholder="0" name="semester" required>
                    </div>
                </div>

                <!-- NIM -->
                <div class="form-group row">
                    <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="L200******" name="nim" required>
                    </div>
                </div>

                <!-- NIA -->
                <div class="form-group row">
                    <label for="nia" class="col-sm-3 col-form-label">NIA</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="000.00.000" name="nia" required>
                    </div>
                </div>

                <!-- Domisili -->
                <div class="form-group row">
                    <label for="domisili" class="col-sm-3 col-form-label">Domisili</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Domisili Saat Ini" name="domisili" required>
                    </div>
                </div>

                <!-- No HP -->
                <div class="form-group row">
                    <label for="nohp" class="col-sm-3 col-form-label">No HP</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" placeholder="08**********" name="nohp" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Pasif">Pasif</option>
                        </select>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="form-group row">
                    <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Tanpa '@'" name=" instagram" required>
                    </div>
                </div>

                <!-- Twitter -->
                <div class="form-group row">
                    <label for="twitter" class="col-sm-3 col-form-label">Twitter</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Tanpa '@'" name="twitter" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/pengurus" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>