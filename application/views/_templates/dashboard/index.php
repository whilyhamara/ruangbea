<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ruang Beasiswa</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?=base_url()?>assets/frontend/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url() ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/frontend/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">Ruang Beasiswa</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block ">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home" class="scrollto">Home</a></li>
                <li><a href="#keunggulan" class="scrollto">Keunggulan</a></li>
                <li><a href="#layanan" class="scrollto">Layanan</a></li>
                <li><a href="#panduan" class="scrollto">Panduan</a></li>
                <li><a href="#tentang" class="scrollto">Tentang </a></li>
                <li><a href="#kontak" class="scrollto">Kontak</a></li>
                <li class="active"><a href="<?= base_url() ?>auth/index" class="nav-link">Login</a></li>
              

              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
              data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>

    </header>

    

 <section id="home" class="wow fadeInUp">
    <main id="main">
      <div class="hero-section">
        <div class="wave">

          <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path
                  d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                  id="Path"></path>
              </g>
            </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right">Ruang Beasiswa</h1>
                  <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Ruang Beasiswa hadir dengan fitur lengkap, mulai dari materi, soal dan pembahasan. Pilih Layanan dan mulai belajar sekarang juga!</p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#"
                      class="btn btn-outline-white">DAFTAR SEKARANG!</a></p>
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="<?= base_url() ?>assets/frontend/img/beasiswa.jpg" alt="Image" class="phone-1" data-aos="fade-right">
                
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
 </section>


 <section id="keunggulan" class="wow fadeInUp">
      <div class="site-section">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Keunggulan</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-users"></span>
                </div>
                <h3 class="mb-3">Keunggulan</h3>
                <p>website ini dibuat oleh makaryo studio</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-toggle-off"></span>
                </div>
                <h3 class="mb-3">Keunggulan</h3>
                <p>website ini dibuat oleh makaryo studio</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-umbrella"></span>
                </div>
                <h3 class="mb-3">Keunggulan</h3>
                <p>website ini dibuat oleh makaryo studio</p>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-users"></span>
                </div>
                <h3 class="mb-3">Keunggulan</h3>
                <p>website ini dibuat oleh makaryo studio</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-toggle-off"></span>
                </div>
                <h3 class="mb-3">Keunggulan</h3>
                <p>website ini dibuat oleh makaryo studio</p>
              </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-1 text-center">
                <div class="wrap-icon icon-1">
                  <span class="icon la la-umbrella"></span>
                </div>
                <h3 class="mb-3">Keunggulan</h3>
                <p>website ini dibuat oleh makaryo studio</p>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- .site-section -->
 </section>


 <section id="layanan" class="wow fadeInUp">
      <div class="site-section">
        <div class="container">
          
          <div class="row justify-content-center text-center">
            <div class="col-md-7 mb-5">
              <h2 class="section-heading">Paket Layanan</h2>
              <p>Ruang Beasiswa dilengkapi dengan pilihan beberapa paket layanan. Anda dapat memilih beberapa pilihan paket dengan rincian dibawah ini.</p>
            </div>
          </div>
          <div class="row align-items-stretch">

            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center">
                <span>&nbsp;</span>
                <h3>Gratis</h3>
                <ul class="list-unstyled">
                  <li>1x try out gratis</li>
                  <li>1x Pembahasan</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">Free</strong>
                  <p><a href="#" class="btn btn-white">Daftar</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center popular">
                <span class="popularity">Most Popular</span>
                <h3>Premium</h3>
                <ul class="list-unstyled">
                  <li>Materi</li>
                  <li>Latihan Soal</li>
                  <li>Pembahasan</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">Rp XXX.XXX/bulan</strong>
                  <p><a href="#" class="btn btn-white">Daftar</a></p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="pricing h-100 text-center">
                <span class="popularity">Best Value</span>
                <h3>Ultimate</h3>
                <ul class="list-unstyled">
                  <li>Materi</li>
                  <li>Latihan Soal</li>
                  <li>Pembahasan</li>
                </ul>
                <div class="price-cta">
                  <strong class="price">Rp XXX.XXX/bulan</strong>
                  <p><a href="#" class="btn btn-white">Daftar</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
 </section>


 <section id="panduan" class="wow fadeInUp">
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="col-md-6 mb-5">
              <h2 class="section-heading">Panduan Pendaftaran</h2>
              <img src="<?= base_url() ?>assets/frontend/img/pendaftaran.svg" alt="Image" class="img-fluid">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="step">
                <span class="number">01</span>
                <h3>Registrasi</h3>
                <p>Daftarkan diri anda melalui tombol "DAFTAR SEKARANG!" di tampilan Home.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">02</span>
                <h3>Lengkapi Profil</h3>
                <p>Lengkapi form yang akan muncul pada tampilan website.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="step">
                <span class="number">03</span>
                <h3>Nikmati Fitur</h3>
                <p>Anda dapat menikmati fitur sesuai dari paket layanan yang anda pilih.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->
 </section>

 <section id="tentang" class="wow fadeInUp">
      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 mr-auto">
              <h2 class="section-heading">Tentang Kami</h2>
              <p class="mb-4">Kami menyediakan Materi, Soal, dan Pembahasan tentang tes beasiswa.</p>
     
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="<?= base_url() ?>assets/frontend/img/tentangkami.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->
 </section>

 <section id="kontak" class="wow fadeInUp">
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4 ml-auto order-2">
              <h2 class="section-heading">Kontak Kami</h2>
              <p class="mb-4">Anda dapat menghubungi kami di</p>
              <p class="mb-4">Email: xxx@xxx.com</p>
              <p class="mb-4">WA/ Telp: 08XXXXXXXXX </p>
              <p class="mb-4">FB: xxxxxxxxx</p>
              <p class="mb-4">IG: xxxxxxxxx</p>

               <p class="social">
              <a href="#"><span class="icofont-whatsapp"></span></a>
              <a href="#"><span class="icofont-email"></span></a>
              <a href="#"><span class="icofont-facebook"></span></a>
              <a href="#"><span class="icofont-instagram"></span></a>
             
            </p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="<?= base_url() ?>assets/frontend/img/kontakkami.svg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div> <!-- .site-section -->
 </section>





      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>Nantikan Kami di</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#"
                  class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>







 <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h2 class="section-heading">Seputar Pertanyaan</h2>
          <p>Pertanyaan yang sering ditanyakan oleh pengguna</p>
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Bagaimana cara mendaftar di ruang beasiswa? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Website ini dibuat oleh makaryo studio
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Bagaimana cara mendaftar di ruang beasiswa? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                 Website ini dibuat oleh makaryo studio
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Bagaimana cara mendaftar di ruang beasiswa? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                 Website ini dibuat oleh makaryo studio
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Bagaimana cara mendaftar di ruang beasiswa? <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                 Website ini dibuat oleh makaryo studio
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Bagaimana cara mendaftar di ruang beasiswa? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                 Website ini dibuat oleh makaryo studio
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Bagaimana cara mendaftar di ruang beasiswa? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                 Website ini dibuat oleh makaryo studio
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- #faq -->

  </main>



 <section id="testimoni" class="wow fadeInUp">

      <div class="site-section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-4">
              <h2 class="section-heading">Testimoni</h2>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="owl-carousel testimonial-carousel">
                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Luar Biasa!</h3>
                  <blockquote>
                    <p> Website ini dibuat oleh makaryo studio</p>
                  </blockquote>



                  <p class="review-user">
                    <img src="<?= base_url() ?>assets/frontend/img/person_1.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">XXXXXX</span>, &mdash; Mahasiswa
                    </span>
                  </p>

                </div>

                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Mantab Banget!</h3>
                  <blockquote>
                    <p> Website ini dibuat oleh makaryo studio</p>
                  </blockquote>



                  <p class="review-user">
                    <img src="<?= base_url() ?>assets/frontend/img/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">XXXXX</span>, &mdash; Siswa
                    </span>
                  </p>

                </div>


                <div class="review text-center">
                  <p class="stars">
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star"></span>
                    <span class="icofont-star muted"></span>
                  </p>
                  <h3>Super Sekali!</h3>
                  <blockquote>
                    <p> Website ini dibuat oleh makaryo studio</p>
                  </blockquote>



                  <p class="review-user">
                    <img src="<?= base_url() ?>assets/frontend/img/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    <span class="d-block">
                      <span class="text-black">XXXXXX</span>, &mdash; Pengguna website
                    </span>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

 </section>



    </main>
    <footer class="footer" role="contentinfo">
      <div class="container">



        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <p class="copyright">&copy; Copyright Makaryo Studio. All Rights Reserved</p>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
              -->
              Designed by <a href="https://makaryostudio.com/">Makaryo Studio</a>
            </div>
          </div>
        </div>

      </div>
    </footer>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/sticky/sticky.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>assets/frontend/vendor/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/lib/mobile-nav/mobile-nav.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/frontend/js/main.js"></script>

</body>

</html>
