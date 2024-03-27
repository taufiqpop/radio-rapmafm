<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Iklan -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Iklan</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>iklan/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama Penembus -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Penembus</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama Penembus" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Client -->
                <div class="form-group row">
                    <label for="client" class="col-sm-3 col-form-label">Client</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Client" name="client" required>
                    </div>
                </div>

                <!-- Tanggal MOU -->
                <div class="form-group row">
                    <label for="tglmou" class="col-sm-3 col-form-label">Tanggal MOU</label>
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
                        <input type="date" class="form-control" name="tglmou" required>
                    </div>
                </div>

                <!-- Harga -->
                <div class="form-group row">
                    <label for="harga" class="col-sm-3 col-form-label">Harga (Tanpa Rp.)</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="5.000.000" name="harga" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="Belum Tembus">Belum Tembus</option>
                            <option value="Sudah Tembus">Sudah Tembus</option>
                            <option value="Tidak Tembus">Tidak Tembus</option>
                        </select>
                    </div>
                </div>

                <!-- Paket Iklan -->
                <div class="form-group row">
                    <label for="paket" class="col-sm-3 col-form-label">Paket Iklan</label>
                    <div class="col-sm-7">
                        <textarea class="form-control areatext" placeholder="write here.." name="paket"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/iklan" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>