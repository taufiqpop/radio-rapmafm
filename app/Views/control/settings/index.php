<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Settings -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Settings</h1>

            <!-- Messages -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <!-- Forms -->
            <?php foreach ($settings as $setting) : ?>
                <form action="<?= base_url(); ?>settings/update/<?= $setting['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="row card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label for="owner">Owner Website</label>
                                                <input type="text" class="form-control" name="owner" value="<?= $setting['owner']; ?>" required autofocus>
                                            </td>
                                            <td>
                                                <label for="no_mtalent">Slogan</label>
                                                <input type="text" class="form-control" name="slogan" value="<?= $setting['slogan']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="gmail">Gmail</label>
                                                <input type="text" class="form-control" name="gmail" value="<?= $setting['gmail']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="ymail">Ymail</label>
                                                <input type="text" class="form-control" name="ymail" value="<?= $setting['ymail']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="nama_mtalent">M-Talent</label>
                                                <input type="text" class="form-control" name="nama_mtalent" value="<?= $setting['nama_mtalent']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="no_mtalent">Kontak M-Talent</label>
                                                <input type="text" class="form-control" name="no_mtalent" value="<?= $setting['no_mtalent']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="nama_medpart">Media Partner</label>
                                                <input type="text" class="form-control" name="nama_medpart" value="<?= $setting['nama_medpart']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="no_medpart">Kontak Medpart</label>
                                                <input type="text" class="form-control" name="no_medpart" value="<?= $setting['no_medpart']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="twitter">Twitter</label>
                                                <input type="text" class="form-control" name="twitter" value="<?= $setting['twitter']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="facebook">Facebook</label>
                                                <input type="text" class="form-control" name="facebook" value="<?= $setting['facebook']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="instagram">Instagram</label>
                                                <input type="text" class="form-control" name="instagram" value="<?= $setting['instagram']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="youtube">Youtube</label>
                                                <input type="text" class="form-control" name="youtube" value="<?= $setting['youtube']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="spotify">Spotify</label>
                                                <input type="text" class="form-control" name="spotify" value="<?= $setting['spotify']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="whatsapp">Whatsapp</label>
                                                <input type="text" class="form-control" name="whatsapp" value="<?= $setting['whatsapp']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="blogger">Blogger</label>
                                                <input type="text" class="form-control" name="blogger" value="<?= $setting['blogger']; ?>" required>
                                            </td>
                                            <td>
                                                <label for="tiktok">Tiktok</label>
                                                <input type="text" class="form-control" name="tiktok" value="<?= $setting['tiktok']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="line">Line</label>
                                                <input type="text" class="form-control" name="line" value="<?= $setting['line']; ?>" required>
                                            </td>
                                            <td colspan="2">
                                                <label for="streaming">Streaming</label>
                                                <input type="text" class="form-control" name="streaming" value="<?= $setting['streaming']; ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="<?= $setting['alamat']; ?>" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Button -->
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Confirm Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>