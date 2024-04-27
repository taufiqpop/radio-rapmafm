<!DOCTYPE html>

<!-- Teknisi On Air 2021 (Taufiq Pop) -->
<!-- Teknisi On Air 2022 (Hernawan Vano) -->
<!-- Teknisi 2023 (Erwin Saputro) -->
<!-- Teknisi 2024 (Juliandre Sukma ) -->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>logo.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|
    Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,
    700i" rel="stylesheet">

    <!-- CSS -->
    <link href="<?= base_url(); ?>css/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/glightbox/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>css/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Main CSS -->
    <link href="<?= base_url(); ?>css/style.css" rel="stylesheet">

    <!-- My CSS -->
    <link href="<?= base_url(); ?>css/my-style.css" rel="stylesheet">

    <!-- Quiz CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>minigames/quiz/src/style.css">
</head>

<body>
    <!-- Mobile Nav Toggle Button -->
    <i class="bi bi-list mobile-nav-toggle"></i>


    <?php foreach ($settings as $setting) : ?>
        <!-- Header -->
        <header id="header" stats="false">
            <div class="d-flex flex-column">
                <div class="profile">
                    <a href="<?= base_url(); ?>user" target="_blank" title="Rapma FM">
                        <img src="<?= base_url(); ?>img/home/RapmaFM.png" class="img-fluid rounded-circle">
                    </a>
                    <h1 class="text-light"><?= $setting['owner']; ?></h1>
                </div>

                <!-- Navbar -->
                <nav id="navbar" class="nav-menu navbar">
                    <ul>
                        <li><a href="<?= base_url(); ?>index#hero" class="nav-link scrollto active"><i class="bx bx-home"></i>
                                <span>Home</span></a></li>
                        <li><a href="<?= base_url(); ?>index#structure" class="nav-link scrollto"><i class="bx bx-user"></i>
                                <span>Structure</span></a></li>
                        <li><a href="<?= base_url(); ?>index#program" class="nav-link scrollto"><i class="bx bx-microphone"></i>
                                <span>Program</span></a></li>
                        <li><a href="<?= base_url(); ?>index#minigames" class="nav-link scrollto"><i class="bx bx-joystick"></i>
                                <span>Mini Games</span></a></li>
                        <li><a href="<?= base_url(); ?>index#chart" class="nav-link scrollto"><i class="bx bx-music"></i>
                                <span>Top Chart</span></a></li>
                        <li><a href="<?= base_url(); ?>podcasts" class="nav-link scrollto"><i class="bx bx-headphone"></i>
                                <span>Podcast</span></a></li>
                        <li><a href="<?= base_url(); ?>index#events" class="nav-link scrollto"><i class="bx bx-calendar-event"></i>
                                <span>Events</span></a></li>
                        <li><a href="<?= base_url(); ?>index#achievements" class="nav-link scrollto"><i class="bx bx-trophy"></i>
                                <span>Achievements</span></a></li>
                        <li><a href="<?= base_url(); ?>index#news" class="nav-link scrollto"><i class="bx bx-news"></i>
                                <span>Rapma News</span></a></li>
                        <li><a href="<?= base_url(); ?>index#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i>
                                <span>Contact</span></a></li>
                    </ul>
                </nav>
                <audio id="demosMenu" style="width: auto; height: 25px;" controls autoplay>
                    <source src="<?= $setting['streaming']; ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </header>

        <!-- Memory Cards -->
        <main id="main">
            <section id="quiz">
                <div class="container">
                    <div class="section-title">
                        <h2 class="text-center">Mini Games || Quiz</h2>
                    </div>
                    <!-- Start Quiz button -->
                    <div class="start_btn"><button>Start Quiz</button></div>

                    <!-- Info Box -->
                    <div class="info_box">
                        <div class="info-title"><span>Some Rules of this Quiz</span></div>
                        <div class="info-list">
                            <div class="info">1. Kamu cuma punya waktu <span>15 detik</span> di setiap pertanyaan.</div>
                            <div class="info">2. Setelah kamu pilih jawaban, jawaban itu tidak bisa dibatalkan.</div>
                            <div class="info">3. Kamu tidak dapat memilih opsi apa pun setelah waktu habis.</div>
                            <div class="info">4. Kamu tidak dapat keluar dari Quiz pas Kamu lagi bermain.</div>
                            <div class="info">5. Kamu akan mendapatkan poin berdasarkan jawabanmu yang benar.</div>
                        </div>
                        <div class="buttons">
                            <a href="<?= base_url(); ?>index#minigames" class="btn btn-dark">&larr; Back</a>
                            <button class="quit">Exit Quiz</button>
                            <button class="restart">Continue</button>
                        </div>
                    </div>

                    <!-- Quiz Box -->
                    <div class="quiz_box">
                        <header>
                            <div class="title">Awesome Quiz Application</div>
                            <div class="timer">
                                <div class="time_left_txt">Time Left</div>
                                <div class="timer_sec">15</div>
                            </div>
                            <div class="time_line"></div>
                        </header>
                        <section>
                            <div class="que_text">
                                <!-- Here I've inserted question from JavaScript -->
                            </div>
                            <div class="option_list">
                                <!-- Here I've inserted options from JavaScript -->
                            </div>
                        </section>

                        <!-- Footer of Quiz Box -->
                        <footer>
                            <div class="total_que">
                                <!-- Here I've inserted Question Count Number from JavaScript -->
                            </div>
                            <button class="next_btn">Next Que</button>
                        </footer>
                    </div>

                    <!-- Result Box -->
                    <div class="result_box">
                        <div class="icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="complete_text">You've completed the Quiz!</div>
                        <div class="score_text">
                            <!-- Here I've inserted Score Result from JavaScript -->
                        </div>
                        <div class="buttons">
                            <button class="restart">Replay Quiz</button>
                            <button class="quit">Exit Quiz</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endforeach ?>

    <!-- Quiz JS -->
    <script src="<?= base_url(); ?>minigames/quiz/src/questions.js"></script>
    <script src="<?= base_url(); ?>minigames/quiz/src/script.js"></script>

    <!-- JavaScript -->
    <script src="<?= base_url(); ?>js/aos/aos.js"></script>
    <script src="<?= base_url(); ?>js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>js/glightbox/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>js/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>js/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>js/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>js/typed.js/typed.min.js"></script>
    <script src="<?= base_url(); ?>js/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Main JavaScript -->
    <script src="<?= base_url(); ?>js/main-frontend.js"></script>

    <!-- My JS -->
    <script src="<?= base_url(); ?>js/my-scripts-frontend.js"></script>
</body>

</html>