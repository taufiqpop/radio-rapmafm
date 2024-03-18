<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Peminjaman -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Peminjaman</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>peminjaman/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Peminjam -->
                <div class="form-group row">
                    <label for="peminjam" class="col-sm-3 col-form-label">Peminjam</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Peminjam" name="peminjam" required autofocus>
                    </div>
                </div>

                <!-- Tanggal Dipinjam -->
                <div class="form-group row">
                    <label for="tanggalpinjam" class="col-sm-3 col-form-label">Tanggal Dipinjam</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" name="tanggalpinjam" required>
                    </div>
                </div>

                <!-- Tanggal Kembali -->
                <div class="form-group row">
                    <label for="tanggalkembali" class="col-sm-3 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="tanggalkembali" required>
                    </div>
                </div>

                <!-- Barang -->
                <div class="form-group row">
                    <label for="barang" class="col-sm-3 col-form-label">Barang</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="Nama Barang" name="barang" required>
                    </div>
                </div>

                <!-- Pendapatan -->
                <div class="form-group row">
                    <label for="pendapatan" class="col-sm-3 col-form-label">Pendapatan (Tanpa Rp.)</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="50.000" name="pendapatan" required>
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" placeholder="-" name="keterangan" required>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-7">
                        <a href="<?= base_url(); ?>control/peminjaman" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>