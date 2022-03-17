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
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Sipepsi</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Beranda</a></li>
          <li class="active"><a href="/tentang">Tentang</a></li>
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
              <h3>Tentang Aplikasi</h3>
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
                    <h4>Penyakit Epilepsi</h4>
                    <p>Epilepsi merupakan kumpulan gejala atau tanda klinis yang muncul disebabkan gangguan fungsi otak secara intermiten, yang terjadi akibat lepasnya muatan listrik abnormal atau berlebihan.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fab fa-ubuntu"></i>
                    <h4>Sistem Pakar</h4>
                    <p>Expert system atau Sistem pakar merupakan suatu aplikasi komputer yang bertujuan untuk memecahkan persoalan di bidang tertentu dengan mengadopsi pengetahuan dari seorang pakar.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-industry"></i>
                    <h4>Algoritma Certainty Factor</h4>
                    <p>Certainty factor merupakan nilai parameter klinis yang diberikan oleh MYCIN untuk menunjukkan besarnya kepercayaan. Metode ini diperkenalkan oleh Shortlife Buchanan.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

   <!-- ======= Doctors Section ======= -->
   <section id="doctors" class="doctors">
    <div class="container">
      <div class="section-title">
        <h2>Tenaga Ahli</h2>
        <p>Sipepsi merupakan aplikasi pendiagnosa yang telah disetujui oleh tenaga ahli penyakit saraf.</p>
      </div>
          <div class="member d-flex justify-content-center">
            <div class="py-5 text-center">
              <p class="pb-5">disetujui oleh</p>
              <h3>dr.Danny Sp.S</h3>
              <p>Dokter Spesialis Saraf</p>
              <hr>
              <p>RSUD dr.Slamet Garut</p>
            </div>
         
            {{-- <div class="member-info">
              <h4>dr.Danny Sp.S</h4>
              <span>Dokter Spesialis Saraf<br/>RSUD dr.Slamet Garut</span>
            </div> --}}
          </div>

    </div>
  </section><!-- End Doctors Section -->

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