<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Pemancar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Detail Pemancar</h1>

            <?php foreach ($pemancar as $jangkauan) : ?>
                <?php $data = json_decode($jangkauan['value']) ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-3" style="max-width: 1000px;">
                            <!-- Card -->
                            <div class="row no-gutters">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <?php foreach ($pemancar as $jangkauan) : ?>
                                        <?php $data = json_decode($jangkauan['value']) ?>
                                        <thead>
                                            <tr>
                                                <th colspan="4"><?= $jangkauan['key']; ?></th>
                                            </tr>
                                            <tr>
                                                <th scope="col" class="cursor-active">No</th>
                                                <th scope="col" class="cursor-active">Daerah</th>
                                                <th scope="col" class="cursor-active">Kondisi Suara</th>
                                            </tr>
                                        </thead>
                                    <?php endforeach; ?>
                                    <?php foreach ($data as $index => $result) : ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?= $index + 1; ?></th>
                                                <td><?= $result->daerah; ?></td>
                                                <td><?= $result->kondisi; ?></td>
                                            </tr>
                                        </tbody>
                                    <?php endforeach; ?>
                                    <tbody>
                                        <tr>
                                            <td colspan="3">
                                                <a href="<?= base_url(); ?>control/pemancar" class="btn btn-dark mb-1"><i class="fas fa-arrow-left"></i></a>
                                                <?php if (in_groups(['Admin', 'Teknisi'])) : ?>
                                                    <a href="<?= base_url(); ?>control/pemancar/form/<?= $jangkauan['id']; ?>" class="btn btn-primary mb-1"><i class="fas fa-plus"></i></a>
                                                    <a href="<?= base_url(); ?>control/pemancar/edit/<?= $jangkauan['id']; ?>" class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                    <form action="<?= base_url(); ?>control/pemancar/<?= $jangkauan['id']; ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger mb-1" onclick="return confirm('Apakah Anda Yakin ??');"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                <?php endif ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <?php endforeach; ?>
    </div>

    <?= $this->endSection(); ?>