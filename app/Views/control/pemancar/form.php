<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Pemancar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Pemancar</h1>

            <!-- Forms -->
            <?php foreach ($pemancar as $jangkauan) : ?>
                <form action="<?= base_url(); ?>pemancar/insert/<?= $jangkauan['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Daerah -->
                    <div class="form-group row">
                        <label for="daerah" class="col-sm-2 col-form-label">Daerah</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Daerah" name="daerah" required autofocus>
                        </div>
                    </div>

                    <!-- Kondisi -->
                    <div class="form-group row">
                        <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="Jernih / Kurang Jernih / Hilang" name="kondisi" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/pemancar/detail/<?= $jangkauan['id']; ?>" class="btn btn-dark mb-1"><i class="fas fa-arrow-left"></i></a>
                            <button type="submit" class="btn btn-primary mb-1"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>