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

                <!-- Hari -->
                <div class="form-group row">
                    <label for="harimulai" class="col-sm-3 col-form-label">Hari</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Senin" name="harimulai" required autofocus>
                    </div>
                    <label for="hariselesai" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Jum'at" name="hariselesai" required>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="dari" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    <label for="sampai" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="sampai" required>
                    </div>
                </div>

                <!-- Waktu -->
                <div class="form-group row">
                    <label for="mulai" class="col-sm-3 col-form-label">Waktu</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="00:00" name="mulai" required>
                    </div>
                    <label for="selesai" class="col-form-label">-</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="23:59" name="selesai" required>
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

                <!-- Lokasi -->
                <div class="form-group row">
                    <label for="tempat" class="col-sm-3 col-form-label">Lokasi</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Lokasi" name="tempat" required>
                    </div>
                </div>

                <!-- Nama Pemateri -->
                <div class="form-group row">
                    <label for="pemateri" class="col-sm-3 col-form-label">Nama Pemateri</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama Pemateri" name="pemateri" required>
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