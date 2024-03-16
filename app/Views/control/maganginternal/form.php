<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form MagangInternal -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data MagangInternal</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>maganginternal/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="01 Januari 2000" name="tanggal" required autofocus>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="Terlaksana">Terlaksana</option>
                            <option value="Tidak Terlaksana">Tidak Terlaksana</option>
                        </select>
                    </div>
                </div>

                <!-- Waktu -->
                <div class="form-group row">
                    <label for="waktu" class="col-sm-3 col-form-label">Waktu</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="00:00 - 23:59  WIB" name="waktu" required>
                    </div>
                </div>

                <!-- Tempat -->
                <div class="form-group row">
                    <label for="tempat" class="col-sm-3 col-form-label">Tempat</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Tempat" name="tempat" required>
                    </div>
                </div>

                <!-- Pemateri -->
                <div class="form-group row">
                    <label for="pemateri" class="col-sm-3 col-form-label">Pemateri</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Pemateri" name="pemateri" required>
                    </div>
                </div>

                <!-- Materi -->
                <div class="form-group row">
                    <label for="materi" class="col-sm-3 col-form-label">Materi</label>
                    <div class="col-sm-7">
                        <textarea class="tinymce" placeholder="write here.." name="materi"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/maganginternal" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>