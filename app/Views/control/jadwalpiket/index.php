<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Jadwal Piket -->
<?php foreach ($jadwalpiket as $jadwal) : ?>
    <?php $data = json_decode($jadwal['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <center>
                    <h1 class="h1 mb-4 text-gray-800">
                        <b>Jadwal Piket</b>
                    </h1>
                    <h4 class="h4 mb-4 text-gray-800">Periode : (<?= $data->tglmulai; ?>) - (<?= $data->tglselesai; ?>)</h4>
                    <?php if (in_groups(['Admin', 'AOff'])) : ?>
                        <a href="<?= base_url(); ?>control/jadwalpiket/edit/<?= $jadwal['id']; ?>" class="btn btn-primary">Edit Jadwal Piket</a>
                    <?php endif; ?>
                    <br><br>
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
                                    <tr style="background-color: orange; color:black; font-size:large">
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
                                        <th style="background-color: aqua;"><?= $data->anggota1; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota2; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota3; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota4; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota5; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota6; ?></th>
                                    </tr>

                                    <!-- Row 2 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota7; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota8; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota9; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota10; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota11; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota12; ?></th>
                                    </tr>

                                    <!-- Row 3 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota13; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota14; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota15; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota16; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota17; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota18; ?></th>
                                    </tr>

                                    <!-- Row 4 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota19; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota20; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota21; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota22; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota23; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota24; ?></th>
                                    </tr>

                                    <!-- Row 5 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota25; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota26; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota27; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota28; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota29; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota30; ?></th>
                                    </tr>

                                    <!-- Row 6 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota31; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota32; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota33; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota34; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota35; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota36; ?></th>
                                    </tr>

                                    <!-- Row 71 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota37; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota38; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota39; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota40; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota41; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota42; ?></th>
                                    </tr>

                                    <!-- Row 8 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota43; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota44; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota45; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota46; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota47; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota48; ?></th>
                                    </tr>

                                    <!-- Row 9 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota49; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota50; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota51; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota52; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota53; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota54; ?></th>
                                    </tr>

                                    <!-- Row 10 -->
                                    <tr>
                                        <th style="background-color: aqua;"><?= $data->anggota55; ?></th>
                                        <th style="background-color: violet;"><?= $data->anggota56; ?></th>
                                        <th style="background-color: yellowgreen;"><?= $data->anggota57; ?></th>
                                        <th style="background-color: dodgerblue;"><?= $data->anggota58; ?></th>
                                        <th style="background-color: coral;"><?= $data->anggota59; ?></th>
                                        <th style="background-color: forestgreen;"><?= $data->anggota60; ?></th>
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