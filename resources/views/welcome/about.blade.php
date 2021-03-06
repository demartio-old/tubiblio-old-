{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--  <meta charset="utf-8">--}}
{{--  <meta content="width=device-width, initial-scale=1.0" name="viewport">--}}

{{--  <title>About - Kelly Bootstrap Template</title>--}}
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

{{--      <h1 class="logo"><a href="/">Kelly</a></h1>--}}
{{--      <!-- Uncomment below if you prefer to use an image logo -->--}}
{{--      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->--}}

{{--      <nav class="nav-menu d-none d-lg-block">--}}
{{--        <ul>--}}
{{--          <li><a href="/home">Home</a></li>--}}
{{--          <li class="active"><a href="/about">About</a></li>--}}
{{--          <li><a href="/resume">Resume</a></li>--}}
{{--          <li><a href="/services">Services</a></li>--}}
{{--          <li><a href="/portfolio">Portfolio</a></li>--}}
{{--          <li><a href="/contact">Contact</a></li>--}}
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
@section('activeHome')
    class="active"
@stop
@section('content')

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

{{--        <div class="section-title">--}}
{{--          <h2>About</h2>--}}
{{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--        </div>--}}

        <div class="row">
          <div class="col-lg-4">
{{--            <img src="/assets/img/about.jpg" class="img-fluid" alt="">--}}
            <img src="{{ $book->book_cover_route }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
{{--            <h3>Illustrator &amp; UI/UX Designer</h3>--}}
            <h3>{{ $book->title }}</h3>
{{--            <p class="font-italic">--}}
{{--              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
              {{--              magna aliqua.--}}
              {{--            </p>--}}
              <div class="row">
                  <div class="col-lg-6">
                <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>ISBN: </strong>{{ $book->isbn }}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Author:</strong> <a href="/">{{ $book->author }}</a></li>
                    <li><i class="icofont-rounded-right"></i> <strong>G??nero: </strong><a href="/bookCategoryList/{{ $book->category }}/title/asc">
{{--                            @php--}}
{{--                                $category = ;--}}
{{--                            @endphp--}}
                            @switch($category)
                                @case('adventure')
                                Aventura
                                @break

                                @case('science_fiction')
                                Ciencia ficci??n
                                @break

                                @case('comic')
                                Comic
                                @break

                                @case('fairy_tail')
                                Cuento
                                @break

                                @case('dystopic')
                                Dist??pico
                                @break

                                @case('manga')
                                Manga
                                @break

                                @case('detective')
                                Polic??aco
                                @break

                                @case('romantic')
                                Romantico
                                @break

                                @case('terror')
                                Terror
                                @break

                                @default
                                Default case...
                            @endswitch
                        </a></li>

                    {{--                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +123 456 7890</li>--}}
                    {{--                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : New York, USA</li>--}}
                </ul>
              </div>
                  <div class="col-lg-6">
                <ul>
                <li><i class="icofont-rounded-right"></i> <strong>1?? Edici??n: </strong>{{ $book->r_date }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Agregado por: </strong> 30</li>
{{--                <li><i class="icofont-rounded-right"></i> <strong>Ultima edici??n: </strong>{{ $book->r_date }}</li>--}}
                <li><i class="icofont-rounded-right"></i> <strong>Agregado el: </strong>{{ $book->created_at }}</li>
                <li><i class="icofont-rounded-right"></i> <strong>Actualizado: </strong>{{ $book->updated_at }}</li>

                </ul>
              </div>
            </div>
              <p>{{ $book->review }}</p>
{{--            <p>--}}
{{--              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.--}}
{{--              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.--}}
{{--            </p>--}}
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Valoraci??n media</h2>
{{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Muy bueno <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bueno <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Normal <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Malo <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Muy malo <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

{{--          <div class="col-lg-6">--}}

{{--            <div class="progress">--}}
{{--              <span class="skill">PHP <i class="val">80%</i></span>--}}
{{--              <div class="progress-bar-wrap">--}}
{{--                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <div class="progress">--}}
{{--              <span class="skill">WordPress/CMS <i class="val">90%</i></span>--}}
{{--              <div class="progress-bar-wrap">--}}
{{--                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <div class="progress">--}}
{{--              <span class="skill">Photoshop <i class="val">55%</i></span>--}}
{{--              <div class="progress-bar-wrap">--}}
{{--                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Comunidad</h2>
{{--          <h2>feedback</h2>--}}
{{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
          <p>La comunidad sobre {{ $book->title }}...</p>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Favoritos</p>
          </div>

{{--          <div class="col-lg-3 col-6 text-center">--}}
{{--            <span data-toggle="counter-up">521</span>--}}
{{--            <p>Favoritos de amigos</p>--}}
{{--          </div>--}}

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Likes</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Dislikes</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Opiniones</h2>
          <p>Que opinan tus amigos...</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

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
