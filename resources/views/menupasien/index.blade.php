<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bunda Setia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{ asset ('img/Iconklinik.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/glightbox/css/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/swiper/swiper-bundle.min.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('PortoKlinik/assets/css/style.css') }}">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #header {
    background: #ffffff;
    transition: all 0.5s;
    z-index: 997;
    padding: 20px 0;
    top: 20px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);  
    }
    #topbar {
    background: #3fbbc0;
    color: #fff;
    height: 20px;
    font-size: 16px;
    font-weight: 600;
    z-index: 996;
    transition: all 0.5s;
    }
    #hero .container {
    text-align: center;
    background: rgba(255, 255, 255, 0.9);
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 50px;
    border-top: 4px solid #3fbbc0;
   }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top topbar">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
      </div>
      <div class="d-flex align-items-center">
      </div>
    </div>
  </div>  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      {{-- <img src="{{ asset ('img/Iconklinik.png') }}" width="80" height="80" alt=""> --}}
      <a href="index.html" class="logo me-auto"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="/login" class="appointment-btn scrollto"><span class="d-none d-md-inline">Pendaftaran Online</span></a>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(PortoKlinik/assets/img/slide/slide1.png)">
          <div class="container">
            <h2>Klinik Bunda Setia</h2>
            <p>Selamat datang di klinik kami, tempat di mana Anda dapat menemukan perawatan kesehatan berkualitas tinggi dan tenaga medis yang terampil. Kami adalah klinik yang peduli pada kesehatan Anda, dengan memberikan solusi medis yang tepat dan terjangkau untuk menjaga kesehatan Anda dan keluarga.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>
    </div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Tentang Kami</h2>
          <p>
            Klinik Bunda Setia merupakan sebuah klinik yang memberikan layanan medis spesialis kandungan dan anak yang berada di Jl. Wisnu, Batannyuh, Kecamatan Marga, Kabupaten Tabanan. Kami telah berdiri dan beroperasi sejak tahun 2016 dan saat ini kami memiliki 3 dokter praktek serta 8 tenaga medis. 
        </p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="PortoKlinik/assets/img/aboutus.png" height="600" width="600" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p class="">
            Kami adalah klinik yang berfokus pada kesehatan reproduksi, khususnya perawatan kandungan dan anak. Kami memiliki tim medis yang terlatih dan berpengalaman dalam memberikan pelayanan yang berkualitas dan terpercaya. Kami berkomitmen untuk memberikan perawatan yang holistik dan personal kepada setiap pasien kami, dengan memperhatikan kebutuhan dan keinginan individu. Dengan fasilitas dan teknologi terkini, kami siap memberikan solusi terbaik untuk setiap masalah kesehatan reproduksi yang Anda alami.
          </p>
          <p> <b>Visi</b>
           kami adalah untuk menjadi klinik terdepan dalam memberikan layanan kesehatan yang berfokus pada kebutuhan pasien. Kami berkomitmen untuk memberikan pengalaman klinik yang aman, nyaman, dan memuaskan bagi semua pasien kami.
          </p>
          <p> <b>Misi</b>
          kami adalah memberikan pelayanan kesehatan yang berkualitas dan terpercaya bagi semua pasien, dengan menyediakan layanan kesehatan yang komprehensif dan terjangkau untuk semua lapisan masyarakat. Kami memprioritaskan kepuasan pasien melalui pelayanan yang ramah, profesional, dan efektif, serta menggunakan teknologi terkini dan fasilitas yang modern untuk meningkatkan kualitas layanan kesehatan. Kami berkomitmen untuk melakukan inovasi dan pengembangan layanan kesehatan guna memenuhi kebutuhan pasien secara berkelanjutan.
          </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-user-doctor"></i></div>
            <h4 class="title"><a href="">Konsultasi Kesehatan</a></h4>
            <p class="description">Kami memiliki tim dokter ahli yang siap memberikan solusi terbaik untuk masalah kesehatan Anda</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Pemeriksaan Umum</a></h4>
            <p class="description">Periksa kesehatan Anda secara rutin dengan layanan pemeriksaan umum di klinik kami. </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-person-pregnant"></i></div>
            <h4 class="title"><a href="">Periksa Kehamilan</a></h4>
            <p class="description"> Dapatkan perawatan yang tepat dan terpercaya untuk kehamilan Anda dengan klinik kami.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fa-solid fa-bed-pulse"></i></div>
            <h4 class="title"><a href="">Persalinan</a></h4>
            <p class="description">Menyambut kehadiran buah hati Anda dengan layanan persalinan terbaik di klinik kami.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fa-solid fa-pills"></i></div>
            <h4 class="title"><a href="">KB</a></h4>
            <p class="description">Jaga kesehatan reproduksi Anda dan keluarga dengan layanan KB terbaik di klinik kami. </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fa-solid fa-baby"></i></div>
            <h4 class="title"><a href="">Imunisasi</a></h4>
            <p class="description">Kami memberikan pelayanan imunisasi yang berkualitas dan efektif untuk semua anggota keluarga Anda.</p>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Kami siap membantu Anda dengan segala kebutuhan kesehatan. Hubungi kami melalui nomor telepon, email dan alamt yang tersedia untuk memperoleh informasi lebih lanjut tentang layanan kami. Anda Sakit Ingat Klinik Bunda Setia. </p>
        </div>

      </div>
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Wisnu Marga, Batannyuh, Marga, Kabupaten Tabanan, Bali 82181, Indonesia</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email </h3>
                  <a href="mailto:klinikbundasetia@gmail.com">klinikbundasetia@gmail.com</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>kontak</h3>
                  <a href="whatsapp://send?text=Hello&phone=+6282237174096">082 237 174 096</a>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6">
              <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.922707711512!2d115.1692141!3d-8.5012565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23b40e777e337%3A0x7bd6e3344b3370a7!2sKlinik%20Bunda%20Setia%20Tabanan!5e0!3m2!1sid!2sid!4v1679889552909!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <p>
               <img src="{{ asset ('img/Iconklinik.png') }}" width="200" height="200" alt="">
              </p>
              <div class="col-md-7">
              <div class="social-links mt-3 text-center">
                <a href="https://www.facebook.com/satya.wasista.5?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/satyawasistaa/"class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pendaftaran online</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pemeriksaan umu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pemeriksaan kandungan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Persalinan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kb</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Imunisasi</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Kepuasan anda tujuan
              layanan kami</h4>
            <p>Pelanggan adalah orang yang menerima jasa yang dijual oleh rumah sakit, merupakan tujuan utama memberikan layanan kesehatan, oleh karena itu pelanggan harus dilayani dengan penuh kasih sayang, ikhlas. bersemangat, dan jujur.</p>
            <p>Kesuksesan hanya dapat dicapai dengan membangun Superteam, yang memiliki rasa kebersamaan, kerja sama, integritas, jujur, terbuka dan disiplin, serta jiwa yang menjunjung tinggi nilai-nilai spiritual.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Klinik Bunda Setia</span></strong>. 2023
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('PortoKlinik/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('PortoKlinik/assets/js/main.js') }}"></script>

</body>

</html>