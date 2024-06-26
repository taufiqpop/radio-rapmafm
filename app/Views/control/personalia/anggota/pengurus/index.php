<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Pengurus -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data Pengurus Rapma FM</h1>
            <?php if (in_groups(['Admin', 'GM', 'HRD'])) : ?>
                <a href="<?= base_url(); ?>control/pengurus/form" class="btn btn-primary">Add Pengurus</a>
            <?php endif; ?>
            <a href="<?= base_url(); ?>control/crew" class="btn btn-dark">Data Crew</a>
            <a href="<?= base_url(); ?>control/alumni" class="btn btn-dark">Data Alumni</a>
            <br><br>

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
                                    <th scope="col" class="cursor-active">NIA</th>
                                    <th scope="col" class="cursor-active">Nama Lengkap</th>
                                    <th scope="col" class="cursor-active">Nickname</th>
                                    <th scope="col" class="cursor-active">Divisi</th>
                                    <th scope="col" class="cursor-active">Jurusan</th>
                                    <th scope="col" class="cursor-active">Semester</th>
                                    <th scope="col" class="cursor-active">NIM</th>
                                    <th scope="col" class="cursor-active">Domisili</th>
                                    <th scope="col" class="cursor-active">No HP</th>
                                    <th scope="col" class="cursor-active">Status</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengurus as $index => $organizer) : ?>
                                    <?php $data = json_decode($organizer['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->nia; ?></td>
                                        <td><?= $data->nama; ?></td>
                                        <td><?= $data->nickname; ?></td>
                                        <td><?= $data->divisi; ?><br>(<?= $data->subdivisi; ?>)</td>
                                        <td><?= $data->jurusan; ?></td>
                                        <td><?= $data->semester; ?></td>
                                        <td><?= $data->nim; ?></td>
                                        <td><?= $data->domisili; ?></td>
                                        <td><?= $data->nohp; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <td>
                                            <a href="https://www.instagram.com/<?= $data->instagram; ?>" target="_blank" class="btn btn-primary mb-1"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.x.com/<?= $data->twitter; ?>" target="_blank" class="btn btn-info mb-1"><i class="fab fa-twitter"></i></a>
                                            <?php if (in_groups(['Admin', 'GM', 'HRD'])) : ?>
                                                <br>
                                                <a href="<?= base_url(); ?>control/pengurus/edit/<?= $organizer['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/pengurus/<?= $organizer['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('pengurus', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>