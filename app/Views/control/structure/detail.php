<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail Structure -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail Structure</h1>

    <?php foreach ($structure as $struktur) : ?>
        <?php $data = json_decode($struktur['value']) ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 1000px;">
                    <!-- Card -->
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <!-- Images -->
                            <img src="<?= base_url(); ?>img/structure/<?= $data->images ?>" class="card-img detail-img img-thumbnail">

                            <center>
                                <!-- Deskripsi Foto -->
                                <p><?= $data->images ?></p>

                                <!-- Button -->
                                <div class=" container tombol-detail">
                                    <a href="<?= base_url(); ?>control/structure" class="btn btn-dark col-2"><i class="fas fa-arrow-left"></i></a>
                                    <a href="<?= base_url(); ?>control/structure/edit/<?= $struktur['id']; ?>" class="btn btn-warning col-2"><i class="fas fa-edit"></i></a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/structure/<?= $struktur['id']; ?>" method="post" class="d-inline">
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
                                        <h4><?= $data->divisi; ?></h4>
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