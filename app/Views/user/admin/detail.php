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
                                <?php if ($user['name'] == 'admin') : ?>
                                    <span class="badge badge-danger"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- User -->
                                <?php if ($user['name'] == 'user') : ?>
                                    <span class="badge badge-primary"><?= $user['name']; ?></span>
                                <?php endif; ?>

                                <!-- UNDEFINED -->
                                <?php if ($user['name'] == null) : ?>
                                    <span class="badge badge-dark">none</span>
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
                                        <button type="submit" class="btn btn-danger col-3" onclick="return confirm('Apakah anda yakin?');"><i class="fas fa-trash"></i></button>
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