<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Podcast -->
<?php foreach ($podcast as $podcasts) : ?>
    <?php $data = json_decode($podcasts['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Podcast</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>podcast/update/<?= $podcasts['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Judul Podcast -->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul Podcast</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="judul" value="<?= $data->judul; ?>" required autofocus>
                        </div>
                    </div>

                    <!-- Program Siar -->
                    <div class="form-group row">
                        <label for="program" class="col-sm-2 col-form-label">Program Siar</label>
                        <div class="col-sm-7">
                            <select name="program">
                                <option value="<?= $podcasts['program']; ?>" selected><?= $podcasts['program']; ?></option>
                                <option value="RAPMATALKS">RAPMATALKS</option>
                                <option value="DRAMA RADIO">DRAMA RADIO</option>
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

                    <!-- Link -->
                    <div class="form-group row">
                        <label for="link" class="col-sm-2 col-form-label">Link</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="link" value="<?= $data->link; ?>" required>
                        </div>
                    </div>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                        <div class="col-sm-1">
                            <select name="hari" required>
                                <option value="<?= $data->hari; ?>"><?= $data->hari; ?></option>
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
                            <input type="date" class="form-control" name="tanggal" value="<?= $data->tanggal; ?>" required>
                        </div>
                    </div>

                    <!-- Tahun -->
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-2">
                            <input type="number" class="form-control" name="tahun" value="<?= $podcasts['tahun']; ?>" required>
                        </div>
                    </div>

                    <!-- Nama Talent -->
                    <div class="form-group row">
                        <label for="talent" class="col-sm-2 col-form-label">Nama Talent</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="talent" value="<?= $data->talent; ?>" required>
                        </div>
                    </div>

                    <!-- Narasumber -->
                    <div class="form-group row">
                        <label for="narasumber" class="col-sm-2 col-form-label">Narasumber</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="narasumber" value="<?= $data->narasumber; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="<?= base_url(); ?>control/podcast" class="btn btn-dark mb-1">Back</a>
                            <button type="submit" class="btn btn-primary mb-1">Confirm Changes</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>