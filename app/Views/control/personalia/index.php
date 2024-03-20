<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Timeline Divisi Personalia -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Timeline Divisi Personalia</h1>
            <?php if (in_groups(['Admin', 'MP'])) : ?>
                <a href="<?= base_url(); ?>control/personalia/form" class="btn btn-primary">Add Timeline</a>
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
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Sub Divisi</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Proker</th>
                                    <th scope="col" class="cursor-active" colspan="2">Pelaksanaan</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Kendala</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Status</th>
                                    <?php if (in_groups(['Admin', 'MP'])) : ?>
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
                                <?php foreach ($personalia as $index => $timeline) : ?>
                                    <?php $data = json_decode($timeline['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->darihari; ?><br>(<?= $data->daritgl; ?>)</td>
                                        <td><?= $data->sampaihari; ?><br>(<?= $data->sampaitgl; ?>)</td>
                                        <td><?= $data->subdivisi; ?></td>
                                        <td><?= $data->proker; ?></td>
                                        <td><?= $data->mulaihari; ?>
                                            <?php if ($data->mulaihari != '-') : ?>
                                                <br>(<?= $data->mulaitgl; ?>)
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $data->selesaihari; ?>
                                            <?php if ($data->selesaihari != '-') : ?>
                                                <br>(<?= $data->selesaitgl; ?>)
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $data->kendala; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <?php if (in_groups(['Admin', 'MP'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/personalia/edit/<?= $timeline['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/personalia/<?= $timeline['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('personalia', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>