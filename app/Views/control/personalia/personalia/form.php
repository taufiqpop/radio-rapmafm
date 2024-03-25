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

                <!-- Tanggal Perencanaan -->
                <div class="form-group row">
                    <label for="daritgl" class="col-sm-3 col-form-label">Tanggal Perencanaan</label>
                    <div class="col-sm-1">
                        <select name="darihari" required autofocus>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="daritgl" required>
                    </div>
                    <label for="sampaitgl" class="col-form-label">-</label>
                    <div class="col-sm-1">
                        <select name="sampaihari" required>
                            <option value="Minggu">Minggu</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="date" class="form-control" name="sampaitgl" required>
                    </div>
                </div>

                <!-- Sub Divisi -->
                <div class="form-group row">
                    <label for="subdivisi" class="col-sm-3 col-form-label">Sub Divisi</label>
                    <div class="col-sm-7">
                        <select name="subdivisi">
                            <option value="Manager Personalia">Manager Personalia</option>
                            <option value="HRD">HRD</option>
                            <option value="Advokat">Advokat</option>
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

                <!-- Tanggal Pelaksanaan -->
                <div class="form-group row">
                    <label for="mulaitgl" class="col-sm-3 col-form-label">Tanggal Pelaksanaan</label>
                    <div class="col-sm-1">
                        <select name="mulaihari" required autofocus>
                            <option value="-">-</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="mulaitgl" placeholder="-" required>
                    </div>
                    <label for="selesaitgl" class="col-form-label">-</label>
                    <div class="col-sm-1">
                        <select name="selesaihari" required>
                            <option value="-">-</option>
                            <option value="Minggu">Minggu</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
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
                            <option value="Sudah Terlaksana">Sudah Terlaksana</option>
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