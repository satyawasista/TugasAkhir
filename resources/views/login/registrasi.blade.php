<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bunda Setia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link rel="icon" type="image/x-icon" href="{{ asset ('img/Iconklinik.png') }}"> --}}

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
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
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
       {{-- <img src="{{ asset ('img/Iconklinik.png') }}" width="80" height="80" alt="">  --}}
      <a href="index.html" class="logo me-auto"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

 
    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        </div>
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
            </div>
            <div class="card mt-5">
              <div class="card-body" >
                  <form class="row g-3" action="/insertregistra" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Nama User</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama user">
                    @foreach ($errors->get('name') as $message) 
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="masukan email">
                    @foreach ($errors->get('email') as $message) 
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="masukan password">
                    @foreach ($errors->get('password') as $message) 
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="form-control" id="exampleFormControlInput1" placeholder="Masukan tanggal lahir">
                    @foreach ($errors->get('birth_date') as $message) 
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                    </div>
                    <div class="col-md-4">
                      <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select class="form-control select2" name="gender" style="width: 100%;">
                          <option selected>Jenis Kelamin</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                        @foreach ($errors->get('gender') as $message) 
                        <p class="text-danger">{{ $message }}</p>
                        @endforeach
                      </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="masukan alamat">
                    @foreach ($errors->get('address') as $message) 
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                  </div>
                  <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Telepon user</label>
                    <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak">
                    @foreach ($errors->get('phone') as $message) 
                    <p class="text-danger">{{ $message }}</p>
                    @endforeach
                  </div>
                  <div class="col-md-4">
                    <input type="hidden" name="level" value="Pasien" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak">
                  </div>
                  <div class="col-md-20 mt-4">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="/login" class="btn btn-secondary">Kembali</a>
                  </div>
                  </div>
                </div>
                </form>
          
            </div>
        </section>
      </div>
    </section><!-- End Services Section -->
  
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!--sweet aletr-->
    @include('sweetalert::alert')
  <!-- Vendor JS Files -->
  <script src="{{ asset('PortoKlinik/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('PortoKlinik/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Portoklinik/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('PortoKlinik/assets/js/main.js') }}"></script>

</body>

</html>
