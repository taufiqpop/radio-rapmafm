<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Alumni -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Alumni</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>alumni/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama Alumni -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Alumni</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Nickname Alumni -->
                <div class="form-group row">
                    <label for="nickname" class="col-sm-3 col-form-label">Nickname Alumni</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nickname" name="nickname" required>
                    </div>
                </div>

                <!-- Tahun Kepengurusan -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-3 col-form-label">Tahun Kepengurusan</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" placeholder="20**" name="tahun" required>
                    </div>
                </div>

                <!-- Divisi -->
                <div class="form-group row">
                    <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Divisi" name="divisi" required>
                    </div>
                </div>

                <!-- Sub Divisi -->
                <div class="form-group row">
                    <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Sub Divisi" name="subdivisi" required>
                    </div>
                </div>

                <!-- Jurusan -->
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Jurusan Saat Kuliah" name="jurusan" required>
                    </div>
                </div>

                <!-- Domisili -->
                <div class="form-group row">
                    <label for="domisili" class="col-sm-3 col-form-label">Domisili</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Domisili Saat Ini" name="domisili" required>
                    </div>
                </div>

                <!-- No HP -->
                <div class="form-group row">
                    <label for="nohp" class="col-sm-3 col-form-label">No HP</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="08**********" name="nohp" required>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="form-group row">
                    <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Tanpa '@'" name=" instagram" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/alumni" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>