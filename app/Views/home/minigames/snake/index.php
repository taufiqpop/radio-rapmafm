<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>minigames/snake/src/style.css">

<!-- Snake -->
<main id="main">
  <section id="memorycards">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Mini Games || Snake</h2>
      </div>
      <center>
        <div class="wrapper">
          <div class="game-details">
            <span class="score">Score: 0</span>
            <span class="high-score">High Score: 0</span>
          </div>
          <div class="play-board"></div>
          <div class="controls">
            <i data-key="ArrowLeft" class="fa-solid fa-arrow-left-long"></i>
            <i data-key="ArrowUp" class="fa-solid fa-arrow-up-long"></i>
            <i data-key="ArrowRight" class="fa-solid fa-arrow-right-long"></i>
            <i data-key="ArrowDown" class="fa-solid fa-arrow-down-long"></i>
          </div>
        </div>
        <div class="mt-4">
          <a href="<?= base_url(); ?>index#minigames" class="btn btn-dark">&larr; Back</a>
        </div>
      </center>
  </section>
</main>

<!-- JS -->
<script src="<?= base_url(); ?>minigames/snake/src/script.js"></script>
<?= $this->endSection(); ?>