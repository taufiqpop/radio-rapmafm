<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Media Partner -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data Media Partner</h1>
            <?php if (in_groups(['Admin', 'MM', 'MOn'])) : ?>
                <a href="<?= base_url(); ?>control/medpart/form" class="btn btn-primary">Add Media Partner</a>
                <br><br>
            <?php endif; ?>

            <!-- Search Bar -->
            <form action="" method="get">
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
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Tanggal Masuk</th>
                                    <th scope="col" class="cursor-active" colspan="2">Pelaksanaan</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Instansi</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Acara</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Jenis</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Status</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Kontraprestasi</th>
                                    <?php if (in_groups(['Admin', 'MM', 'MOn'])) : ?>
                                        <th scope="col" class="cursor-stop" rowspan="2" style="padding-bottom: 35px;">Action</th>
                                    <?php endif ?>
                                </tr>
                                <tr>
                                    <th scope="col" class="cursor-active">Mulai</th>
                                    <th scope="col" class="cursor-active">Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($medpart as $index => $mediapartner) : ?>
                                    <?php $data = json_decode($mediapartner['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->hari; ?>, <?= $data->tglmasuk; ?></td>
                                        <td><?= $data->harimulai; ?>, <?= $data->tglmulai; ?></td>
                                        <td><?= $data->hariselesai; ?>, <?= $data->tglselesai; ?></td>
                                        <td><?= $data->instansi; ?></td>
                                        <td><?= $data->acara; ?></td>
                                        <td><?= $data->jenis; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <td style="max-width: 300px;"><?= $data->kontraprestasi; ?></td>
                                        <?php if (in_groups(['Admin', 'MM', 'MOn'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/medpart/edit/<?= $mediapartner['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/medpart/<?= $mediapartner['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('medpart', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>