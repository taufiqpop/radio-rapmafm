<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Audios -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data Audio Rapma FM</h1>
            <?php if (in_groups(['Admin', 'Produksi'])) : ?>
                <a href="<?= base_url(); ?>control/audios/form" class="btn btn-primary">Add Data Audio</a>
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
                                    <th scope="col" class="cursor-active">No</th>
                                    <th scope="col" class="cursor-active">Type</th>
                                    <th scope="col" class="cursor-active">Title</th>
                                    <th scope="col" class="cursor-active">Tahun</th>
                                    <th scope="col" class="cursor-active">Keterangan</th>
                                    <th scope="col" class="cursor-active">Status</th>
                                    <?php if (in_groups(['Admin', 'Produksi'])) : ?>
                                        <th scope="col" class="cursor-active">Action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($audios as $index => $audio) : ?>
                                    <?php $data = json_decode($audio['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $audio['type']; ?></td>
                                        <td><?= $data->title; ?></td>
                                        <td><?= $data->tahun; ?></td>
                                        <td><?= $data->keterangan; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <?php if (in_groups(['Admin', 'Produksi'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/audios/edit/<?= $audio['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/audios/<?= $audio['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('audios', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>