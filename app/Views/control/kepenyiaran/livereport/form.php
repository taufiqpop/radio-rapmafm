<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Live Report -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Live Report</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>livereport/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama 1, Nama 2" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-3 col-form-label">Tanggal</label>
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

                <!-- Jam -->
                <div class="form-group row">
                    <label for="jam" class="col-sm-3 col-form-label">Jam</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="00:00 - 23:59" name="jam" required>
                    </div>
                </div>

                <!-- Program Siar -->
                <div class="form-group row">
                    <label for="program" class="col-sm-3 col-form-label">Program Siar</label>
                    <div class="col-sm-7">
                        <select name="program">
                            <option value="BASOSAPI">BASOSAPI</option>
                            <option value="11N1">11N1</option>
                            <option value="RAPMANESIA">RAPMANESIA</option>
                            <option value="THE GOOD VIBES">THE GOOD VIBES</option>
                            <option value="KHASANAH PETANG">KHASANAH PETANG</option>
                            <option value="MUSIC BOX">MUSIC BOX</option>
                            <option value="AFTERDAY">AFTERDAY</option>
                            <option value="MOVIE SCREEN">MOVIE SCREEN</option>
                            <option value="KING & QUEEN">KING & QUEEN</option>
                            <option value="INDIEZONE">INDIEZONE</option>
                            <option value="TEKSAS">TEKSAS</option>
                            <option value="MERINDING">MERINDING</option>
                            <option value="K-ARENA">K-ARENA</option>
                            <option value="SPORTACULAR">SPORTACULAR</option>
                            <option value="TOP 15">TOP 15</option>
                            <option value="SUDUT KAMPUS">SUDUT KAMPUS</option>
                            <option value="NO SATNIGHT">NO SATNIGHT</option>
                            <option value="CLASSIC NIGHT">CLASSIC NIGHT</option>
                        </select>
                    </div>
                </div>

                <!-- Lokasi -->
                <div class="form-group row">
                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Lokasi" name="lokasi" required>
                    </div>
                </div>

                <!-- Perihal -->
                <div class="form-group row">
                    <label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Perihal" name="perihal" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="&#8212;">Belum Terlaksana</option>
                            <option value="&#9989;">Sudah Terlaksana</option>
                            <option value="&times;">Tidak Terlaksana</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/livereport" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>