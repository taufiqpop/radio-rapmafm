<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Denda Adlibs & Spot -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Denda Adlibs & Spot</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>dendadlibs/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" required autofocus>
                    </div>
                </div>

                <!-- Acara -->
                <div class="form-group row">
                    <label for="acara" class="col-sm-3 col-form-label">Acara</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Acara" name="acara" required>
                    </div>
                </div>

                <!-- Program -->
                <div class="form-group row">
                    <label for="program" class="col-sm-3 col-form-label">Program Siar</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Program Siar" name="program" required>
                    </div>
                </div>

                <!-- Tanggal -->
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>

                <!-- Total -->
                <div class="form-group row">
                    <label for="total" class="col-sm-3 col-form-label">Total (Tanpa Rp.)</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="4.000" name="total" required>
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <select name="keterangan">
                            <option value="LUNAS">LUNAS</option>
                            <option value="BELUM LUNAS">BELUM LUNAS</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/dendadlibs" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>