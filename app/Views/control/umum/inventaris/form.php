<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Inventaris -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Inventaris</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>inventaris/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama Barang -->
                <div class="form-group row">
                    <label for="barang" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama Barang" name="barang" required autofocus>
                    </div>
                </div>

                <!-- Nomor Barang -->
                <div class="form-group row">
                    <label for="nomor" class="col-sm-3 col-form-label">Nomor Barang</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" placeholder="0" name="nomor" required>
                    </div>
                </div>

                <!-- Jumlah Barang -->
                <div class="form-group row">
                    <label for="jumlah" class="col-sm-3 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" placeholder="0" name="jumlah" required>
                    </div>
                </div>

                <!-- Kode Barang -->
                <div class="form-group row">
                    <label for="kode" class="col-sm-3 col-form-label">Kode Barang</label>
                    <div class="col-sm-2">
                        <select name="kode" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                        </select>
                    </div>
                </div>

                <!-- Kondisi Barang -->
                <div class="form-group row">
                    <label for="kondisi" class="col-sm-3 col-form-label">Kondisi Barang</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Baik | Rusak" name="kondisi" required>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
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
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-3 col-form-label">Tahun (2 Digit Belakang)</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" placeholder="00" name="tahun" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/inventaris" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>