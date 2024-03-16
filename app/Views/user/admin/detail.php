<?= $this->extend('user/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- User Detail -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">User Details</h1>

    <!-- Card User -->
    <?php foreach ($users as $user) : ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-3" style="max-width: 600px;">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="<?= base_url('/img/user/' . $user['user_image']); ?>" class="card-img user-details" alt="<?= $user['username']; ?>">
                            <div class="role-profile mt-1 mb-2">
                                <!-- Admin -->
                                <?php if ($user['description'] == 'Admin') : ?>
                                    <span class="badge badge-danger"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Crew -->
                                <?php if ($user['description'] == 'Crew') : ?>
                                    <span class="badge badge-dark"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Produksi -->
                                <?php if ($user['description'] == 'Produksi') : ?>
                                    <span class="badge badge-warning"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Jurnalistik -->
                                <?php if ($user['description'] == 'Jurnalistik') : ?>
                                    <span class="badge badge-warning"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Music Director -->
                                <?php if ($user['description'] == 'Music Director') : ?>
                                    <span class="badge badge-warning"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Admisi On Air -->
                                <?php if ($user['description'] == 'Admisi On Air') : ?>
                                    <span class="badge badge-danger"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Admisi Off Air -->
                                <?php if ($user['description'] == 'Admisi Off Air') : ?>
                                    <span class="badge badge-danger"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Teknisi -->
                                <?php if ($user['description'] == 'Teknisi') : ?>
                                    <span class="badge badge-danger"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- HRD -->
                                <?php if ($user['description'] == 'HRD') : ?>
                                    <span class="badge badge-info"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Advokat -->
                                <?php if ($user['description'] == 'Advokat') : ?>
                                    <span class="badge badge-info"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Marketing On Air -->
                                <?php if ($user['description'] == 'Marketing On Air') : ?>
                                    <span class="badge badge-success"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Marketing Off Air -->
                                <?php if ($user['description'] == 'Marketing Off Air') : ?>
                                    <span class="badge badge-success"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Personal Assistant -->
                                <?php if ($user['description'] == 'Personal Assistant') : ?>
                                    <span class="badge badge-primary"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- General Manager -->
                                <?php if ($user['description'] == 'General Manager') : ?>
                                    <span class="badge badge-primary"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Marketing -->
                                <?php if ($user['description'] == 'Manager Marketing') : ?>
                                    <span class="badge badge-success"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Personalia -->
                                <?php if ($user['description'] == 'Manager Personalia') : ?>
                                    <span class="badge badge-info"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Umum -->
                                <?php if ($user['description'] == 'Manager Umum') : ?>
                                    <span class="badge badge-danger"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Kepenyiaran -->
                                <?php if ($user['description'] == 'Manager Kepenyiaran') : ?>
                                    <span class="badge badge-warning"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Demisioner -->
                                <?php if ($user['description'] == 'Demisioner') : ?>
                                    <span class="badge badge-secondary"><?= $user['description']; ?></span>
                                <?php endif; ?>

                                <!-- Alumni -->
                                <?php if ($user['description'] == 'Alumni') : ?>
                                    <span class="badge badge-secondary"><?= $user['description']; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="col-md-7">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <!-- Fullname -->
                                    <?php if ($user['fullname']) : ?>
                                        <li class="list-group-item">
                                            <h2><?= $user['fullname']; ?></h4>
                                        </li>
                                    <?php endif; ?>

                                    <!-- Username -->
                                    <li class="list-group-item">
                                        <b>Username : </b><?= $user['username']; ?>
                                    </li>

                                    <!-- Email -->
                                    <li class="list-group-item">
                                        <b>Email : </b><?= $user['email']; ?>
                                    </li>
                                </ul>
                                <div class="container tombol-detail">
                                    <a href="<?= base_url(); ?>admin" class="btn btn-dark col-3"><i class="fas fa-arrow-left"></i></a>
                                    <a href="<?= base_url('user/edit/' . $user['userid']); ?>" class="btn btn-warning col-3"><i class="fas fa-edit"></i></a>

                                    <!-- Delete -->
                                    <form action="<?= base_url(); ?>admin/<?= $user['userid']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah Anda Yakin ??');"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>