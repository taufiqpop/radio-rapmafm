<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- List Denda Adlibs & Spot -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Data Denda Adlibs & Spot</h1>
            <?php if (in_groups(['Admin', 'MM', 'MOn'])) : ?>
                <a href="<?= base_url(); ?>control/dendadlibs/form" class="btn btn-primary">Add Denda</a>
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
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Nama</th>
                                    <th scope="col" class="cursor-active" colspan="3">Nama Adlibs & Spot</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Total</th>
                                    <th scope="col" class="cursor-active" rowspan="2" style="padding-bottom: 35px;">Keterangan</th>
                                    <?php if (in_groups(['Admin', 'MM', 'MOn'])) : ?>
                                        <th scope="col" class="cursor-stop" rowspan="2" style="padding-bottom: 35px;">Action</th>
                                    <?php endif ?>
                                </tr>
                                <tr>
                                    <th scope="col" class="cursor-active">Acara</th>
                                    <th scope="col" class="cursor-active">Program</th>
                                    <th scope="col" class="cursor-active">Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dendadlibs as $index => $denda) : ?>
                                    <?php $data = json_decode($denda['value']) ?>
                                    <tr>
                                        <th scope="row"><?= $index + 1; ?></th>
                                        <td><?= $data->nama; ?></td>
                                        <td><?= $data->acara; ?></td>
                                        <td><?= $data->program; ?></td>
                                        <td><?= $data->tanggal; ?></td>
                                        <td>Rp. <?= $data->total; ?></td>
                                        <td><?= $data->keterangan; ?></td>
                                        <?php if (in_groups(['Admin', 'MM', 'MOn'])) : ?>
                                            <td>
                                                <a href="<?= base_url(); ?>control/dendadlibs/edit/<?= $denda['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                <form action="<?= base_url(); ?>control/dendadlibs/<?= $denda['id']; ?>" method="post" class="d-inline">
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
                        <?= $pager->links('dendadlibs', 'data_pagination'); ?>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>