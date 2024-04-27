<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>minigames/memorycards/src/style.css">

<!-- Memory Cards -->
<main id="main">
  <section id="memorycards">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Mini Games || Memory Cards</h2>
      </div>
      <center>
        <div class="wrappers col-md-4">
          <ul class="kartus">
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-1.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-2.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-3.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-4.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-5.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-6.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-5.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-6.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-1.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-2.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-3.png" alt="kartu-img">
              </div>
            </li>
            <li class="kartu">
              <div class="pov pov-front">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/que_icon.svg" alt="icon">
              </div>
              <div class="pov pov-back">
                <img src="<?= base_url(); ?>minigames/memorycards/src/images/img-4.png" alt="kartu-img">
              </div>
            </li>
            <div class="rincian">
              <p class="time">Time : <span><b>60</b>s |</span></p>
              <p class="flips">Flips : <span><b>0</b> |</span></p>
              <button>Refresh</button>
            </div>
          </ul>
          <a href="<?= base_url(); ?>index#minigames" class="btn btn-dark">&larr; Back</a>
        </div>
      </center>
    </div>
    <br><br><br>
    <br><br><br>
  </section>
</main>

<!-- JS -->
<script src="<?= base_url(); ?>minigames/memorycards/src/script.js"></script>

<?= $this->endSection(); ?>