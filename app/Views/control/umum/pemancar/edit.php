<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Edit Pemancar -->
<?php foreach ($pemancar as $jangkauan) : ?>
    <?php $data = json_decode($jangkauan['value']) ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <h1 class="h3 mb-4 text-gray-800">Form Edit Data Pemancar</h1>

                <!-- Forms -->
                <form action="<?= base_url(); ?>pemancar/update/<?= $jangkauan['id']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <!-- Daerah -->
                    <div class="form-group row">
                        <label for="daerah" class="col-sm-3 col-form-label">Daerah</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="daerah" value="<?= $data->daerah; ?>" required>
                        </div>
                    </div>

                    <!-- Kondisi Suara -->
                    <div class="form-group row">
                        <label for="kondisi" class="col-sm-3 col-form-label">Kondisi Suara</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kondisi" value="<?= $data->kondisi; ?>" required>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group row">
                        <div class="col-sm-7">
                            <a href="<?= base_url(); ?>control/pemancar" class="btn btn-dark mb-1">Back</a>
                            <button type="submit" class="btn btn-primary mb-1">Confirm Changes</button>
                        </div>
                    </div>
                </form>
                <!-- End Forms -->
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>