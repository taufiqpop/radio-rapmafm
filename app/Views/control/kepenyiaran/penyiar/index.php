<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Penyiar -->
<?php foreach ($penyiar as $siaran) : ?>
    <?php $data = json_decode($siaran['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-4 text-gray-800">Data Penyiar Rapma FM</h1>
                <a href="<?= base_url(); ?>control/jadwalsiar" class="btn btn-dark">Back</a>
                <a href="<?= base_url(); ?>control/penyiar/edit/<?= $siaran['id']; ?>" class="btn btn-primary">Ganti Penyiar</a>
                <br><br>

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
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="cursor-active">Program Siar</th>
                                        <th scope="col" class="cursor-active">Penyiar 1</th>
                                        <th scope="col" class="cursor-active">Penyiar 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?= $data->program; ?></td>
                                        <td><?= $data->penyiar1; ?></td>
                                        <td><?= $data->penyiar2; ?></td>
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