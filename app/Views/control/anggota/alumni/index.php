<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Alumni -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data Alumni Rapma FM</h1>
            <a href="<?= base_url(); ?>control/alumni/form" class="btn btn-primary">Add Alumni</a>
            <a href="<?= base_url(); ?>control/pengurus" class="btn btn-dark">Data Pengurus</a>
            <a href="<?= base_url(); ?>control/crew" class="btn btn-dark">Data Crew</a>
            <br><br>

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
                                    <th scope="col" class="cursor-active">No</th>
                                    <th scope="col" class="cursor-active">Nama Lengkap</th>
                                    <th scope="col" class="cursor-active">Nickname</th>
                                    <th scope="col" class="cursor-active">Tahun Kepengurusan</th>
                                    <th scope="col" class="cursor-active">Divisi</th>
                                    <th scope="col" class="cursor-active">Sub Divisi</th>
                                    <th scope="col" class="cursor-active">Jurusan</th>
                                    <th scope="col" class="cursor-active">No HP</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($alumni as $index => $organizer) : ?>
                                    <?php $data = json_decode($organizer['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->nama; ?></td>
                                        <td><?= $data->nickname; ?></td>
                                        <td><?= $organizer['tahun']; ?></td>
                                        <td><?= $data->divisi; ?></td>
                                        <td><?= $data->subdivisi; ?></td>
                                        <td><?= $data->jurusan; ?></td>
                                        <td><?= $data->nohp; ?></td>
                                        <td>
                                            <a href="https://www.instagram.com/<?= $data->instagram; ?>" target="_blank" class="btn btn-primary mb-1"><i class="fab fa-instagram"></i></a>
                                            <a href="<?= base_url(); ?>control/alumni/edit/<?= $organizer['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                            <form action="<?= base_url(); ?>control/alumni/<?= $organizer['id']; ?>" method="post" class="d-inline">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('alumni', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>