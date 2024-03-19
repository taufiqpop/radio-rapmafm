<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Jadwal Siar -->
<?php foreach ($jadwalsiar as $jadwal) : ?>
    <?php $data = json_decode($jadwal['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <center>
                    <h1 class="h1 mb-4 text-gray-800">
                        <b>Jadwal Siar</b>
                    </h1>
                    <h4 class="h4 mb-4 text-gray-800">Tanggal : (<?= $data->tglmulai; ?>) - (<?= $data->tglselesai; ?>)</h4>
                    <a href="<?= base_url(); ?>control/penyiar" class="btn btn-info">Penyiar</a>
                    <?php if (in_groups(['Admin', 'MK'])) : ?>
                        <a href="<?= base_url(); ?>control/jadwalsiar/edit/<?= $jadwal['id']; ?>" class="btn btn-primary">Edit Jadwal Siar</a>
                        <br><br>
                    <?php endif; ?>
                </center>

                <!-- Messages -->
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>
                <?php endif; ?>

                <!-- Table -->
                <div class="row card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-jadwal-siar" width="100%" cellspacing="0">
                                <thead>
                                    <tr style="background-color: antiquewhite; color:black; font-size:large">
                                        <th scope="col" class="cursor-stop">Program Siar</th>
                                        <th scope="col" class="cursor-stop">Senin</th>
                                        <th scope="col" class="cursor-stop">Selasa</th>
                                        <th scope="col" class="cursor-stop">Rabu</th>
                                        <th scope="col" class="cursor-stop">Kamis</th>
                                        <th scope="col" class="cursor-stop">Jum'at</th>
                                        <th scope="col" class="cursor-stop">Sabtu</th>
                                    </tr>
                                </thead>
                                <tbody style="color:black">
                                    <!-- BASOSAPI -->
                                    <tr style="background-color: aqua;">
                                        <th style="max-width: 30px;" rowspan="2">BASOSAPI</th>
                                        <th><?= $data->penyiar1; ?></th>
                                        <th><?= $data->penyiar2; ?></th>
                                        <th><?= $data->penyiar3; ?></th>
                                        <th><?= $data->penyiar4; ?></th>
                                        <th><?= $data->penyiar5; ?></th>
                                        <th><?= $data->penyiar6; ?></th>
                                    </tr>
                                    <tr style="background-color: aqua;">
                                        <th><?= $data->penyiar7; ?></th>
                                        <th><?= $data->penyiar8; ?></th>
                                        <th><?= $data->penyiar9; ?></th>
                                        <th><?= $data->penyiar10; ?></th>
                                        <th><?= $data->penyiar11; ?></th>
                                        <th><?= $data->penyiar12; ?></th>
                                    </tr>

                                    <!-- 11N1 -->
                                    <tr style="background-color: darkgray;">
                                        <th style="max-width: 30px;" rowspan="2">11N1</th>
                                        <th><?= $data->penyiar13; ?></th>
                                        <th><?= $data->penyiar14; ?></th>
                                        <th><?= $data->penyiar15; ?></th>
                                        <th><?= $data->penyiar16; ?></th>
                                        <th><?= $data->penyiar17; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar18; ?></th>
                                    </tr>
                                    <tr style="background-color: darkgray;">
                                        <th><?= $data->penyiar19; ?></th>
                                        <th><?= $data->penyiar20; ?></th>
                                        <th><?= $data->penyiar21; ?></th>
                                        <th><?= $data->penyiar22; ?></th>
                                        <th><?= $data->penyiar23; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar24; ?></th>
                                    </tr>

                                    <!-- RAPMANESIA -->
                                    <tr style="background-color: red;">
                                        <th style="max-width: 30px;" rowspan="2">RAPMANESIA</th>
                                        <th><?= $data->penyiar25; ?></th>
                                        <th><?= $data->penyiar26; ?></th>
                                        <th><?= $data->penyiar27; ?></th>
                                        <th><?= $data->penyiar28; ?></th>
                                        <th><?= $data->penyiar29; ?></th>
                                        <th style="background-color:chartreuse;"><?= $data->penyiar30; ?></th>
                                    </tr>
                                    <tr style="background-color: red;">
                                        <th><?= $data->penyiar31; ?></th>
                                        <th><?= $data->penyiar32; ?></th>
                                        <th><?= $data->penyiar33; ?></th>
                                        <th><?= $data->penyiar34; ?></th>
                                        <th><?= $data->penyiar35; ?></th>
                                        <th style="background-color:chartreuse;"><?= $data->penyiar36; ?></th>
                                    </tr>

                                    <!-- THE GOOD VIBES -->
                                    <tr style="background-color: yellow;">
                                        <th style="max-width: 30px;" rowspan="2">THE GOOD VIBES</th>
                                        <th><?= $data->penyiar37; ?></th>
                                        <th><?= $data->penyiar38; ?></th>
                                        <th><?= $data->penyiar39; ?></th>
                                        <th><?= $data->penyiar40; ?></th>
                                        <th><?= $data->penyiar41; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar42; ?></th>
                                    </tr>
                                    <tr style="background-color: yellow;">
                                        <th><?= $data->penyiar43; ?></th>
                                        <th><?= $data->penyiar44; ?></th>
                                        <th><?= $data->penyiar45; ?></th>
                                        <th><?= $data->penyiar46; ?></th>
                                        <th><?= $data->penyiar47; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar48; ?></th>
                                    </tr>

                                    <!-- KHASANAH PETANG -->
                                    <tr style="background-color: coral;">
                                        <th style="max-width: 30px;" rowspan="2">KHASANAH PETANG</th>
                                        <th><?= $data->penyiar49; ?></th>
                                        <th><?= $data->penyiar50; ?></th>
                                        <th><?= $data->penyiar51; ?></th>
                                        <th><?= $data->penyiar52; ?></th>
                                        <th><?= $data->penyiar53; ?></th>
                                        <th><?= $data->penyiar54; ?></th>
                                    </tr>
                                    <tr style="background-color: coral;">
                                        <th><?= $data->penyiar55; ?></th>
                                        <th><?= $data->penyiar56; ?></th>
                                        <th><?= $data->penyiar57; ?></th>
                                        <th><?= $data->penyiar58; ?></th>
                                        <th><?= $data->penyiar59; ?></th>
                                        <th><?= $data->penyiar60; ?></th>
                                    </tr>

                                    <!-- MUSIC BOX -->
                                    <tr style="background-color: orange;">
                                        <th style="max-width: 30px;" rowspan="2">MUSIC BOX</th>
                                        <th><?= $data->penyiar61; ?></th>
                                        <th><?= $data->penyiar62; ?></th>
                                        <th><?= $data->penyiar63; ?></th>
                                        <th><?= $data->penyiar64; ?></th>
                                        <th><?= $data->penyiar65; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar66; ?></th>
                                    </tr>
                                    <tr style="background-color: orange;">
                                        <th><?= $data->penyiar67; ?></th>
                                        <th><?= $data->penyiar68; ?></th>
                                        <th><?= $data->penyiar69; ?></th>
                                        <th><?= $data->penyiar70; ?></th>
                                        <th><?= $data->penyiar71; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar72; ?></th>
                                    </tr>

                                    <!-- SPECIAL PROGRAM -->
                                    <tr style="background-color: forestgreen;">
                                        <th style="max-width: 30px;" rowspan="2">SPECIAL PROGRAM</th>
                                        <th><?= $data->penyiar73; ?></th>
                                        <th><?= $data->penyiar74; ?></th>
                                        <th><?= $data->penyiar75; ?></th>
                                        <th><?= $data->penyiar76; ?></th>
                                        <th><?= $data->penyiar77; ?></th>
                                        <th><?= $data->penyiar78; ?></th>
                                    </tr>
                                    <tr style="background-color: forestgreen;">
                                        <th><?= $data->penyiar79; ?></th>
                                        <th><?= $data->penyiar80; ?></th>
                                        <th><?= $data->penyiar81; ?></th>
                                        <th><?= $data->penyiar82; ?></th>
                                        <th><?= $data->penyiar83; ?></th>
                                        <th><?= $data->penyiar84; ?></th>
                                    </tr>

                                    <!-- AFTERDAY -->
                                    <tr style="background-color: dodgerblue;">
                                        <th style="max-width: 30px;" rowspan="2">AFTERDAY</th>
                                        <th><?= $data->penyiar85; ?></th>
                                        <th><?= $data->penyiar86; ?></th>
                                        <th><?= $data->penyiar87; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar88; ?></th>
                                        <th><?= $data->penyiar89; ?></th>
                                        <th><?= $data->penyiar90; ?></th>
                                    </tr>
                                    <tr style="background-color: dodgerblue;">
                                        <th><?= $data->penyiar91; ?></th>
                                        <th><?= $data->penyiar92; ?></th>
                                        <th><?= $data->penyiar93; ?></th>
                                        <th style="background-color:forestgreen;"><?= $data->penyiar94; ?></th>
                                        <th><?= $data->penyiar95; ?></th>
                                        <th><?= $data->penyiar96; ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Table -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>