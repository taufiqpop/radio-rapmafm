<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List News -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Daftar News</h1>
            <?php if (in_groups(['Admin', 'Jurnalistik'])) : ?>
                <a href="<?= base_url(); ?>control/news/form" class="btn btn-primary">Add News</a>
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
                                    <th scope="col" class="cursor-active">Judul</th>
                                    <th scope="col" class="cursor-active">Tanggal</th>
                                    <th scope="col" class="cursor-active">Tahun</th>
                                    <th scope="col" class="cursor-active">Penulis</th>
                                    <th scope="col" class="cursor-active">Keterangan</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($news as $index => $berita) : ?>
                                    <?php $data = json_decode($berita['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td style="max-width: 200px;"><?= $data->judul ?></td>
                                        <td><?= $data->hari; ?>, <?= $data->tanggal ?></td>
                                        <td><?= $berita['tahun']; ?></td>
                                        <td><?= $data->penulis ?></td>
                                        <td><?= $data->keterangan ?></td>
                                        <td>
                                            <a href="<?= $data->link; ?>" class="btn btn-success mb-1" target="_blank"><i class="fas fa-link"></i></a>
                                            <?php if (in_groups(['Admin', 'Jurnalistik'])) : ?>
                                                <a href="<?= base_url(); ?>control/news/edit/<?= $berita['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/news/<?= $berita['id']; ?>" method="post" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin ??');"><i class="fas fa-trash"></i></button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('news', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>