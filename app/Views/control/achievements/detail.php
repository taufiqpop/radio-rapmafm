<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Achievements -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Achievements</h1>

    <?php foreach ($achievements as $achievement) : ?>
        <?php $data = json_decode($achievement['value']) ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <!-- Images -->
                            <img src="<?= base_url(); ?>img/achievements/<?= $data->images ?>" class="card-img detail-img img-thumbnail">

                            <center>
                                <!-- Deskripsi Foto -->
                                <p><?= $data->images ?></p>

                                <!-- Button -->
                                <div class=" container tombol-detail">
                                    <a href="<?= base_url(); ?>control/achievements" class="btn btn-dark col-2"><i class="fas fa-arrow-left"></i></a>
                                    <a href="<?= base_url(); ?>control/achievements/edit/<?= $achievement['id']; ?>" class="btn btn-warning col-2"><i class="fas fa-edit"></i></a>
                                    <a href="<?= $data->link; ?>" class="btn btn-success col-2" target="_blank"><i class="fas fa-link"></i></a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/achievements/<?= $achievement['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-2" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <hr>
                                </div>
                            </center>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= $data->judul; ?> (<?= $achievement['tahun']; ?>)</h4>
                                    </li>
                                    <li class="list-group-item">
                                        <p><?= $data->deskripsi ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>