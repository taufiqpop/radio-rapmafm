<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Surat SP -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Surat SP</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>suratsp/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Surat Peringatan -->
                <div class="form-group row">
                    <label for="sp" class="col-sm-3 col-form-label">Surat Peringatan</label>
                    <div class="col-sm-7">
                        <select name="sp">
                            <option value="SP 1">SP 1</option>
                            <option value="SP 2">SP 2</option>
                            <option value="SP 3">SP 3</option>
                        </select>
                    </div>
                </div>

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

                <!-- Alasan -->
                <div class="form-group row">
                    <label for="alasan" class="col-sm-3 col-form-label">Alasan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="alasan" required>
                    </div>
                </div>

                <!-- Program Studi -->
                <div class="form-group row">
                    <label for="prodi" class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Jurusan Kuliah" name="prodi" required>
                    </div>
                </div>

                <!-- Tahun Angkatan -->
                <div class="form-group row">
                    <label for="angkatan" class="col-sm-3 col-form-label">Tahun Angkatan</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="2021" name="angkatan" required>
                    </div>
                </div>

                <!-- Nomor HP -->
                <div class="form-group row">
                    <label for="nohp" class="col-sm-3 col-form-label">Nomor HP</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" placeholder="08**********" name="nohp" required>
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="keterangan" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/suratsp" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>