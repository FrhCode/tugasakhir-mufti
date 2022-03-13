<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPEPSI - Sistem Pendiagnosa Penyakit Epilepsi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{asset("assets_medilab/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/icofont/icofont.min.css" )}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/boxicons/css/boxicons.min.css" )}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/venobox/venobox.css" )}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/animate.css/animate.min.css" )}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/remixicon/remixicon.css" )}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/owl.carousel/assets/owl.carousel.min.css" )}} rel="stylesheet">
  <link href={{asset("assets_medilab/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" )}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{asset("assets_medilab/css/style.css" )}} rel="stylesheet">
  {{-- FontAwesome CDN --}}
  <script src="https://kit.fontawesome.com/9f89dbaa52.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top bg-primary">
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">SIPEPSI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="active"><a href="/tentang">About</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      @if (Auth::check())
        <a href="/dashboard" class="appointment-btn scrollto">Dashboard</a>  
      @else
        <a href="/login" class="appointment-btn scrollto">Sign In</a> 
      @endif

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    {{-- <div class="container">
      <h1 class="d-inline"></h1>
      <h2></h2>
      <a href="/login" class="btn-get-started scrollto"></a>
    </div> --}}
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>About Application</h3>
              <p>
                Aplikasi SIPEPSI merupakan aplikasi berbasis web yang termasuk ke dalam sistem pakar menggunakan metode certainty factor dan Bahasa Pemrograman PHP dengan Framework Laravel.
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-disease"></i>
                    <h4>Epilepsy</h4>
                    <p>Epilepsi merupakan kumpulan gejala atau tanda klinis yang muncul disebabkan gangguan fungsi otak secara intermiten, yang terjadi akibat lepasnya muatan listrik abnormal atau berlebihan.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fab fa-ubuntu"></i>
                    <h4>Expert System</h4>
                    <p>Expert system atau Sistem pakar merupakan suatu aplikasi komputer yang bertujuan untuk memecahkan persoalan di bidang tertentu dengan mengadopsi pengetahuan dari seorang pakar.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-industry"></i>
                    <h4>Certainty Factor</h4>
                    <p>Certainty factor merupakan nilai parameter klinis yang diberikan oleh MYCIN untuk menunjukkan besarnya kepercayaan. Metode ini diperkenalkan oleh Shortlife Buchanan.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        {{-- <div class="section-title">
          <h2></h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4><a href=""></a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-prescription"></i></div>
              <h4><a href=""></a></h4>
              <p></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-connection"></i></div>
              <h4><a href=""></a></h4>
              <p></p>
            </div>
          </div>
        </div> --}}

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">
        <div class="section-title">
          <h2>Quotes</h2>
          <p>Kumpulan kata yang menginspirasi developer dalam pembuatan Aplikasi SIPEPSI.</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Bill Gates</h4>
                <span>Pendiri Microsoft</span>
                <p>“It’s fine to celebrate success but it is more important to heed the lessons of failure</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walt Disney</h4>
                <span>Produser Film</span>
                <p>“Why worry? If you’ve done the very best you can, then worrying won’t make it any better.”</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Steve Jobs</h4>
                <span>Pendiri Apple</span>
                <p>"The only way to do great work is to love what you do. If you haven’t found it yet, keep looking. Don’t settle."</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mark Zuckerberg</h4>
                <span>Pendiri Facebook</span>
                <p>"The biggest risk is not taking any risk. In a world that changing really quickly, the only strategy that is guaranteed to fail is not taking risks."</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>dr. H. R.M. Willy Indrawilis, Sp.KJ</h3>
              <h4>Dokter Spesialis Jiwa (Psikiatri)</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Jangan pernah menunda pekerjaan."
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>dr. Johnson Manurung, Sp.PD</h3>
              <h4>Dokter Spesialis Penyakit Dalam</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Kerjakan apa yang bisa dilakukan sekarang"
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>dr. Yanti Widamayanti, Sp.PD</h3>
              <h4>Dokter Spesialis Penyakit Dalam</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Pengabdian dan ketenangan merupakan kunci dari kehidupan"
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>dr. Ridwan Sofyansyah, Sp.JP</h3>
              <h4>Dokter Spesialis Jantung dan Pembuluh Darah</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Gunakan masa mudamu sebagai pengalaman dan jatah dari kegagalanmu"
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3></h3>
              <h4>dr. Hadiyana Suryadi, Sp.B</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                "Belajar dari pengalamanmu dan pengalaman orang lain."
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SIPEPSI</span></strong> 2021. All Rights Reserved
        </div>
        {{-- <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset("assets_medilab/vendor/jquery/jquery.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/jquery.easing/jquery.easing.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/php-email-form/validate.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/venobox/venobox.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/waypoints/jquery.waypoints.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/counterup/counterup.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/owl.carousel/owl.carousel.min.js") }}></script>
  <script src={{ asset("assets_medilab/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js") }}></script>

  <!-- Template Main JS File -->
  <script src={{ asset("assets_medilab/js/main.js")}}></script>

</body>

</html>