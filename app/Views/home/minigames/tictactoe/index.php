<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>minigames/tictactoe/src/style.css">

<!-- Podcast -->
<main id="main">
  <section id="tictactoe">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">Mini Games || Tic Tac Toe</h2>
      </div>
      <strong>
        <p id="print"></p>
      </strong>
      <br>
      <p id="ins">
        Game Dimulai Jika Kamu Klik Dalam Kotak Permainan
        <br>
        - Pemain 1 = <b>Player X</b>
        <br>
        - Pemain 2 = <b>Player O</b>
      </p>
      <br><br>
      <div class="ui">
        <div class="row">
          <input type="text" id="b1" class="cell" onclick="myfunc_3(); myfunc();" readonly>
          <input type="text" id="b2" class="cell" onclick="myfunc_4(); myfunc();" readonly>
          <input type="text" id="b3" class="cell" onclick="myfunc_5(); myfunc();" readonly>
        </div>
        <div class="row">
          <input type="text" id="b4" class="cell" onclick="myfunc_6(); myfunc();" readonly>
          <input type="text" id="b5" class="cell" onclick="myfunc_7(); myfunc();" readonly>
          <input type="text" id="b6" class="cell" onclick="myfunc_8(); myfunc();" readonly>
        </div>
        <div class="row">
          <input type="text" id="b7" class="cell" onclick="myfunc_9(); myfunc();" readonly>
          <input type="text" id="b8" class="cell" onclick="myfunc_10();myfunc();" readonly>
          <input type="text" id="b9" class="cell" onclick="myfunc_11();myfunc();" readonly>
        </div>
      </div>
      <br><br>

      <button id="but" onclick="myfunc_2()">RESET</button>
      <br><br>
      <a href="<?= base_url(); ?>index#minigames" class="btn btn-dark">&larr; Back</a>

      <br><br><br>
    </div>
  </section>
</main>

<!-- JS -->
<script src="<?= base_url(); ?>minigames/tictactoe/src/script.js"></script>

<?= $this->endSection(); ?>