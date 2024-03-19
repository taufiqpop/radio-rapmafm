<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Detail News -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Detail News</h1>

    <!-- Card -->
    <?php foreach ($news as $berita) : ?>
        <?php $data = json_decode($berita['value']) ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>img/news/<?= $data->images ?>" class="card-img detail-img img-thumbnail">
                            <center>
                                <div class="container tombol-news">
                                    <a href="<?= base_url(); ?>control/news" class="btn btn-dark col-3"><i class="fas fa-arrow-left"></i></a>
                                    <a href="<?= base_url(); ?>control/news/edit/<?= $berita['id']; ?>" class="btn btn-warning col-3"><i class="fas fa-edit"></i></a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>control/news/<?= $berita['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <hr>
                                </div>
                            </center>
                        </div>

                        <!-- Card Body -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h4><?= $data->judul; ?></h4>
                                    </li>
                                    <li class="list-group-item">
                                        <p><?= $data->konten; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Card Body -->
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>