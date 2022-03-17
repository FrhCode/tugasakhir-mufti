<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sipepsi - Sistem diagnosa penyakit epilepsi</title>
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
          <li class="active"><a href="/">Beranda</a></li>
          <li><a href="/tentang">Tentang</a></li>
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
    <div class="container">
      <h1 class="d-inline">Sipepsi</h1>
      <h2>sistem pakar otomatis pendiagnosa penyakit epilepsi</h2>
      <a href="/login" class="btn-get-started scrollto">Mulai Diagnosa</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Mengapa Memilih Sipepsi?</h3>
              <p>
                Sipepsi merupakan sistem pakar pendiagnosa penyakit epilepsi berbasis metode certainty factor. Untuk tetap menjadi yang terdepan, kami memegang 3 pilar utama pada setiap layanan Sipepsi.
              </p>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-hand-point-up"></i>
                    <h4>Mudah</h4>
                    <p>Kami membuat tampilan dan alur penggunaan sistem semudah mungkin agar dapat digunakan oleh berbagai kalangan.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-user-check"></i>
                    <h4>Terpercaya</h4>
                    <p>Informasi dan hasil diagnosa yang dihasilkan sistem akan selalu akurat dan terpercaya, karena telah dikonsultasikan bersama para ahli khusus.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fas fa-lock"></i>
                    <h4>Aman</h4>
                    <p>Seluruh data pengguna yang disimpan dalam sistem Sipepsi telah dienkripsi dengan berbagai lapisan keamanan, sehingga privasi Anda tetap terjaga.</p>
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

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Sipepsi memberikan layanan kesehatan yang cepat, efisien, namun tetap akurat sehingga dapat menghemat waktu dan biaya pengguna.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4><a href="">Diagnosa</a></h4>
              <p>Diagnosa epilepsi dengan cepat dan efisien menggunakan metode certainty factor</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-prescription"></i></div>
              <h4><a href="">Basis Pengetahuan</a></h4>
              <p>Dapatkan berbagai informasi yang Anda butuhkan tentang epilepsi dan berbagai gejalanya</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-connection"></i></div>
              <h4><a href="">Platform</a></h4>
              <p>Sipepsi menjadi platform diagnosis epilepsi pertama di Indonesia, memudahkan koneksi para pakar dan pasien/pengguna.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

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
          &copy; Copyright <strong><span>Sipepsi</span></strong> 2021. All Rights Reserved
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