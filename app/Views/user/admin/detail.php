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
                                <?php if ($user['name'] == 'Admin') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Crew -->
                                <?php if ($user['name'] == 'Crew') : ?>
                                    <span class="badge badge-dark"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Produksi -->
                                <?php if ($user['name'] == 'Produksi') : ?>
                                    <span class="badge badge-warning"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Jurnalistik -->
                                <?php if ($user['name'] == 'Jurnalistik') : ?>
                                    <span class="badge badge-warning"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Music Director -->
                                <?php if ($user['name'] == 'Music Director') : ?>
                                    <span class="badge badge-warning"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Admisi On Air -->
                                <?php if ($user['name'] == 'Admisi On Air') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Admisi Off Air -->
                                <?php if ($user['name'] == 'Admisi Off Air') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Teknisi -->
                                <?php if ($user['name'] == 'Teknisi') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- HRD -->
                                <?php if ($user['name'] == 'HRD') : ?>
                                    <span class="badge badge-info"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Advokat -->
                                <?php if ($user['name'] == 'Advokat') : ?>
                                    <span class="badge badge-info"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Marketing On Air -->
                                <?php if ($user['name'] == 'Marketing On Air') : ?>
                                    <span class="badge badge-success"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Marketing Off Air -->
                                <?php if ($user['name'] == 'Marketing Off Air') : ?>
                                    <span class="badge badge-success"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Personal Assistant -->
                                <?php if ($user['name'] == 'Personal Assistant') : ?>
                                    <span class="badge badge-primary"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- General Manager -->
                                <?php if ($user['name'] == 'General Manager') : ?>
                                    <span class="badge badge-primary"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Marketing -->
                                <?php if ($user['name'] == 'Manager Marketing') : ?>
                                    <span class="badge badge-success"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Personalia -->
                                <?php if ($user['name'] == 'Manager Personalia') : ?>
                                    <span class="badge badge-info"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Umum -->
                                <?php if ($user['name'] == 'Manager Umum') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Manager Kepenyiaran -->
                                <?php if ($user['name'] == 'Manager Kepenyiaran') : ?>
                                    <span class="badge badge-warning"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Demisioner -->
                                <?php if ($user['name'] == 'Demisioner') : ?>
                                    <span class="badge badge-secondary"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- Alumni -->
                                <?php if ($user['name'] == 'Alumni') : ?>
                                    <span class="badge badge-secondary"><?= $user['name']; ?></span>
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