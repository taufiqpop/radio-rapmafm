<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Magang Internal -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data Magang Internal</h1>
            <?php if (in_groups(['Admin', 'HRD'])) : ?>
                <a href="<?= base_url(); ?>control/maganginternal/form" class="btn btn-primary">Add Magang Internal</a>
                <br><br>
            <?php endif; ?>

            <!-- Search Bar -->
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

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
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">No</th>
                                    <th scope="col" class="cursor-active" colspan="2">Tanggal</th>
                                    <th scope="col" class="cursor-active" colspan="2">Waktu</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Materi</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Pemateri</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Tempat</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Status</th>
                                    <?php if (in_groups(['Admin', 'HRD'])) : ?>
                                        <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Action</th>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <th scope="col" class="cursor-active">Dari</th>
                                    <th scope="col" class="cursor-active">Sampai</th>
                                    <th scope="col" class="cursor-active">Mulai</th>
                                    <th scope="col" class="cursor-active">Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($maganginternal as $index => $magang) : ?>
                                    <?php $data = json_decode($magang['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->harimulai; ?>,<br><?= $data->dari; ?></td>
                                        <td><?= $data->hariselesai; ?>,<br><?= $data->sampai; ?></td>
                                        <td><?= $data->mulai; ?></td>
                                        <td><?= $data->selesai; ?></td>
                                        <td style="max-width: 200px;"><?= $data->materi; ?></td>
                                        <td style="max-width: 200px;"><?= $data->pemateri; ?></td>
                                        <td style="max-width: 100px;"><?= $data->tempat; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <?php if (in_groups(['Admin', 'HRD'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/maganginternal/edit/<?= $magang['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/maganginternal/<?= $magang['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin ??');"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('maganginternal', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>