<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Podcast -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Daftar Podcast</h1>
            <?php if (in_groups(['Admin', 'Produksi'])) : ?>
                <a href="<?= base_url(); ?>control/podcast/form" class="btn btn-primary">Add Podcast</a>
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
                                    <th scope="col" class="cursor-active">Program</th>
                                    <th scope="col" class="cursor-active">Judul</th>
                                    <th scope="col" class="cursor-active">Tanggal Rilis</th>
                                    <th scope="col" class="cursor-active">Tahun</th>
                                    <th scope="col" class="cursor-active">Talent</th>
                                    <th scope="col" class="cursor-active">Narasumber</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($podcast as $index => $podcasts) : ?>
                                    <?php $data = json_decode($podcasts['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td>[<?= $podcasts['program']; ?>]</td>
                                        <td style="max-width: 250px;"><?= $data->judul ?></td>
                                        <td><?= $data->hari; ?>, <?= $data->tanggal; ?></td>
                                        <td><?= $podcasts['tahun']; ?></td>
                                        <td><?= $data->talent ?></td>
                                        <td><?= $data->narasumber ?></td>
                                        <td>
                                            <a href="https://open.spotify.com/episode/<?= $data->link ?>" class="btn btn-success mb-1" target="_blank"><i class="fas fa-link"></i></a>
                                            <?php if (in_groups(['Admin', 'Produksi'])) : ?>
                                                <a href="<?= base_url(); ?>control/podcast/edit/<?= $podcasts['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/podcast/<?= $podcasts['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('podcast', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>