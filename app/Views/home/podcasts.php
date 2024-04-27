<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Podcast -->
<main id="main">
    <section id="podcast">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Podcast</h2>
            </div>

            <!-- Search Bar -->
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="keyword" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" name="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <div class="row" data-aos="fade-in">
                <?php foreach ($podcast as $index => $podcasts) : ?>
                    <?php $data = json_decode($podcasts['value']) ?>
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/<?= $data->link ?>?utm_source=generator" width="100%" height="250" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                <?php endforeach; ?>
            </div>
            <?= $pager->links('podcast', 'data_pagination'); ?>
    </section>
</main>

<?= $this->endSection(); ?>