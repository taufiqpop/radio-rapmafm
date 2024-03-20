<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Podcast -->
<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Podcast</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>podcast/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul Podcast -->
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Podcast</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Judul Podcast" name="judul" required autofocus>
                    </div>
                </div>

                <!-- Program Siar -->
                <div class="form-group row">
                    <label for="program" class="col-sm-2 col-form-label">Program Siar</label>
                    <div class="col-sm-7">
                        <select name="program">
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

                <!-- Nama Talent -->
                <div class="form-group row">
                    <label for="talent" class="col-sm-2 col-form-label">Nama Talent</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="-" name="talent" required>
                    </div>
                </div>

                <!-- Narasumber -->
                <div class="form-group row">
                    <label for="narasumber" class="col-sm-2 col-form-label">Narasumber</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="-" name="narasumber" required>
                    </div>
                </div>

                <!-- Link Embed -->
                <div class="form-group row">
                    <label for="embed" class="col-sm-2 col-form-label">Link Embed</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="https://open.spotify.com/" name="embed" required>
                    </div>
                </div>

                <!-- Hari -->
                <div class="form-group row">
                    <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Senin - Minggu" name="hari" required>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" placeholder="2021" name="tahun" required>
                    </div>
                </div>

                <!-- Images -->
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Artwork</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-5">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgRapma" name="images" onchange="previewImgRapma()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Artwork</label>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/podcast" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>