<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>minigames/typing/src/style.css">

<!-- Typing Test -->
<main id="main">
  <section id="memorycards">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Mini Games || Typing Test</h2>
      </div>
      <center>
        <div class="wrapper">
          <input type="text" class="input-field">
          <div class="content-box">
            <div class="typing-text">
              <p></p>
            </div>
            <div class="content">
              <ul class="result-details">
                <li class="time">
                  <p>Time Left :</p>
                  <span><b>60</b>s</span>
                </li>
                <li class="mistake">
                  <p>Mistakes :</p>
                  <span>0</span>
                </li>
                <li class="wpm">
                  <p>WPM :</p>
                  <span>0</span>
                </li>
                <li class="cpm">
                  <p>CPM :</p>
                  <span>0</span>
                </li>
              </ul>
              <button>Try Again</button>
            </div>
          </div>
        </div>
      </center>
  </section>
</main>

<!-- JS -->
<script src="<?= base_url(); ?>minigames/typing/src/paragraphs.js"></script>
<script src="<?= base_url(); ?>minigames/typing/src/script.js"></script>

<?= $this->endSection(); ?>