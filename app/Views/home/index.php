<?= $this->extend('home/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Home -->
<?php foreach ($settings as $setting) : ?>
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container">

      <!-- Nama Website -->
      <h1><?= $setting['owner']; ?></h1>
    </div>

    <!-- Slogan -->
    <div class="hero-container">
      <h6><span class="typed" data-typed-items="<?= $setting['slogan']; ?>"></span></h6>
    </div>

    <!-- Social Media -->
    <div class="social-links">
      <div class="d-flex flex-column">
        <div class="profile">

          <!-- Penyiar -->
          <?php foreach ($penyiar as $siar) : ?>
            <?php $data = json_decode($siar['value']) ?>
            <center>
              <div class="my-3" style="color: yellow;">
                <span>
                  <marquee behavior="scroll" direction="left" scrolldelay="50" truespeed>
                    <h5>
                      <?= $data->program; ?> ||
                      <?= $data->penyiar1; ?>
                      <?php if ($data->penyiar2 != '-') : ?>
                        X <?= $data->penyiar2; ?>
                      <?php endif; ?>
                    </h5>
                  </marquee>
                </span>
              </div>
            </center>
          <?php endforeach; ?>

          <!-- Clock -->
          <center>
            <div style="color: green;" data-aos="fade-in">
              <span>
                <strong>
                  <?php
                  // Time Zone
                  date_default_timezone_set('Asia/Jakarta');
                  $hariIni = new DateTime();
                  echo $hariIni->format('l, d F Y')
                  ?>
                  <br>
                  (<span id="jam"></span>
                  <?= $hariIni->format('A') ?>)
                </strong>
              </span>
            </div>
          </center>

          <!-- Sosmed Button -->
          <div class="social-links mt-3 text-center" data-aos="fade-up">
            <a href="<?= $setting['twitter']; ?>" target="_blank" title="Twitter">
              <i class="bx bxl-twitter"></i></a>
            <a href="<?= $setting['facebook']; ?>" target="_blank" title="Facebook">
              <i class="bx bxl-facebook"></i></a>
            <a href="<?= $setting['instagram']; ?>" target="_blank" title="Instagram">
              <i class="bx bxl-instagram"></i></a>
            <a href="<?= $setting['youtube']; ?>" target="_blank" title="Youtube">
              <i class="bx bxl-youtube"></i></a>
            <a href="<?= $setting['spotify']; ?>" target="_blank" title="Spotify">
              <i class="bx bxl-spotify"></i></a>
            <a href="<?= $setting['whatsapp']; ?>" target="_blank" title="Whatsapp">
              <i class="bx bxl-whatsapp"></i></a>
            <a href="<?= $setting['blogger']; ?>" target="_blank" title="Blog">
              <i class="bx bxl-blogger"></i></a>
            <a href="<?= $setting['tiktok']; ?>" target="_blank" title="TikTok">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="17px" preserveAspectRatio="xMidYMid meet" viewBox="-1 1 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                  <path fill="#fff" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07z" />
                  <rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" />
                </svg>
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Message -->
    <center>
      <br>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan') ?>
        </div>
      <?php endif; ?>
    </center>
  </section>

  <main id="main">
    <!-- About -->
    <section id="about" class="section-bg">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">About</h2>
          <?php foreach ($about as $tentang) : ?>
            <?php $data = json_decode($tentang['value']) ?>
            <p class="text-justify" style="text-indent: 40px;"><?= $data->deskripsi; ?></p>
            <br>
            <center>
              <a href="<?= $data->link; ?>" target="_blank" class="btn btn-success">Read More..</a>
            </center>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Structure of Organization -->
    <section id="structure" class="portfolio-details-slider">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Structure of Organization</h2>
        </div>
        <div class="row">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php foreach ($structure as $struktur) : ?>
                <?php $data = json_decode($struktur['value']) ?>
                <li data-target="#carousel" data-slide-to="<?= $struktur['id'] - 1; ?>" class="<?= $data->status; ?>"></li>
              <?php endforeach; ?>
            </ol>
            <div class="carousel-inner">
              <?php foreach ($structure as $struktur) : ?>
                <?php $data = json_decode($struktur['value']) ?>
                <div class="carousel-item <?= $data->status; ?>">
                  <img src="<?= base_url(); ?>img/structure/<?= $data->images; ?>" class="img-fluid" alt="<?= $data->divisi; ?>" data-aos="fade-up" width="100%">
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Previous -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <!-- Next -->
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- Crew -->
        <div class="row mt-3">
          <div class="col section-bottom-button" data-aos="fade-up">
            <?php foreach ($member as $members) : ?>
              <?php $data = json_decode($members['value']) ?>
              <img src="<?= base_url(); ?>img/structure/<?= $data->images; ?>" class="img-fluid" alt="<?= $data->divisi; ?>">
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section>

    <!-- Program -->
    <section id="program" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Program</h2>
          <h6 class="text-center" style="color: #008C52;">Broadcast & Podcast</h6>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active" title="All Program">All</li>
              <li data-filter=".filter-special" title="Special Program">Special</li>
              <li data-filter=".filter-regular" title="Regular Program">Regular</li>
              <li data-filter=".filter-podcast" title="Podcast">Podcast</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php foreach ($program as $siaran) : ?>
            <?php $data = json_decode($siaran['value']) ?>
            <div class="col-lg-4 col-md-6 portfolio-item <?= $data->filter; ?>">
              <div class="portfolio-wrap">
                <img src="<?= base_url(); ?>img/program/<?= $data->images; ?>" class="img-fluid" alt="<?= $data->program; ?>">
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>img/program/<?= $data->images; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                  <a href="<?= $data->link; ?>" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Mini Games -->
    <section id="minigames">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Mini Games</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <?php foreach ($minigames as $index => $games) : ?>
            <?php $data = json_decode($games['value']) ?>
            <div class="col-md-3">
              <a href="<?= base_url(); ?>games/<?= $data->link; ?>">
                <div class="card bg-dark text-white minigames">
                  <img class="card-img img-fluid" src="<?= base_url(); ?>img/minigames/<?= $data->images; ?>">
                  <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.5)">
                      <marquee behavior="alternate" direction="left" scrolldelay="50" truespeed>
                        <strong><?= $data->nama; ?></strong>
                      </marquee>
                    </h5>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Top Chart -->
    <section id="chart" class="section-bg">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Rapma Top 15</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <?php foreach ($topchart as $top15) : ?>
            <?php $data = json_decode($top15['value']) ?>
            <div class="col-lg-6 d-flex align-items-stretch mb-4">
              <div class="row">
                <h2 class="text-center" style="color: #008C52;">Top 15 Versi <?= $data->versi; ?></h2>
                <iframe src="<?= $data->link; ?>" width="100%" height="500px"></iframe>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
    </section>

    <!-- Events -->
    <section id="events">
      <div class="container">
        <div class="row g-4 g-md-6">
          <div class="section-title">
            <h2 class="text-center">Events</h2>
          </div>
          <?php foreach ($events as $event) : ?>
            <?php $data = json_decode($event['value']) ?>
            <div class="col-6 col-md-6" data-aos="fade-up">
              <div class="card-body">
                <center>
                  <h2 class="card-title"><b><?= $data->nama; ?></b></h2>
                </center>
                <center class="eventrapma">
                  <img class="card-img-top" src="<?= base_url(); ?>img/events/<?= $data->images; ?>" style="width:100%">
                </center>
                <div class="card-body">
                  <center>
                    <a href="<?= $data->link; ?>" target="_blank" class="btn btn-success">See Event</a>
                  </center>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Achievements -->
    <section id="achievements" class="section-bg">
      <div class="container">
        <div class="row g-2 g-lg-4">
          <div class="section-title">
            <h2 class="text-center">Achievements</h2>
          </div>
          <?php foreach ($achievements as $achievement) : ?>
            <?php $data = json_decode($achievement['value']) ?>
            <div class="col-12 col-lg-4" data-aos="fade-up">
              <div class="card">
                <center>
                  <h5 class="card-title p-2"><?= $data->judul; ?> <br>(<?= $achievement['tahun']; ?>)</h5>
                  <div class="achievementrapma">
                    <img class="card-img-top px-3" src="<?= base_url(); ?>img/achievements/<?= $data->images ?>">
                  </div>
                  <div class="card-body">
                    <a href="https://www.instagram.com/p/BwyOA9ehluQ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
                  </div>
                </center>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Rapma News -->
    <section id="news">
      <div class="container">
        <div class="row g-2 g-lg-4">
          <div class="section-title">
            <h2 class="text-center">Rapma News</h2>
          </div>
          <?php foreach ($beritaweb as $index => $berita) : ?>
            <?php $data = json_decode($berita['value']) ?>
            <div class="col-12 col-lg-4" data-aos="fade-up">
              <div class="card" style="min-height: 700px;">
                <div class="rapmanews">
                  <img class="card-img-top img-fluid p-2 mh-300" src="<?= base_url(); ?>img/beritaweb/<?= $data->images; ?>">
                </div>
                <small style="color:slategray;" class="text-center">(<?= $data->hari; ?>, <?= $data->tanggal; ?>)</small>
                <div class="card-body text-center">
                  <a href="<?= $data->link; ?>" target="_blank">
                    <h5 class="card-title" style="color: black;"><?= $data->judul; ?></h5>
                  </a>
                  <p class="card-text text-justify pt-1"><?= $data->deskripsi; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center">Contact</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">
              <div class="email">
                <i class="bi bi-envelope" title="Email"></i>
                <h4>Email</h4>
                <p>
                  <?= $setting['gmail']; ?>
                  <br>
                  <?= $setting['ymail']; ?> (Music Director)
                </p>
              </div>
              <div class="phone">
                <i class="bi bi-phone" title="Whatsapp"></i>
                <h4>Whatsapp</h4>
                <p>
                  <a href="https://wa.me/+62<?= $setting['no_medpart']; ?>" target="_blank" style="color: #008C52;"><?= $setting['nama_medpart']; ?> : 0<?= $setting['no_medpart']; ?> (MedPart)</a><br>
                  <a href="https://wa.me/+62<?= $setting['no_mtalent']; ?>" target="_blank" style="color: #008C52;"><?= $setting['nama_mtalent']; ?> : 0<?= $setting['no_mtalent']; ?> (MC/M-Talent)</a><br>
                </p>
              </div>
              <div class="address">
                <i class="bi bi-geo-alt" title="Location"></i>
                <h4>Location</h4>
                <p class="text-justify"><?= $setting['alamat']; ?></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1722825033103!2d110.76873700406814!3d-7.556185825852349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a145b44ab2e7b%3A0x907e13e28374d39b!2sRapma+FM!5e0!3m2!1sid!2sid!4v1547644067180" width="100%" height="100%"></iframe>
              </div>
            </div>
          </div>

          <!-- Forms -->
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contact/insert" method="post" enctype="multipart/form-data" class="php-email-form">

              <!-- Messages -->
              <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getFlashdata('pesan') ?>
                </div>
              <?php endif; ?>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control rounded-3" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control rounded-3" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control rounded-3" name="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control rounded-3" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
              </div>
              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php endforeach ?>

<?= $this->endSection(); ?>