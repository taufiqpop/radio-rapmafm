<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Label Rekaman -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Label Rekaman</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>labelrekaman/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Label -->
                <div class="form-group row">
                    <label for="label" class="col-sm-3 col-form-label">Label</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Label" name="label" required>
                    </div>
                </div>

                <!-- Total Lagu -->
                <div class="form-group row">
                    <label for="total" class="col-sm-3 col-form-label">Total Lagu</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="00" name="total" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/labelrekaman" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>