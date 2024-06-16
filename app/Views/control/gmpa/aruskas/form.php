<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Arus Kas -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Arus Kas</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>aruskas/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Total -->
                <div class="form-group row">
                    <label for="total" class="col-sm-3 col-form-label">Total (Tanpa Rp.)</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" placeholder="100000" name="total" required>
                    </div>
                </div>

                <!-- Sudah Bayar -->
                <div class="form-group row">
                    <label for="sudahbayar" class="col-sm-3 col-form-label">Sudah Bayar (Tanpa Rp.)</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" placeholder="100000" name="sudahbayar" required>
                    </div>
                </div>

                <!-- Status -->
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-7">
                        <select name="status">
                            <option value="Belum Lunas">Belum Lunas</option>
                            <option value="Sudah Lunas">Sudah Lunas</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/aruskas" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>