<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Form Program -->
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class="h3 mb-4 text-gray-800">Form Add Data Program</h1>

            <!-- Forms -->
            <form action="<?= base_url(); ?>program/insert" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Nama Program -->
                <div class="form-group row">
                    <label for="program" class="col-sm-2 col-form-label">Nama Program</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Nama Program" name="program" required autofocus>
                    </div>
                </div>

                <!-- Jenis Program -->
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Program</label>
                    <div class="col-sm-10">
                        <select name="jenis">
                            <option value="Regular Program">Regular Program</option>
                            <option value="Special Program">Special Program</option>
                            <option value="Podcast">Podcast</option>
                        </select>
                    </div>
                </div>

                <!-- Filter -->
                <div class="form-group row">
                    <label for="filter" class="col-sm-2 col-form-label">Filter</label>
                    <div class="col-sm-10">
                        <select name="filter">
                            <option value="filter-app">Regular</option>
                            <option value="filter-card">Special</option>
                            <option value="filter-book">Podcast</option>
                        </select>
                    </div>
                </div>

                <!-- Link -->
                <div class="form-group row">
                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Link" name="link" required>
                    </div>
                </div>

                <!-- Images -->
                <div class="form-group row">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-2">
                        <img src="<?= base_url(); ?>img/default.svg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('images')) ? 'is invalid' : ''; ?>" id="imgPasien" name="images" onchange="previewImgPasien()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('images'); ?>
                            </div>
                            <label class="custom-file-label" for="images">Choose Image</label>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="tinymce" placeholder="write here.." name="content"></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="<?= base_url(); ?>control/program" class="btn btn-dark mb-1">Back</a>
                        <button type="submit" class="btn btn-primary mb-1">Publish</button>
                    </div>
                </div>
            </form>
            <!-- End Forms -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>