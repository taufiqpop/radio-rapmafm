<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Divisi Kepenyiaran -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Timeline Divisi Kepenyiaran</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>kepenyiaran/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Hari Perencanaan -->
                <div class="form-group row">
                    <label for="darihari" class="col-sm-3 col-form-label">Hari Perencanaan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Senin" name="darihari" required autofocus>
                    </div>
                    <label for="sampaihari" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Jum'at" name="sampaihari" required>
                    </div>
                </div>

                <!-- Tanggal Perencanaan -->
                <div class="form-group row">
                    <label for="daritgl" class="col-sm-3 col-form-label">Tanggal Perencanaan</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="daritgl" required>
                    </div>
                    <label for="sampaitgl" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="sampaitgl" required>
                    </div>
                </div>

                <!-- Sub Divisi -->
                <div class="form-group row">
                    <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                    <div class="col-sm-7">
                        <select name="subdivisi">
                            <option value="Manager Kepenyiaran">Manager Kepenyiaran</option>
                            <option value="Jurnalistik">Jurnalistik</option>
                            <option value="MD">Music Director</option>
                            <option value="Produksi">Produksi</option>
                        </select>
                    </div>
                </div>

                <!-- Program Kerja -->
                <div class="form-group row">
                    <label for="proker" class="col-sm-3 col-form-label">Program Kerja</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Program Kerja" name="proker" required>
                    </div>
                </div>

                <!-- Hari Pelaksanaan -->
                <div class="form-group row">
                    <label for="mulaihari" class="col-sm-3 col-form-label">Hari Pelaksanaan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="-" name="mulaihari" required>
                    </div>
                    <label for="selesaihari" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="-" name="selesaihari" required>
                    </div>
                </div>

                <!-- Tanggal Pelaksanaan -->
                <div class="form-group row">
                    <label for="mulaitgl" class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="mulaitgl" placeholder="-" required>
                    </div>
                    <label for="selesaitgl" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="selesaitgl" placeholder="-" required>
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
                            <option value="Belum Terlaksana">Belum Terlaksana</option>
                            <option value="Terlaksana">Terlaksana</option>
                            <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/kepenyiaran" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>