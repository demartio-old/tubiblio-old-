{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--  <meta charset="utf-8">--}}
{{--  <meta content="width=device-width, initial-scale=1.0" name="viewport">--}}

{{--  <title>Contact - Kelly Bootstrap Template</title>--}}
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
{{--          <li><a href="portfolio.html">Portfolio</a></li>--}}
{{--          <li class="active"><a href="contact.html">Contact</a></li>--}}
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
@section('activePersonal')
    class="active"
@stop
@section('content')
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Alta libro</h2>
{{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        </div>

{{--        <div>--}}
{{--          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>--}}
{{--        </div>--}}

        <div class="row mt-5">

{{--          <div class="col-lg-4">--}}
{{--            <div class="info">--}}
{{--              <div class="address">--}}
{{--                <i class="icofont-google-map"></i>--}}
{{--                <h4>Location:</h4>--}}
{{--                <p>A108 Adam Street, New York, NY 535022</p>--}}
{{--              </div>--}}

{{--              <div class="email">--}}
{{--                <i class="icofont-envelope"></i>--}}
{{--                <h4>Email:</h4>--}}
{{--                <p>info@example.com</p>--}}
{{--              </div>--}}

{{--              <div class="phone">--}}
{{--                <i class="icofont-phone"></i>--}}
{{--                <h4>Call:</h4>--}}
{{--                <p>+1 5589 55488 55s</p>--}}
{{--              </div>--}}

{{--            </div>--}}

{{--          </div>--}}

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="/books" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label for="title">Título:   </label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Título del libro" data-rule="minlen:4" data-msg="Por favor introduce al menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
{{--                <div class="col-md-6 form-group">--}}
{{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
{{--                  <div class="validate"></div>--}}
{{--                </div>--}}
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <label for="title">ISBN:   </label>
                  <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Título del libro" data-rule="minlen:4" data-msg="Introduce el isbn del libro" />
                  <div class="validate"></div>
                </div>
{{--                <div class="col-md-6 form-group">--}}
{{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
{{--                  <div class="validate"></div>--}}
{{--                </div>--}}
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="author">Autor:   </label>
                    <input type="text" name="author" class="form-control" id="author" placeholder="Autor" data-rule="minlen:4" data-msg="Por favor introduce al menos 4 caracteres" />
                    <div class="validate"></div>
                </div>
                {{--                <div class="col-md-6 form-group">--}}
                {{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
                {{--                  <div class="validate"></div>--}}
                {{--                </div>--}}
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                    <label for="category">Elige un género:</label>

                    <select id="category" class="form-control">
                        <option value="adventure" selected>Aventura</option>
                        <option value="science_fiction">Ciencia-ficción</option>
                        <option value="comic">Comic</option>
                        <option value="fairy_tail">Cuento</option>
                        <option value="dystopic">Distópico</option>
                        <option value="manga">Manga</option>
                        <option value="detective">Policíaco</option>
                        <option value="romantic">Romance</option>
                        <option value="terror">Terror</option>
                    </select>
{{--                  <label for="title">ISBN:   </label>--}}
{{--                  <input type="text" name="isbn" class="form-control" id="isbn" placeholder="Título del libro" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />--}}
{{--                  <div class="validate"></div>--}}
                </div>
{{--                <div class="col-md-6 form-group">--}}
{{--                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />--}}
{{--                  <div class="validate"></div>--}}
{{--                </div>--}}
              </div>
{{--              <div class="form-group">--}}
{{--                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />--}}
{{--                <div class="validate"></div>--}}
{{--              </div>--}}

              <div class="form-group">
                <label for="review">Review:   </label>
                <textarea class="form-control" name="review" id="review" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Review"></textarea>
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <label for="book_cover">Portada:   </label>
                <input name="book_cover" id="book_cover" type="file">
              </div>
{{--              <div class="mb-3">--}}
{{--                <div class="loading">Loading</div>--}}
{{--                <div class="error-message"></div>--}}
{{--                <div class="sent-message">Your message has been sent. Thank you!</div>--}}
{{--              </div>--}}

                {{csrf_field()}}
              <div class="text-center"><button type="submit">Alta libro</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
