<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List M-Talent -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data M-Talent</h1>
            <?php if (in_groups(['Admin', 'MOff'])) : ?>
                <a href="<?= base_url(); ?>control/mtalent/form" class="btn btn-primary">Add M-Talent</a>
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
                                    <th scope="col" class="cursor-active" colspan="2">Pelaksanaan</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Jenis</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Instansi</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Acara</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Nama Talent</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Tempat</th>
                                    <th scope="col" class="cursor-active" colspan="2">Fee</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Kontraprestasi</th>
                                    <?php if (in_groups(['Admin', 'MOff'])) : ?>
                                        <th scope="col" class="cursor-stop" rowspan="2" style="padding-bottom: 35px;">Action</th>
                                    <?php endif ?>
                                </tr>
                                <tr>
                                    <th scope="col" class="cursor-active">Mulai</th>
                                    <th scope="col" class="cursor-active">Selesai</th>
                                    <th scope="col" class="cursor-active">Talent</th>
                                    <th scope="col" class="cursor-active">Rapma FM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($mtalent as $index => $talent) : ?>
                                    <?php $data = json_decode($talent['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td style="max-width: 150px;"><?= $data->harimulai; ?><br>(<?= $data->tglmulai; ?>)</td>
                                        <td style="max-width: 150px;"><?= $data->hariselesai; ?><br>(<?= $data->tglselesai; ?>)</td>
                                        <td><?= $data->jenis; ?></td>
                                        <td><?= $data->instansi; ?></td>
                                        <td style="max-width: 150px;"><?= $data->acara; ?></td>
                                        <td><?= $data->talent; ?></td>
                                        <td style="max-width: 150px;"><?= $data->tempat; ?></td>
                                        <td>Rp. <?= $data->feetalent; ?></td>
                                        <td>Rp. <?= $data->feerapma; ?></td>
                                        <td style="max-width: 300px;"><?= $data->kontraprestasi; ?></td>
                                        <?php if (in_groups(['Admin', 'MOff'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/mtalent/edit/<?= $talent['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/mtalent/<?= $talent['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('mtalent', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>