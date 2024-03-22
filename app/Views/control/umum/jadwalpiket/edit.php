<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Jadwal Piket -->
<?php foreach ($jadwalpiket as $jadwal) : ?>
    <?php $data = json_decode($jadwal['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-4 text-gray-800">
                    <b>Form Edit Data Jadwal Piket</b>
                </h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>jadwalpiket/update/<?= $jadwal['id']; ?>" method="post" enctype="multipart/form-data">
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
                                            <th scope="col" class="cursor-stop">Senin</th>
                                            <th scope="col" class="cursor-stop">Selasa</th>
                                            <th scope="col" class="cursor-stop">Rabu</th>
                                            <th scope="col" class="cursor-stop">Kamis</th>
                                            <th scope="col" class="cursor-stop">Jum'at</th>
                                            <th scope="col" class="cursor-stop">Sabtu</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color:black">
                                        <!-- Row 1 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota1" value="<?= $data->anggota1; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota2" value="<?= $data->anggota2; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota3" value="<?= $data->anggota3; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota4" value="<?= $data->anggota4; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota5" value="<?= $data->anggota5; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota6" value="<?= $data->anggota6; ?>" required></th>
                                        </tr>

                                        <!-- Row 2 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota7" value="<?= $data->anggota7; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota8" value="<?= $data->anggota8; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota9" value="<?= $data->anggota9; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota10" value="<?= $data->anggota10; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota11" value="<?= $data->anggota11; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota12" value="<?= $data->anggota12; ?>" required></th>
                                        </tr>

                                        <!-- Row 3 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota13" value="<?= $data->anggota13; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota14" value="<?= $data->anggota14; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota15" value="<?= $data->anggota15; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota16" value="<?= $data->anggota16; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota17" value="<?= $data->anggota17; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota18" value="<?= $data->anggota18; ?>" required></th>
                                        </tr>

                                        <!-- Row 4 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota19" value="<?= $data->anggota19; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota20" value="<?= $data->anggota20; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota21" value="<?= $data->anggota21; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota22" value="<?= $data->anggota22; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota23" value="<?= $data->anggota23; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota24" value="<?= $data->anggota24; ?>" required></th>
                                        </tr>

                                        <!-- Row 5 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota25" value="<?= $data->anggota25; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota26" value="<?= $data->anggota26; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota27" value="<?= $data->anggota27; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota28" value="<?= $data->anggota28; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota29" value="<?= $data->anggota29; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota30" value="<?= $data->anggota30; ?>" required></th>
                                        </tr>

                                        <!-- Row 6 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota31" value="<?= $data->anggota31; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota32" value="<?= $data->anggota32; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota33" value="<?= $data->anggota33; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota34" value="<?= $data->anggota34; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota35" value="<?= $data->anggota35; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota36" value="<?= $data->anggota36; ?>" required></th>
                                        </tr>

                                        <!-- Row 7 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota37" value="<?= $data->anggota37; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota38" value="<?= $data->anggota38; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota39" value="<?= $data->anggota39; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota40" value="<?= $data->anggota40; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota41" value="<?= $data->anggota41; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota42" value="<?= $data->anggota42; ?>" required></th>
                                        </tr>

                                        <!-- Row 8 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota43" value="<?= $data->anggota43; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota44" value="<?= $data->anggota44; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota45" value="<?= $data->anggota45; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota46" value="<?= $data->anggota46; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota47" value="<?= $data->anggota47; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota48" value="<?= $data->anggota48; ?>" required></th>
                                        </tr>

                                        <!-- Row 9 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota49" value="<?= $data->anggota49; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota50" value="<?= $data->anggota50; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota51" value="<?= $data->anggota51; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota52" value="<?= $data->anggota52; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota53" value="<?= $data->anggota53; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota54" value="<?= $data->anggota54; ?>" required></th>
                                        </tr>

                                        <!-- Row 10 -->
                                        <tr>
                                            <th style="background-color: aqua;"><input type="text" class="form-jadwal-siar" name="anggota55" value="<?= $data->anggota55; ?>" required></th>
                                            <th style="background-color: violet;"><input type="text" class="form-jadwal-siar" name="anggota56" value="<?= $data->anggota56; ?>" required></th>
                                            <th style="background-color: yellowgreen;"><input type="text" class="form-jadwal-siar" name="anggota57" value="<?= $data->anggota57; ?>" required></th>
                                            <th style="background-color: dodgerblue;"><input type="text" class="form-jadwal-siar" name="anggota58" value="<?= $data->anggota58; ?>" required></th>
                                            <th style="background-color: coral;"><input type="text" class="form-jadwal-siar" name="anggota59" value="<?= $data->anggota59; ?>" required></th>
                                            <th style="background-color: forestgreen;"><input type="text" class="form-jadwal-siar" name="anggota60" value="<?= $data->anggota60; ?>" required></th>
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
                            <a href="<?= base_url(); ?>control/jadwalpiket" class="btn btn-dark mb-1">Back</a>
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