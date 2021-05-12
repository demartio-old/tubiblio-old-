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
{{--          <h2>{{$category}}</h2>--}}
          <h2>
              @switch($category)
                  @case('adventure')
                  Aventura
                  @break

                  @case('science_fiction')
                  Ciencia ficción
                  @break

                  @case('comic')
                  Comic
                  @break

                  @case('fairy_tail')
                  Cuento
                  @break

                  @case('dystopic')
                  Distópico
                  @break

                  @case('manga')
                  Manga
                  @break

                  @case('detective')
                  Policíaco
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
          </h2>
{{--          <p>Mostrar por:</p>--}}
{{--          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
        </div>
          <table>
              <tr>
{{--                  <td><p>Mostrar por: </p></td>--}}
                  <td class="cv"><h5>Mostrar por:</h5></td>
                  <td>
                      <div class="row" data-aos="fade-up" data-aos-delay="100">
                          <div class="col-lg-12 d-flex justify-content-center">
                              <ul id="portfolio-flters">
                                  @switch($type)
                                      @case('title')
                                      <a href="/bookCategoryList/{{ $category }}/title/{{ $order }}"><li class="filter-active"{{--data-filter=".filter-card"--}}>Título</li></a>
                                      <a href="/bookCategoryList/{{ $category }}/author/{{ $order }}"><li {{--data-filter="*"--}} {{--class="filter-active"--}}>Autor</li></a>
                                      @break
                                      @case('author')
                                      <a href="/bookCategoryList/{{ $category }}/title/{{ $order }}"><li {{--data-filter=".filter-card"--}}>Título</li></a>
                                      <a href="/bookCategoryList/{{ $category }}/author/{{ $order }}"><li {{--data-filter="*"--}} class="filter-active">Autor</li></a>
                                      @break
                                  {{--              <li data-filter=".filter-app">Autor</li>--}}
                                  {{--              <li data-filter=".filter-web">Día</li>--}}
                                  @endswitch
                              </ul>
                          </div>
                      </div>
                  </td>
                  <td class="cv"><h5>Ordenado por:</h5></td>
                  <td>
                      <div class="row" data-aos="fade-up" data-aos-delay="100">
                          <div class="col-lg-12 d-flex justify-content-center">
                              <ul id="portfolio-flters">
                                  @switch($order)
                                      @case('asc')
                                          <a href="/bookCategoryList/{{ $category }}/{{ $type }}/asc"><li class="filter-active"{{--data-filter=".filter-card"--}}>Asc</li></a>
                                          <a href="/bookCategoryList/{{ $category }}/{{ $type }}/desc"><li {{--data-filter="*"--}} {{--class="filter-active"--}}>Desc</li></a>
                                      @break
                                      @case('desc')
                                          <a href="/bookCategoryList/{{ $category }}/{{ $type }}/asc"><li {{--data-filter=".filter-card"--}}>Asc</li></a>
                                          <a href="/bookCategoryList/{{ $category }}/{{ $type }}/desc"><li {{--data-filter="*"--}} class="filter-active">Desc</li></a>
                                      @break
                                      {{--              <li data-filter=".filter-app">Autor</li>--}}
                                      {{--              <li data-filter=".filter-web">Día</li>--}}
                                  @endswitch
{{--                                  <a href=""><li --}}{{--data-filter="*"--}}{{-- class="filter-active">Asc</li></a>--}}
{{--                                  <a href=""><li class="filter-active"--}}{{--data-filter=".filter-card"--}}{{-->Desc</li></a>--}}
                                  {{--                <li data-filter=".filter-app">Ascenderte</li>--}}
                                  {{--              <li data-filter=".filter-web">Día</li>--}}
                              </ul>
                          </div>
                      </div>
                  </td>
              </tr>
          </table>




        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @if(count($books) > 0)
                @foreach($books as $book)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src={{ $book->book_cover_route }} class="img-fluid" alt="">
                            <a href="/bookSheet/{{ $book->id }}"><div class="portfolio-info">
                                    <h4>{{ $book->title }}</h4>
                                    <p>{{ $book->author }}</p>
                                    {{--                <div class="portfolio-links">--}}
                                    {{--                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
                                    {{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
                                    {{--                </div>--}}
                                </div></a>
                        </div>
                    </div>
{{--                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                        <div class="icon-box iconbox-blue">--}}
{{--                            <div class="icon">--}}
{{--                                --}}{{--                                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                --}}{{--                                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>--}}
{{--                                --}}{{--                                  </svg>--}}
{{--                                --}}{{--                                  <i class="bx bxl-dribbble"></i>--}}
{{--                                --}}{{--                                  {{ $book->title }}--}}
{{--                                --}}{{--                                  <a href="/bookSheet/{{ $book->id }}"><img width="100" height="100" src={{ $book->book_cover_route }} alt="{{ $book->book_cover_route }}"></a>--}}
{{--                                <a href="/bookSheet/{{ $book->id }}"><img width="100" height="100" src={{ $book->book_cover_route }} alt="{{ $book->book_cover_route }}"></a>--}}
{{--                                --}}{{--                                  <img width="100" height="100" src={{ $book->book_cover_route }} alt="{{ $book->book_cover_route }}">--}}
{{--                            </div>--}}
{{--                            <h4><a href="">{{ $book->title }}</a></h4>--}}
{{--                            --}}{{--                              <p>{{ $book->title }}</p>--}}
{{--                            --}}{{--                              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>--}}
{{--                            <p>{{ $book->review }}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                @endforeach
            @endif
{{--                @if(count($books) > 0)--}}
{{--                @foreach($books as $book)--}}
{{--                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                        <div class="icon-box iconbox-blue">--}}
{{--                            <div class="icon">--}}
{{--                                --}}{{--                                  <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                --}}{{--                                      <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>--}}
{{--                                --}}{{--                                  </svg>--}}
{{--                                --}}{{--                                  <i class="bx bxl-dribbble"></i>--}}
{{--                                --}}{{--                                  {{ $book->title }}--}}
{{--                                --}}{{--                                  <a href="/bookSheet/{{ $book->id }}"><img width="100" height="100" src={{ $book->book_cover_route }} alt="{{ $book->book_cover_route }}"></a>--}}
{{--                                <a href="/bookSheet/{{ $book->id }}"><img width="100" height="100" src={{ $book->book_cover_route }} alt="{{ $book->book_cover_route }}"></a>--}}
{{--                                --}}{{--                                  <img width="100" height="100" src={{ $book->book_cover_route }} alt="{{ $book->book_cover_route }}">--}}
{{--                            </div>--}}
{{--                            <h4><a href="">{{ $book->title }}</a></h4>--}}
{{--                            --}}{{--                              <p>{{ $book->title }}</p>--}}
{{--                            --}}{{--                              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>--}}
{{--                            <p>{{ $book->review }}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--Usar este--}}
{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="/assets/img/books/covers/default.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Titulo</h4>--}}
{{--                <p>Autor</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}


{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>App 1</h4>--}}
{{--                <p>App</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}


{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Web 3</h4>--}}
{{--                <p>Web</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>App 2</h4>--}}
{{--                <p>App</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Card 2</h4>--}}
{{--                <p>Card</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Web 2</h4>--}}
{{--                <p>Web</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>App 3</h4>--}}
{{--                <p>App</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Card 1</h4>--}}
{{--                <p>Card</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Card 3</h4>--}}
{{--                <p>Card</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4>Web 3</h4>--}}
{{--                <p>Web</p>--}}
{{--                <div class="portfolio-links">--}}
{{--                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>--}}
{{--                  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

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
