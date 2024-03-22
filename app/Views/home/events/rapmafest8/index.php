<?= $this->extend('home/events/rapmafest8/templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Header -->
<header id="header" class="d-flex align-items-center" style="height: 100px;">
  <div class="container-fluid container-xxl d-flex align-items-center">
    <div id="logo" class="me-auto">
      <a href="<?= base_url(); ?>rapmafest8" class="scrollto"><img src="<?= base_url(); ?>events/rapmafest8/img/Logo Rapmafest 8.png" alt="RAPMAFEST#8" title="RAPMAFEST#8"></a>
    </div>

    <!-- Navbar -->
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="<?= base_url(); ?>#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#about">About</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#webinar">Webinar</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#concert">Concert</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#schedule">Timeline</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#gallery">Gallery</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#sponsor">Sponsor</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#medpart">Medpart</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#rapmerch">Rapmerch</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url(); ?>#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <a class="buy-tickets scrollto" href="<?= base_url(); ?>#buy-tickets"><strong>Buy Ticket</strong></a>
  </div>
</header>

<!-- Home -->
<section id="hero">
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <!-- <h1 class="mb-4 pb-0">How To Buy Ticket<br><span>RAPMAFEST #8</span></h1> -->
    <h1 class="mb-4 pb-0">AFTER MOVIE<br><span>RAPMAFEST #8</span></h1>
    <p class="mb-4 pb-0">Saturday, 23 October 2021</p>
    <a href="https://youtu.be/8iO5TGJEU0U" class="glightbox play-btn mb-4"></a>
    <a href="<?= base_url(); ?>#about" class="about-btn scrollto">About RAPMAFEST</a>
  </div>
</section>

<main id="main">
  <!-- About -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">

          <!-- About -->
          <center>
            <h2>Apa Itu RAPMAFEST ??</h2>
            <p style="text-align: justify; text-indent: 30px;">Sudah 8 tahun RAPMA FM menghadirkan RAPMAFEST sebagai bentuk
              rasa syukur atas berdirinya RAPMA FM yang ke-24 tahun. RAPMAFEST sendiri adalah event dengan
              berbagai macam sub-event di dalamnya, mulai dari lomba, seminar, dan juga konser yang pastinya
              menarik untuk di ikuti. Tak hanya itu, RAPMAFEST juga menghadirkan berbagai macam guest star
              seperti Adera, Korek Kayu, Olski, Eclat Story, dll. Pembicara dari RAPMAFEST juga tidak
              kalah menarik diantaranya seperti Kristo Imanuel, Kresna Julio, Gofar Hilman, Desta, Bayu Skak, dll.
              Pada RAPMAFEST kali ini, ada beberapa rangkaian acara yang berbeda dari tahun-tahun sebelumnya,
              seperti webinar, lomba voice over, dan virtual concert. Salah satu guest star dari RAPMAFEST #8
              adalah Suara Kayu dengan pembicaranya yaitu Leyla Aderina dan juga Willy Winarko.
            </p>
          </center>
        </div>

        <!-- Blank -->
        <div class="col-lg-2">
        </div>

        <!-- Lokasi -->
        <div class="col-lg-2">
          <center>
            <h3>Where ??</h3>
            <br>
            <img width="75px" src="events/rapmafest8/img/Zoom.png">
            <br><br>
            <p>Zoom Platform</p>
          </center>
        </div>

        <!-- Tanggal -->
        <div class="col-lg-2">
          <center>
            <h3>When ??</h3>
            <br>
            <img width="75px" src="events/rapmafest8/img/Calendar.png">
            <br><br>
            <p>Saturday, 23 October 2021</p>
          </center>
        </div>
      </div>
    </div>
  </section>

  <!-- Prosedur Lomba -->
  <section>
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <br><br>
        <h2>Prosedur Pembelian Tiket & Pendaftaran</h2>
      </div>
      <img src="<?= base_url(); ?>events/rapmafest8/img/Prosedur.png" class="img-fluid">
      <br><br>
  </section>

  <!-- Webinar -->
  <section id="webinar" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <br><br>
        <h2>Webinar</h2>
        <p>Pembicara</p>
      </div>
      <div class="row">
        <!-- Leyla Aderina -->
        <div class="col-lg-6 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="100">
            <img src="<?= base_url(); ?>events/rapmafest8/img/Leyla Aderina.png" class="img-fluid">
            <div class="details">
              <hr>
              <p style="text-align: justify;">
                Leyla Aderina Putri atau biasa dipanggil Leyla lahir di Jakarta tahun 1997 dan
                sekarang berusia 24 tahun. Leyla sudah lama berkarier di dunia Voice Over. Selain itu,
                Leyla juga berprofesi sebagai penyiar radio, Dubber dan juga MC Professional. Leyla juga
                dipercaya untuk mengisi suara di salah satu drama korea yaitu The World of The Married dan
                Leyla tergabung dalam salah satu anggota di segmen "How To Become" dikanal YouTube Adiez Gilang.<br>
                Instagram : <a href="https://www.instagram.com/leyladerina/" target="_blank">@leyladerina</a> (178K Followers)<br>
                TikTok : <a href="https://www.tiktok.com/@leyladerina/" target="_blank">@leyladerina</a> (1,6M Followers)
              </p>
            </div>
          </div>
        </div>

        <!-- Willy Winarko -->
        <div class="col-lg-6 col-md-6">
          <div class="speaker" data-aos="fade-up" data-aos-delay="200">
            <img src="<?= base_url(); ?>events/rapmafest8/img/Willy Winarko.png" class="img-fluid">
            <div class="details">
              <hr>
              <p style="text-align: justify;">
                Willy Winarko adalah seorang rapper sekaligus penyiar radio program Mustang Ghetto di radio Mustang 88FM.
                Sebelum dikenal sebagai rapper, dia pernah tinggal di Amerika Serikat. Pada Tahun 2011 Willy sempat bergabung
                dengan NSG Recording, hingga akhirnya berbagai album dan single sudah willy
                keluarkan. Dalam karirnya Willy Pernah berkolaborasi dengan musisi hebat seperti Rinni, Kamga,
                Jamie Aditya hingga Keith Martin serta pernah menulis lagu untuk Indah Dewi Pertiwi dan Daniel Mananta.<br>
                Instagram : <a href="https://www.instagram.com/willywinarko/" target="_blank">@willywinarko</a> (104K Followers)<br>
                TikTok : <a href="https://www.tiktok.com/@willywinarko_/" target="_blank">@willywinarko_</a> (26,2K Followers)
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Konser -->
  <section id="concert">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <br><br>
        <h2>Concert</h2>
        <p>Guest Star</p>
      </div>
      <div class="row">

        <!-- Bugy Bhagaskara -->
        <div class="col-lg-4 col-md-4">
          <div class="speaker" data-aos="fade-up" data-aos-delay="100">
            <img src="<?= base_url(); ?>events/rapmafest8/img/Bugy Bhagaskara.png" class="img-fluid">
            <div class="details">
              <hr>
              <p style="text-align: justify;">
                Bugy Bhagaskara adalah seorang musisi yang berasal dari Kota Surakarta dan merupakan salah satu
                mahasiswa Ilmu Komunikasi Universitas Muhammadiyah Surakarta. Dalam karirnya didunia musik,
                ia menjadi musisi tunggal dengan aliran musik bergenre Pop EDM dan baru saja mengeluarkan single terbarunya yang
                berjudul "Wait" dikanal Youtubenya.<br>
                Instagram : <a href="https://www.instagram.com/bugybhagas/" target="_blank">@bugybhagas </a> (1,656 Followers)<br>
                Youtube : <a href="https://www.youtube.com/channel/UCCrGSJHZvHYWu8vUbVEoEtQ" target="_blank"> bugy bhagas</a>
              </p>
            </div>
          </div>
        </div>

        <!-- Suara Kayu -->
        <div class="col-lg-4 col-md-4">
          <div class="speaker" data-aos="fade-up" data-aos-delay="200">
            <img src="<?= base_url(); ?>events/rapmafest8/img/Suara Kayu.png" class="img-fluid">
            <div class="details">
              <hr>
              <p style="text-align: justify;">
                “Miniatur” merupakan salah satu judul lagu yang dirilis oleh musisi baru dengan genre akustik
                yaitu, Suara Kayu. Beranggotakan Ingrid Tamara sebagai Vokalis dan pemain ukulele, serta gitaris
                Dewangga Elsandro, Suara Kayu sukses menarik hati para pecinta musik di berbagai platform salah
                satunya Youtube. Lagu yang easy-listening membuat Suara Kayu semakin dikenal oleh masyarakat.
                Musisi yang terbentuk pada tanggal 7 Mei 2020 ini berhasil menciptakan lebih dari 5 lagu dengan
                pendengar bulanan lebih dari 190 ribu di salah satu platform musik Spotify.<br>
                Instagram : <a href="https://www.instagram.com/suarakayu/" target="_blank">@suarakayu</a> (17,5K Followers)<br>
                TikTok : <a href="https://www.tiktok.com/@suarakayu/" target="_blank">@suarakayu</a> (22,9K Followers)<br>
                Youtube : <a href="https://www.youtube.com/channel/UC9Pj95_teh76aFkE909z9lA" target="_blank">Suara Kayu Official</a> (65K Subscriber)<br>
                Spotify : <a href="https://open.spotify.com/artist/327ipGIr9bD3MkLb2eucqC" target="_blank">Suara Kayu</a> (21,871 Followers)<br>
                Listener Spotify : 192,8K/month
              </p>
            </div>
          </div>
        </div>

        <!-- Hafid Maulana -->
        <div class="col-lg-4 col-md-4">
          <div class="speaker" data-aos="fade-up" data-aos-delay="300">
            <img src="<?= base_url(); ?>events/rapmafest8/img/Hafid Maulana.png" class="img-fluid">
            <div class="details">
              <hr>
              <p style="text-align: justify;">
                Hafid Maulana atau kerap dipanggil Ijad sebagai nama panggungnya merupakan musisi yang
                berasal dari kota Surakarta. Dalam karirnya didunia musik Ijad
                mengusung aliran musik bergenre Pop Folk yang dimana ia menjadi musisi
                tunggal dan telah menciptakan beberapa single lagu salah satunya berjudul
                "sekedar tempat singgah".<br>
                Instagram : <a href="https://www.instagram.com/hafidmaulana_/" target="_blank">@hafidmaulana_</a> (855 Followers)<br>
                Youtube : <a href="https://www.youtube.com/channel/UCPQEdz1KM9Te2-ZmWWVXIAg/" target="_blank"> Ijad </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline -->
  <section id="schedule" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Timeline Lomba</h2>
      </div>
      <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
        <li class="nav-item">
          <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Lomba Voice Over</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Lomba Siar</a>
        </li>
      </ul>
      <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
          <div class="row schedule-item">
            <div class="col-md-2"><time></time></div>
            <div class="col-md-10">
              <h3>LOMBA VOICE OVER</h3>
              <p></p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>18 Aug - 28 Sep</time></div>
            <div class="col-md-10">
              <h4>Pendaftaran dan Pembagian Twibbon</h4>
              <p>Secara Online Melalui Google Form</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>3 Oct <br> (15:30 - Selesai)</time></div>
            <div class="col-md-10">
              <h4>Technical Meeting</h4>
              <p>Secara Online Melalui Google Meet</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>10 Oct <br> (07:00 - 21:00)</time></div>
            <div class="col-md-10">
              <h4>Pengumpulan Karya</h4>
              <p>Secara Online Melalui Google Form</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>10 Oct <br> (07:00)</time></div>
            <div class="col-md-10">
              <h4>Upload Karya Menggunakan Twibbon</h4>
              <p>Melalui Instagram Peserta</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>12 Oct<br> (15:00)</time></div>
            <div class="col-md-10">
              <h4>Batas Perhitungan Likes dan Comment</h4>
              <p>Melalui Instagram</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>11 - 13 Oct</time></div>
            <div class="col-md-10">
              <h4>Penyaringan Peserta</h4>
              <p>Akan Dipilih Menjadi 10 Peserta Terbaik</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>14 Oct <br> (09:00)</time></div>
            <div class="col-md-10">
              <h4>Pengumunan Peserta 10 Besar</h4>
              <p>Melalui WA Grup dan Instagram <a href="https://www.instagram.com/rapmafm" target="_blank">@rapmafm</a> </p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>17 - 20 Oct</time></div>
            <div class="col-md-10">
              <h4>Penyaringan Peserta</h4>
              <p>Untuk Juara 1, 2, dan 3</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>23 Oct</time></div>
            <div class="col-md-10">
              <h4>Pengumuman Pemenang Lomba</h4>
              <p>Akan Diumumkan di Instagram <a href="https://www.instagram.com/rapmafm" target="_blank">@rapmafm</a>,
                TikTok <a href="https://www.tiktok.com/@rapmafm" target="_blank">@rapmafm</a>, dan setelah Webinar RAPMAFEST#8
              </p>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-2">
          <div class="row schedule-item">
            <div class="col-md-2"><time></time></div>
            <div class="col-md-10">
              <h3>LOMBA SIAR</h3>
              <p></p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>18 Aug - 28 Sept</time></div>
            <div class="col-md-10">
              <h4>Pendaftaran dan Pembagian Twibbon ke Peserta</h4>
              <p>Secara Online Melalui Google Form</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>3 Oct <br> (12:30 - Selesai)</time></div>
            <div class="col-md-10">
              <h4>Technical Meeting 1</h4>
              <p>Secara Online Melalui Google Meet</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>10 Oct <br> (07:00 - 21:00)</time></div>
            <div class="col-md-10">
              <h4>Pengumpulan Karya</h4>
              <p>Secara Online Melalui Google Drive dan Google Form</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>10 Oct <br> (07:00)</time></div>
            <div class="col-md-10">
              <h4>Upload Karya Menggunakan Twibbon</h4>
              <p>Melalui Instagram Masing - Masing</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>12 Oct <br> (15:00)</time></div>
            <div class="col-md-10">
              <h4>Batas Perhitungan Likes dan Comment</h4>
              <p>Melalui Instagram</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>11 - 13 Oct</time></div>
            <div class="col-md-10">
              <h4>Penyaringan Peserta</h4>
              <p>Untuk 10 Besar Peserta</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>14 Oct <br> (09:00)</time></div>
            <div class="col-md-10">
              <h4>Pengumuman Peserta 10 Besar</h4>
              <p>Melalui WA Grup, Instagram <a href="https://www.instagram.com/rapmafm" target="_blank">@rapmafm</a>,
                dan Tiktok <a href="https://www.tiktok.com/@rapmafm" target="_blank">@rapmafm</a>
              </p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>15 Oct <br> (16:00 - Selesai)</time></div>
            <div class="col-md-10">
              <h4>Technical Meeting 2</h4>
              <p>Secara Online Melalui Google Meet</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>17 Oct</time></div>
            <div class="col-md-10">
              <h4>Live Lomba Siar 10 Besar</h4>
              <p>Secara Online Melalui Google Meet</p>
            </div>
          </div>
          <div class="row schedule-item">
            <div class="col-md-2"><time>23 Oct</time></div>
            <div class="col-md-10">
              <h4>Pengumuman Juara</h4>
              <p>Akan Diumumkan di Instagram <a href="https://www.instagram.com/rapmafm" target="_blank">@rapmafm</a>,
                TikTok <a href="https://www.tiktok.com/@rapmafm" target="_blank">@rapmafm</a>, dan setelah Webinar RAPMAFEST#8</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section id="gallery">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Gallery</h2>
        <p>Memories of Rapmafest</p>
      </div>
    </div>

    <!-- Slider -->
    <div class="gallery-slider swiper-container">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (1).png" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (1).png" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (2).jpg" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (2).jpg" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (3).jpg" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (3).jpg" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (4).png" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (4).png" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (5).png" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (5).png" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (6).jpg" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (6).jpg" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (7).png" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (7).png" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (8).png" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (8).png" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (9).png" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (9).png" class="img-fluid"></a></div>
        <div class="swiper-slide"><a href="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (10).jpg" class="gallery-lightbox"><img src="<?= base_url(); ?>events/rapmafest8/img/gallery/Gallery (10).jpg" class="img-fluid"></a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Sponsor -->
  <section id="sponsor" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <br><br>
        <h2>Sponsor</h2>
      </div>
      <img src="<?= base_url(); ?>events/rapmafest8/img/Sponsor.png" class="img-fluid">
      <br><br>
  </section>

  <!-- Media Partner -->
  <section id="medpart">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <br><br>
        <h2>Media Partner</h2>
      </div>
      <img src="<?= base_url(); ?>events/rapmafest8/img/Media Partner.png" class="img-fluid">
      <br><br>
  </section>

  <!-- Rapmerch -->
  <section id="rapmerch" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <br><br>
        <h2>Rapmerch</h2>
        <p>Rapma Merchandise</p>
      </div>

      <!-- Contact Person Rapmerch -->
      <center>
        <img width="1100px" src="<?= base_url(); ?>events/rapmafest8/img/RapmerchNew.png" class="img-fluid"><br><br>
        <h3><strong>You Can Buy Our Special Merchandise Through :</strong></h3>
        <h3><strong><a style="text-align: center;" href="https://wa.me/+6281226112589?text=Halo%20kak%2C%20aku%20mau%20beli%20Merchandise%20Rapmafest%20%238%20ya!%20%3A)" target="_blank"> 0812‑2611-2589 (Ara)</a></strong></h3>
      </center>
      <br>
  </section>

  <!-- Buy Ticket -->
  <section id="buy-tickets">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Buy Ticket</h2>
        <p>Beli Tiket RAPMAFEST #8</p>
      </div>
      <div class="row">

        <!-- Webinar + Konser -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Webinar + Konser</h5><br>
              <center><img src="<?= base_url(); ?>events/rapmafest8/img/Laptop Webinar.png" height="100px" weight="100px"></center><br>
              <h6 class="card-price text-center">Rp. -</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Webinar Nasional</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Konser Virtual</li>
                <li><span class="fa-li"><i class="fa fa-times"></i></span>E-Sertifikat Webinar Nasional</li>
                <li><span class="fa-li"><i class="fa fa-times"></i></span>Doorprize</li>
                <br>
                <br>
                <br>
              </ul>
              <hr>
              <div class="text-center">
                <!-- <a href="https://bit.ly/Rapmafest8-WebinarKonser" target="_blank"> -->
                <button disabled="disabled" class="btn" style="background:#333;">Register Closed</button></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Lomba Voice Over -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Lomba Voice Over</h5><br>
              <center><img src="<?= base_url(); ?>events/rapmafest8/img/Mic Lomba.png" height="100px" weight="100px"></center><br>
              <h6 class="card-price text-center">Rp. -</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Webinar Nasional</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Konser Virtual</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>E-Sertifikat Webinar Nasional</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>E-Sertifikat Lomba Voice Over</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Uang Tunai untuk Juara 1, 2, 3</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Merch untuk Juara Favorite</li>
              </ul>
              <hr>
              <div class="text-center">
                <!-- <a href="https://bit.ly/Rapmafest8-LombaVoiceOver" target="_blank"> -->
                <button disabled="disabled" class="btn" style="background:#333;">Register Closed</button></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Lomba Siar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Lomba Siar</h5><br>
              <center><img src="<?= base_url(); ?>events/rapmafest8/img/Radio Lomba.png" height="100px" weight="100px"></center><br>
              <h6 class="card-price text-center">Rp. -</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Webinar Nasional</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Konser Virtual</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>E-Sertifikat Webinar Nasional</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>E-Sertifikat Lomba Siar</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Uang Tunai untuk Juara 1, 2, 3</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Merch untuk Juara Favorite</li>
              </ul>
              <hr>
              <div class="text-center">
                <!-- <a href="https://bit.ly/Rapmafest8-LombaSiar" target="_blank"> -->
                <button disabled="disabled" class="btn" style="background:#333;">Register Closed</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Contact</h2>
      </div>

      <!-- Rekening BCA -->
      <div class="row contact-info">
        <div class="col-md-3">
          <div class="contact-address">
            <i class="bi bi-credit-card-fill"></i>
            <h3>Payment</h3>
            <address><a>Rekening BCA : 3930749396 <br> a/n (Muhammad Hanif Al-Hafizh)</a></address>
          </div>
        </div>

        <!-- Contact Person -->
        <div class="col-md-3">
          <div class="contact-phone">
            <i class="bi bi-phone"></i>
            <h3>CONTACT PERSON</h3>
            <p><a href="https://wa.me/+6285848319580?text=Halo%20kak%2C%20saya%20mau%20bertanya%20mengenai%20RAPMAFEST%20%238%20%3A)" target="_blank">Dafiq (0858-4831-9580)</a></p>
            <p><a href="https://wa.me/+6283146061692?text=Halo%20kak%2C%20saya%20mau%20bertanya%20mengenai%20RAPMAFEST%20%238%20%3A)" target="_blank">Falah (0857-2731-0524)</a></p>
            <p><a href="https://wa.me/+6287734853215?text=Halo%20kak%2C%20saya%20mau%20bertanya%20mengenai%20RAPMAFEST%20%238%20%3A)" target="_blank">Hanif (0877-3485-3215)</a></p>
          </div>
        </div>

        <!-- Sponsor -->
        <div class="col-md-3">
          <div class="contact-phone">
            <i class="bi bi-layers-fill"></i>
            </p>
            <h3>SPONSORSHIP</h3>
            <p><a href="https://wa.me/+6285328854390?text=Halo%20kak%2C%20kami%20ingin%20mengajukan%20kerja%20sama%20dengan%20Rapma%20FM.%20Bagaimana%20untuk%20prosedur%20selanjutnya%20ya%3F" target="_blank">Rio (0853-2885-4390)</a></p>
            <p><a href="https://wa.me/+6287737837843?text=Halo%20kak%2C%20kami%20ingin%20mengajukan%20kerja%20sama%20dengan%20Rapma%20FM.%20Bagaimana%20untuk%20prosedur%20selanjutnya%20ya%3F" target="_blank">Vania (0877-3783-7843)</a></p>
            <br>
            </p>
          </div>
        </div>

        <!-- Email -->
        <div class="col-md-3">
          <div class="contact-email">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a>rapmafest@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?= $this->endSection(); ?>