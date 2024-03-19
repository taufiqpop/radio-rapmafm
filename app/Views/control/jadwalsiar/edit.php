<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Jadwal Siar -->
<?php foreach ($jadwalsiar as $jadwal) : ?>
    <?php $data = json_decode($jadwal['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-4 text-gray-800">
                    <b>Form Edit Data Jadwal Siar</b>
                </h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>jadwalsiar/update/<?= $jadwal['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <div class="col-sm-2">
                            <input type="date" class="form-jadwal-siar" name="tglmulai" value="<?= $data->tglmulai; ?>" required autofocus>
                        </div>
                        <label for="tglselesai" class="col-form-label">-</label>
                        <div class="col-sm-2">
                            <input type="date" class="form-jadwal-siar" name="tglselesai" value="<?= $data->tglselesai; ?>" required>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="row card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-jadwal-siar" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="background-color: antiquewhite; color:black;">
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
                                        <tr style="background-color:aqua;">
                                            <th style="max-width: 200px;" rowspan="2">BASOSAPI</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar1" value="<?= $data->penyiar1; ?>" value="<?= $data->penyiar1; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar2" value="<?= $data->penyiar2; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar3" value="<?= $data->penyiar3; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar4" value="<?= $data->penyiar4; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar5" value="<?= $data->penyiar5; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar6" value="<?= $data->penyiar6; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:aqua;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar7" value="<?= $data->penyiar7; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar8" value="<?= $data->penyiar8; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar9" value="<?= $data->penyiar9; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar10" value="<?= $data->penyiar10; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar11" value="<?= $data->penyiar11; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar12" value="<?= $data->penyiar12; ?>" required></th>
                                        </tr>

                                        <!-- 11N1 -->
                                        <tr style="background-color:darkgray;">
                                            <th style="max-width: 200px;" rowspan="2">11N1</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar13" value="<?= $data->penyiar13; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar14" value="<?= $data->penyiar14; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar15" value="<?= $data->penyiar15; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar16" value="<?= $data->penyiar16; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar17" value="<?= $data->penyiar17; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar18" value="<?= $data->penyiar18; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:darkgray;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar19" value="<?= $data->penyiar19; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar20" value="<?= $data->penyiar20; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar21" value="<?= $data->penyiar21; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar22" value="<?= $data->penyiar22; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar23" value="<?= $data->penyiar23; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar24" value="<?= $data->penyiar24; ?>" required></th>
                                        </tr>

                                        <!-- RAPMANESIA -->
                                        <tr style="background-color:red;">
                                            <th style="max-width: 200px;" rowspan="2">RAPMANESIA</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar25" value="<?= $data->penyiar25; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar26" value="<?= $data->penyiar26; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar27" value="<?= $data->penyiar27; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar28" value="<?= $data->penyiar28; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar29" value="<?= $data->penyiar29; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar30" value="<?= $data->penyiar30; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:red;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar31" value="<?= $data->penyiar31; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar32" value="<?= $data->penyiar32; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar33" value="<?= $data->penyiar33; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar34" value="<?= $data->penyiar34; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar35" value="<?= $data->penyiar35; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar36" value="<?= $data->penyiar36; ?>" required></th>
                                        </tr>

                                        <!-- THE GOOD VIBES -->
                                        <tr style="background-color:yellow;">
                                            <th style="max-width: 200px;" rowspan="2">THE GOOD VIBES</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar37" value="<?= $data->penyiar37; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar38" value="<?= $data->penyiar38; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar39" value="<?= $data->penyiar39; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar40" value="<?= $data->penyiar40; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar41" value="<?= $data->penyiar41; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar42" value="<?= $data->penyiar42; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:yellow;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar43" value="<?= $data->penyiar43; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar44" value="<?= $data->penyiar44; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar45" value="<?= $data->penyiar45; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar46" value="<?= $data->penyiar46; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar47" value="<?= $data->penyiar47; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar48" value="<?= $data->penyiar48; ?>" required></th>
                                        </tr>

                                        <!-- KHASANAH PETANG -->
                                        <tr style="background-color:coral;">
                                            <th style="max-width: 200px;" rowspan="2">KHASANAH PETANG</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar49" value="<?= $data->penyiar49; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar50" value="<?= $data->penyiar50; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar51" value="<?= $data->penyiar51; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar52" value="<?= $data->penyiar52; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar53" value="<?= $data->penyiar53; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar54" value="<?= $data->penyiar54; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:coral;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar55" value="<?= $data->penyiar55; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar56" value="<?= $data->penyiar56; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar57" value="<?= $data->penyiar57; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar58" value="<?= $data->penyiar58; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar59" value="<?= $data->penyiar59; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar60" value="<?= $data->penyiar60; ?>" required></th>
                                        </tr>

                                        <!-- MUSIC BOX -->
                                        <tr style="background-color:orange;">
                                            <th style="max-width: 200px;" rowspan="2">MUSIC BOX</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar61" value="<?= $data->penyiar61; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar62" value="<?= $data->penyiar62; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar63" value="<?= $data->penyiar63; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar64" value="<?= $data->penyiar64; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar65" value="<?= $data->penyiar65; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar66" value="<?= $data->penyiar66; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:orange;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar67" value="<?= $data->penyiar67; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar68" value="<?= $data->penyiar68; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar69" value="<?= $data->penyiar69; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar70" value="<?= $data->penyiar70; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar71" value="<?= $data->penyiar71; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar72" value="<?= $data->penyiar72; ?>" required></th>
                                        </tr>

                                        <!-- SPECIAL PROGRAM -->
                                        <tr style="background-color:forestgreen;">
                                            <th style="max-width: 200px;" rowspan="2">SPECIAL PROGRAM</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar73" value="<?= $data->penyiar73; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar74" value="<?= $data->penyiar74; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar75" value="<?= $data->penyiar75; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar76" value="<?= $data->penyiar76; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar77" value="<?= $data->penyiar77 ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar78" value="<?= $data->penyiar78; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:forestgreen;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar79" value="<?= $data->penyiar79; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar80" value="<?= $data->penyiar80; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar81" value="<?= $data->penyiar81; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar82" value="<?= $data->penyiar82; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar83" value="<?= $data->penyiar83; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar84" value="<?= $data->penyiar84; ?>" required></th>
                                        </tr>

                                        <!-- AFTERDAY -->
                                        <tr style="background-color:dodgerblue;">
                                            <th style="max-width: 200px;" rowspan="2">AFTERDAY</th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar85" value="<?= $data->penyiar85; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar86" value="<?= $data->penyiar86; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar87" value="<?= $data->penyiar87; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar88" value="<?= $data->penyiar88; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar89" value="<?= $data->penyiar89; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar90" value="<?= $data->penyiar90; ?>" required></th>
                                        </tr>
                                        <tr style="background-color:dodgerblue;">
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar91" value="<?= $data->penyiar91; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar92" value="<?= $data->penyiar92; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar93" value="<?= $data->penyiar93; ?>" required></th>
                                            <th style="background-color:forestgreen;"><input type="text" class="form-jadwal-siar" name="penyiar94" value="<?= $data->penyiar94; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar95" value="<?= $data->penyiar95; ?>" required></th>
                                            <th><input type="text" class="form-jadwal-siar" name="penyiar96" value="<?= $data->penyiar96; ?>" required></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/jadwalsiar" class="btn btn-dark mb-1">Back</a>
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