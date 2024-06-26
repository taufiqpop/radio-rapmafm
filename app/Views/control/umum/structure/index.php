<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Structure -->
<div class="container-fluid">
    <div class="row">
        <div class="col-11">
            <h1 class="h3 mb-4 text-gray-800">Structure of Organization</h1>
            <?php if (in_groups(['Admin', 'AOn'])) : ?>
                <a href="<?= base_url(); ?>control/about" class="btn btn-success">About</a>
                <a href="<?= base_url(); ?>control/structure/member" class="btn btn-info">Edit Crew</a>
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
                                    <th scope="col" class="cursor-stop">Photo</th>
                                    <th scope="col" class="cursor-active">Divisi</th>
                                    <th scope="col" class="cursor-active">Tahun</th>
                                    <th scope="col" class="cursor-active">Status</th>
                                    <?php if (in_groups(['Admin', 'AOn'])) : ?>
                                        <th scope="col" class="cursor-stop">Action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($structure as $index => $struktur) : ?>
                                    <?php $data = json_decode($struktur['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td>
                                            <img src="<?= base_url(); ?>img/structure/<?= $data->images ?>" class=" thumbnail">
                                        </td>
                                        <td><?= $data->divisi; ?></td>
                                        <td><?= $data->tahun; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <?php if (in_groups(['Admin', 'AOn'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/structure/edit/<?= $struktur['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagers -->
                        <?= $pager->links('structure', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>