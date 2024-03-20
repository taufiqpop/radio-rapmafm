<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Tanggal -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Data Pemancar</h1>

            <!-- Forms -->
            <?php if (in_groups(['Admin', 'MU', 'Teknisi'])) : ?>
                <form action="<?= base_url(); ?>pemancar/add" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Tanggal -->
                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <button type="submit" class="btn btn-primary mb-1">Add Tanggal</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>
            <!-- End Forms -->
        </div>
    </div>
</div>

<!-- List Pemancar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-11">

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
                                    <th scope="col" class="cursor-active">Tanggal</th>
                                    <th scope="col" class="cursor-stop">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pemancar as $index => $jangkauan) : ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $jangkauan['key']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>control/pemancar/detail/<?= $jangkauan['id']; ?>" class="btn btn-info mb-1"><i class="fas fa-info"></i></a>
                                            <?php if (in_groups(['Admin', 'MU', 'Teknisi'])) : ?>
                                                <a href="<?= base_url(); ?>control/pemancar/form/<?= $jangkauan['id']; ?>" class="btn btn-primary mb-1"><i class="fas fa-plus"></i></a>
                                                <a href="<?= base_url(); ?>control/pemancar/edit/<?= $jangkauan['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/pemancar/<?= $jangkauan['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('pemancar', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>