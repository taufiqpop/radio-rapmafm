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
          <div class="social-links mt-3 text-center">
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
            <br>
            <a href="<?= $setting['line']; ?>" target="_blank" class="line" title="Line">
              <i><img src="<?= base_url(); ?>img/home/Line.svg" height="20px" weight="20px"></i></a>
            <a href="<?= $setting['tiktok']; ?>" target="_blank" class="tiktok" title="TikTok">
              <i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);">
                  <path fill="#fff" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07z" />
                  <rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" />
                </svg></i></a>
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
    <section id="about" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2 style="text-align: center;">About</h2>
          <p style="text-align: justify; text-indent: 60px;">
            RAPMA FM sebagai Radio komunitas kampus dan satu-satunya media elektronik yang dimiliki oleh
            Universitas Muhammadiyah Surakarta mempunyai peranan sebagai media informasi, hiburan, dan
            dakwah dengan istilah yang dipakai untuk aplikasi siar yaitu smart, fun, and pure dengan
            slogan “The First Edutainment Channel In Solo”. RAPMA FM sendiri sebagai salah satu UKM
            memberikan kontribusi untuk Universitas Muhammadiyah Surakarta dan telah diberikan kepercayaan
            untuk mempublikasikan dan menginformasikan tentang segala hal mengenai seputaran dunia kampus
            dan hasil-hasil kampus Universitas Muhammadiyah Surakarta kepada mahasiswa, masyarakat luar
            ataupun khalayak ramai.
            <br><br>
            <center>
              <a href="http://rapmafm.ukm.ums.ac.id/p/about-us.html" target="_blank" class="btn btn-success">Read More</a>
            </center>
        </div>
      </div>
    </section>

    <!-- Structure of Organization -->
    <section id="structure" class="portfolio-details-slider">
      <div class="container">
        <div class="section-title">
          <h2 style="text-align: center;">Structure of Organization</h2>
        </div>
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url(); ?>img/GMPA.png" class="img-fluid" alt="GMPA" data-aos="fade-up">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url(); ?>img/Umum.png" class="img-fluid" alt="Divisi Umum" data-aos="fade-up">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url(); ?>img/Kepenyiaran.png" class="img-fluid" alt="Divisi Kepenyiaran" data-aos="fade-up">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url(); ?>img/Marketing.png" class="img-fluid" alt="Divisi Marketing" data-aos="fade-up">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url(); ?>img/Personalia.png" class="img-fluid" alt="Divisi Personalia" data-aos="fade-up">
              </div>
            </div>

            <!-- Previous -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <!-- Next -->
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <br>

        <!-- Crew -->
        <div class="row">
          <div class="col section-bottom-button" data-aos="fade-up">
            <img src="<?= base_url(); ?>img/Crew.png" class="img-fluid" alt="Crew">
          </div>
        </div>
      </div>
    </section>

    <!-- Program -->
    <section id="program" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2 style="text-align: center;">Program</h2>
          <h6 style="text-align: center; color: #008C52;">Broadcast & Podcast</h6>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active" title="All Program">All</li>
              <li data-filter=".filter-app" title="Regular Program">Regular Program</li>
              <li data-filter=".filter-card" title="Special Program">Special Program</li>
            </ul>
          </div>
        </div>
        <!-- Regular Program -->
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/BasoSapi.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/BasoSapi.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/0H0UTyvK4su14jJVDcfk2X?si=0e221fd2423c4e70" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/11N1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/11N1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/2xZvhNVfFhs729lHLLKEbs?si=70f8296146fb44e0" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/Rapmanesia.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/Rapmanesia.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/7rl9eIYGm9jOpvPd21PobJ?si=a2ffbdd78c874a9e" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/TGV.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/TGV.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/0wJCTRfCwIqT7RBrAENsux?si=d5982fb80c624fbf" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/THR.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/THR.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://www.instagram.com/p/CNo82DepmKo/?igshid=lr40gy7v92is" target="_blank"><i class="bx bxl-instagram" title="Open Instagram"></i></a>
              </div>
            </div>
          </div> -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/KhasanahPetang.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/KhasanahPetang.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/2OpCjIc6YBl883Aw3qJ1bQ?si=zW2mHW2VToeFD_1M_5L7jg" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/MusicBox.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/MusicBox.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/7DvP3sMJa5LpgLSfkAR2mm?si=3a09928028b94df3" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/Afterday.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/Afterday.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/3ED6VNFrqqjrAJd2TdQDso?si=Oq_TJuU3SKWsPObAYSO1BQ" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/TOP15.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/TOP15.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/3SzzwZRfHLyEJFSdhM9gVW?si=b0ce528bac70443d" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/Rapmatalks.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/Rapmatalks.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/0GTBdHxXfaJxVA2mxsegxQ?si=fca30f035610492d" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>

          <!-- Special Program -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/MovieScreen.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/MovieScreen.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/0c3UrX8b5sVauco3iEXYNA?si=fa275c68c3834fd9" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/KingNQueen.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/KingNQueen.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/3UQz9EO6DUvuurHthAvlkI?si=9c9273e359c54c02" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/Indiezone.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/Indiezone.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/1yxOYXK1bMWIs3tkpSUOIc?si=ca8a3dbee2454a7e" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/Teksas.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/Teksas.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/6eSgHfMK6972yDe9Ch2o8F?si=800d1f78b93d4425" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/Merinding.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/Merinding.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/1T4gXy589d4nDZ820F0W2q?si=b43b7113efea4f2b" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/K-Arena.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/K-Arena.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/1dAcappKAmIOxcbZMjyHG9?si=fa7a3c9fab694581" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/SudutKampus.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/SudutKampus.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/5JCrqf2RRplT0WexV3UqOP?si=980ed3002a6e4946" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/NoSatnight.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/NoSatnight.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/2mru4VWHqOk0g702FerJDl?si=1ab330e8de2d41f9" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>img/ClassicNight.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?= base_url(); ?>img/ClassicNight.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-zoom-in" title="Zoom In"></i></a>
                <a href="https://open.spotify.com/episode/55unnCEFHtseDyaKI9REcs?si=70cf567daa564741" target="_blank"><i class="bx bxl-spotify" title="Open Spotify"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Top Chart -->
    <section id="chart">
      <div class="container">
        <div class="section-title">
          <h2 style="text-align: center;">Rapma Top 15</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
              <h2 style="text-align: center; color: #008C52;">Top 15 Versi Indonesia</h2>
              <iframe src="https://open.spotify.com/embed/playlist/0rj1HLftduTk5t2OC6t0XD?si=GgqgR4zfSZGfZj3mnjEd3g" width="100%" height="500" frameborder="0"></iframe>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
              <h2 style="text-align: center; color: #008C52;">Top 15 Versi Manca</h2>
              <iframe src="https://open.spotify.com/embed/playlist/48GHvGhwDZFBL6X88c20Zd?si=IX3o5iOWTiOxA3xqw8lYGg" width="100%" height="500" frameborder="0"></iframe>
            </div>
          </div>
        </div>
    </section>

    <!-- Event -->
    <section id="event" class="portfolio section-bg">
      <div class="row g-4 g-md-6">
        <div class="section-title">
          <h2 style="text-align: center;">Event</h2>
        </div>
        <div class="col-6 col-md-6">
          <div class="card-body">
            <center>
              <h2 class="card-title"><b>RAPMADAY #7</b></h2>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Rapmaday7.png" style="width:100%">
            </center>
            <div class="card-body">
              <center>
                <a href="#" target="_blank" class="btn btn-dark disabled">See Event</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-6">
          <div class="card-body">
            <center>
              <h2 class="card-title"><b>RAPMAFEST #8</b></h2>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Rapmafest8.png" style="width:100%">
            </center>
            <div class="card-body">
              <center>
                <a href="tiket-rapmafest.html" target="_blank" class="btn btn-success">See Event</a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Achievement -->
    <section id="achievement">
      <div class="row g-2 g-md-4">
        <div class="section-title">
          <h2 style="text-align: center;">Achievement</h2>
        </div>
        <div class="col-6 col-md-4">
          <div class="card">
            <br>
            <center>
              <h4 class="card-title">Juara 1 Lomba Siar<br>UNYFEST#7 2019<br></h4>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Lomba 2019.jpg" style="width:75%">
            </center>
            <div class="card-body">
              <center>
                <a href="https://www.instagram.com/p/BwyOA9ehluQ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card">
            <br>
            <center>
              <h4 class="card-title">Juara 2 & 3 Lomba Siar<br>DISTAFEST 2020<br></h4>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Lomba 2020.jpg" style="width:75%">
            </center>
            <div class="card-body">
              <center>
                <a href="https://www.instagram.com/p/B2N2MLPBCce/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card">
            <br>
            <center>
              <h4 class="card-title">Juara 3 Lomba<br>Metta Got Talent 2021<br></h4>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Lomba 2021-1.jpg" style="width:75%">
            </center>
            <div class="card-body">
              <center>
                <a href="https://www.instagram.com/p/COFoXvQpqWi/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card">
            <br>
            <center>
              <h4 class="card-title">Juara 2 Lomba Siar<br>Galaksiar 2021<br></h4>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Lomba 2021-2.jpg" style="width:75%">
            </center>
            <div class="card-body">
              <center>
                <a href="https://www.instagram.com/p/CPNZVp_pxEZ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
              </center>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <!-- Blank -->
        </div>
        <div class="col-6 col-md-4">
          <div class="card">
            <br>
            <center>
              <h4 class="card-title">Juara Harapan Lomba Siar<br>Galaksiar 2021<br></h4>
            </center>
            <center>
              <img class="card-img-top" src="<?= base_url(); ?>img/Lomba 2021-3.jpg" style="width:75%">
            </center>
            <div class="card-body">
              <center>
                <a href="https://www.instagram.com/p/CPNZVp_pxEZ/?utm_source=ig_web_copy_link" target="_blank" class="btn btn-success">See Details</a>
              </center>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Rapma News -->
    <section id="news" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2 style="text-align: center;">Rapma News</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
              <a href="http://rapmafm.ukm.ums.ac.id/2021/10/keseruan-rapmafest-8-nostalgic-future.html" target="_blank">
                <h4 style="text-align: center; color: black">KESERUAN RAPMAFEST #8<br>"NOSTALGIC FUTURE TO CREATE MIRACLE"</h4>
              </a><img src="<?= base_url(); ?>img/Blog4.png">
              <p style="text-align: justify;">RAPMAFEST #8 yang bertajuk "NOSTALGIC FUTURE TO CREATE MIRACLE", RAPMAFEST #8 ini memiliki
                serangkaian acara, yaitu perlombaan Voice Over, Lomba Siar, Webinar, sampai Virtual Concert. Di puncak acara
                RAPMAFEST #8 yang<a href="http://rapmafm.ukm.ums.ac.id/2021/10/keseruan-rapmafest-8-nostalgic-future.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a></p>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
              <a href="http://rapmafm.ukm.ums.ac.id/2021/04/rapmaday7-act-beyond-imagination.html" target="_blank">
                <h4 style="text-align: center; color: black">RAPMADAY#7 <br>“ACT BEYOND IMAGINATION”</h4>
              </a><img src="<?= base_url(); ?>img/Blog3.png">
              <p style="text-align: justify;">Kali ini kita akan menyapa CampusBrainers dengan event tahunan kita.
                Tau dong apa Namanya, Yap Rapmaday. Nah acara tahunan kita kali ini berbeda dari tahun-tahun sebelumnya.
                Rapmaday kali ini disiarkan langsung dari<a href="http://rapmafm.ukm.ums.ac.id/2021/04/rapmaday7-act-beyond-imagination.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a></p>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
              <a href="http://rapmafm.ukm.ums.ac.id/2021/03/menyambung-silaturahmi-dengan.html" target="_blank">
                <h4 style="text-align: center; color: black">Menyambung silaturahmi dengan Sarasehan Rapma FM 2021</h4>
              </a><img src="<?= base_url(); ?>img/Blog2.png">
              <p style="text-align: justify;">Sarasehan Rapma FM tahun 2021 mengangkat tema Adventure
                CampusBrainers, makannya ada tenda di foto panggung diatas hihi. Waaah seru dong? iyaa
                CampusBrainers Sarase<a href="http://rapmafm.ukm.ums.ac.id/2021/03/menyambung-silaturahmi-dengan.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a></p>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="row">
              <a href="http://rapmafm.ukm.ums.ac.id/2021/02/kunjungan-tanpa-pertemuan-rapma-fm-ke.html" target="_blank">
                <h4 style="text-align: center; color: black">Kunjungan tanpa pertemuan Rapma FM ke Geronimo FM</h4>
              </a><img src="<?= base_url(); ?>img/Blog1.png">
              <p style="text-align: justify;">CampusBrainers !! Kami bakalan berbagi cerita tentang keseruan virtual study broadcast di Geronimo FM.
                Karena kondisi pandemi kaya sekarang, mengharuskan cuma ada beberapa orang aja dari Rapma FM yang berangkat langsung ke
                <a href="http://rapmafm.ukm.ums.ac.id/2021/02/kunjungan-tanpa-pertemuan-rapma-fm-ke.html" title="Selengkapnya" style="color:#008C52" target="_blank"> ...read more</a>
              </p>
            </div>
          </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2 style="text-align: center;">Contact</h2>
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
                <p style="text-align: justify;"><?= $setting['alamat']; ?></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1722825033103!2d110.76873700406814!3d-7.556185825852349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a145b44ab2e7b%3A0x907e13e28374d39b!2sRapma+FM!5e0!3m2!1sid!2sid!4v1547644067180" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>

          <!-- Forms -->
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="contact/save" method="post" enctype="multipart/form-data" class="php-email-form">

              <!-- Messages -->
              <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getFlashdata('pesan') ?>
                </div>
              <?php endif; ?>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
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