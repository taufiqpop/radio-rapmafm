<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Penyiar -->
<?php foreach ($penyiar as $siaran) : ?>
    <?php $data = json_decode($siaran['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Penyiar</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>penyiar/update/<?= $siaran['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Program Siar -->
                    <div class="form-group row">
                        <label for="program" class="col-sm-2 col-form-label">Program Siar</label>
                        <div class="col-sm-7">
                            <select name="program">
                                <option value="<?= $data->program; ?>" selected></option>
                                <option value="RAPMATALKS">RAPMATALKS</option>
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
                                <option value="SUDUT KAMPUS">SUDUT KAMPUS</option>
                                <option value="NO SATNIGHT">NO SATNIGHT</option>
                                <option value="CLASSIC NIGHT">CLASSIC NIGHT</option>
                            </select>
                        </div>
                    </div>

                    <!-- Nama Penyiar 1 -->
                    <div class="form-group row">
                        <label for="penyiar1" class="col-sm-2 col-form-label">Nama Penyiar 1</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="penyiar1" value="<?= $data->penyiar1; ?>" required>
                        </div>
                    </div>

                    <!-- Nama Penyiar 2 -->
                    <div class="form-group row">
                        <label for="penyiar2" class="col-sm-2 col-form-label">Nama Penyiar 2</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="penyiar2" value="<?= $data->penyiar2; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/penyiar" class="btn btn-dark mb-1">Back</a>
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