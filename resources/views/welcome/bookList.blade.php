{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--  <meta charset="utf-8">--}}
{{--  <meta content="width=device-width, initial-scale=1.0" name="viewport">--}}

{{--  <title>Portfolio - Kelly Bootstrap Template</title>--}}
{{--  <meta content="" name="descriptison">--}}
{{--  <meta content="" name="keywords">--}}

{{--  <!-- Favicons -->--}}
{{--  <link href="assets/img/favicon.png" rel="icon">--}}
{{--  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">--}}

{{--  <!-- Google Fonts -->--}}
{{--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">--}}

{{--  <!-- Vendor CSS Files -->--}}
{{--  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
{{--  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">--}}
{{--  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">--}}
{{--  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">--}}
{{--  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">--}}
{{--  <link href="assets/vendor/aos/aos.css" rel="stylesheet">--}}

{{--  <!-- Template Main CSS File -->--}}
{{--  <link href="assets/css/style.css" rel="stylesheet">--}}

{{--  <!-- =======================================================--}}
{{--  * Template Name: Kelly - v2.0.0--}}
{{--  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/--}}
{{--  * Author: BootstrapMade.com--}}
{{--  * License: https://bootstrapmade.com/license/--}}
{{--  ======================================================== -->--}}
{{--</head>--}}

{{--<body>--}}

{{--  <!-- ======= Header ======= -->--}}
{{--  <header id="header" class="fixed-top">--}}
{{--    <div class="container-fluid d-flex justify-content-between align-items-center">--}}

{{--      <h1 class="logo"><a href="index.html">Kelly</a></h1>--}}
{{--      <!-- Uncomment below if you prefer to use an image logo -->--}}
{{--      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->--}}
{{--        <nav class="nav-menu d-none d-lg-block">--}}
{{--            <ul>--}}
{{--                <li><a href="/home">Home</a></li>--}}
{{--                <li class="active"><a href="/about">About</a></li>--}}
{{--                <li><a href="/resume">Resume</a></li>--}}
{{--                <li><a href="/services">Services</a></li>--}}
{{--                <li><a href="/portfolio">Portfolio</a></li>--}}
{{--                <li><a href="/contact">Contact</a></li>--}}
{{--            </ul>--}}
{{--        </nav><!-- .nav-menu -->--}}

{{--      <nav class="nav-menu d-none d-lg-block">--}}
{{--        <ul>--}}
{{--          <li><a href="index.html">Home</a></li>--}}
{{--          <li><a href="about.html">About</a></li>--}}
{{--          <li><a href="resume.html">Resume</a></li>--}}
{{--          <li><a href="services.html">Services</a></li>--}}
{{--          <li class="active"><a href="portfolio.html">Portfolio</a></li>--}}
{{--          <li><a href="contact.html">Contact</a></li>--}}
{{--        </ul>--}}
{{--      </nav><!-- .nav-menu -->--}}

{{--      <div class="header-social-links">--}}
{{--        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>--}}
{{--        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>--}}
{{--        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>--}}
{{--        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>--}}
{{--      </div>--}}

{{--    </div>--}}

{{--  </header><!-- End Header -->--}}
@extends('welcome.menu')
@section('activeBookList')
    class="active"
@stop
@section('content')
  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Géneros</h2>
{{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        </div>

{{--        <div class="row" data-aos="fade-up" data-aos-delay="100">--}}
{{--          <div class="col-lg-12 d-flex justify-content-center">--}}
{{--            <ul id="portfolio-flters">--}}
{{--              <li data-filter="*" class="filter-active">All</li>--}}
{{--              <li data-filter=".filter-app">App</li>--}}
{{--              <li data-filter=".filter-card">Card</li>--}}
{{--              <li data-filter=".filter-web">Web</li>--}}
{{--            </ul>--}}
{{--          </div>--}}
{{--        </div>--}}

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/policiaco.jpg" class="img-fluid" alt="">
              <a href="/bookCategoryList/detective/author/desc"><div class="portfolio-info">
                <h4>Policíaco</h4>
{{--                <p>App</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/aventura.jpg" class="img-fluid" alt="">
                <a href="/bookCategoryList/adventure/title/asc"><div class="portfolio-info">
                <h4>Aventura</h4>
{{--                <p>Web</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/cuento.jpg" class="img-fluid" alt="">
                <a href="/bookCategoryList/fairy_tail/title/asc"><div class="portfolio-info">
                <h4>Cuento</h4>
{{--                <p>App</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/distopico.jpg" class="img-fluid" alt="">
                <a href="/bookCategoryList/dystopic/title/asc"><div class="portfolio-info">
                <h4>Distópico</h4>
{{--                <p>Card</p>--}}
{{--                  <a href="/"><div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>
</a>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/terror.jpg" class="img-fluid" alt="">
                <a href="/bookCategoryList/terror/title/asc"><div class="portfolio-info">
                <h4>Terror</h4>
{{--                <p>Web</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/ciencia.jpg" class="img-fluid" alt="">
                <a href="/bookCategoryList/science_fiction/title/asc"><div class="portfolio-info">
                <h4>Ciencia-ficción</h4>
{{--                <p>App</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/romantic.jpeg" class="img-fluid" alt="">
                <a href="/bookCategoryList/romantic/title/asc"><div class="portfolio-info">
                <h4>Romántico</h4>
{{--                <p>Card</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/comic.jpeg" class="img-fluid" alt="">
                <a href="/bookCategoryList/comic/title/asc"><div class="portfolio-info">
                <h4>Comic</h4>
{{--                <p>Comic</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/assets/img/portfolio/manga.jpg" class="img-fluid" alt="">
                <a href="/bookCategoryList/manga/title/asc"><div class="portfolio-info">
                <h4>Manga</h4>
{{--                <p>Web</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfWebolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
              </div></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@stop

{{--  <!-- ======= Footer ======= -->--}}
{{--  <footer id="footer">--}}
{{--    <div class="container">--}}
{{--      <div class="copyright">--}}
{{--        &copy; Copyright <strong><span>Kelly</span></strong>. All Rights Reserved--}}
{{--      </div>--}}
{{--      <div class="credits">--}}
{{--        <!-- All the links in the footer should remain intact. -->--}}
{{--        <!-- You can delete the links only if you purchased the pro version. -->--}}
{{--        <!-- Licensing information: https://bootstrapmade.com/license/ -->--}}
{{--        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->--}}
{{--        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </footer><!-- End  Footer -->--}}

{{--  <div id="preloader"></div>--}}
{{--  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>--}}

{{--  <!-- Vendor JS Files -->--}}
{{--  <script src="assets/vendor/jquery/jquery.min.js"></script>--}}
{{--  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>--}}
{{--  <script src="assets/vendor/php-email-form/validate.js"></script>--}}
{{--  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>--}}
{{--  <script src="assets/vendor/counterup/counterup.min.js"></script>--}}
{{--  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>--}}
{{--  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>--}}
{{--  <script src="assets/vendor/venobox/venobox.min.js"></script>--}}
{{--  <script src="assets/vendor/aos/aos.js"></script>--}}

{{--  <!-- Template Main JS File -->--}}
{{--  <script src="assets/js/main.js"></script>--}}

{{--</body>--}}

{{--</html>--}}
