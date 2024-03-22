<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Audios -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Audios</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>audios/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Title -->
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Title" name="title" required autofocus>
                    </div>
                </div>

                <!-- Type -->
                <div class="form-group row">
                    <label for="type" class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="ID's | RE | BGS | SPOT | Jingle" name="type" required>
                    </div>
                </div>

                <!-- Tahun -->
                <div class="form-group row">
                    <label for="tahun" class="col-sm-3 col-form-label">Tahun</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" placeholder="2021" name="tahun" required>
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="keterangan" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="status" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/audios" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>