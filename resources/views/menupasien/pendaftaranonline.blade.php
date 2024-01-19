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
  <!--Cdn Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
      <a href="index.html" class="logo me-auto"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <i class="bi bi-list mobile-nav-toggle"></i>
        <div class="pull-right">
          <a class="nav-link">{{ Auth::user()->name }}</a> 
       </div>
         <div class="pull-right">
           <a class="nav-link" href="/logout" type="center"> 
             <i class="fas fa-sign-out-alt nav-icon "></i>
           </a>
         </div>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2></h2>
        </div>
        <div class="row">
      <div class="card w-50 mt-4">
        <div class="card-body">
          <div class="col-auto mt-3">
            <form class="row g-3" action="/data-pasien-kunjungan-online" method="GET" enctype="multipart/form-data">
            <div class="col-md-8">
            <input type="search" name="search" id="exampleFormControlInput1" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari data" required>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-info mb-3"><i class="fas fa-search"></i></button>
            </div>
            <div id="emailHelp" class="form-text"><p class="fw-light"> Jika anda sudah pernah berkunjung, temukan data anda disini !!!.</p></div>
          </form>
          </div>
        </div>
      </div>
      <div class="card  mt-3">
        <div class="card-header">
          Jika Anda Pasien baru maka isi data anda disini
        </div>
        <div class="card-body">
          <form class="row g-3" action="/simpanpasienonline" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Nomor Identitas Pasien</label>
              <input type="number" name="identity_card" class="form-control" id="exampleFormControlInput1" placeholder="masukan nomor identitas pasien">
              @foreach ($errors->get('identity_card') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
            </div>
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
              <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama pasien">
              @foreach ($errors->get('name') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
            </div>
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Alamat Pasien</label>
              <input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="masukan alamat pasien">
              @foreach ($errors->get('address') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
            </div>
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Pasien</label>
              <input type="date" name="birth_date" class="form-control" id="exampleFormControlInput1" placeholder="masukan tanggal lahir">
              @foreach ($errors->get('birth_date') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
            </div>
            <div class="col-md-4">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" name="gender" style="width: 100%;">
                  <option selected>Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                @foreach ($errors->get('gender') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
              </div>
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Kontak Pasien</label>
              <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak pasien">
              @foreach ($errors->get('phone') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
            </div>
            <div class="col-md-4">
              <label for="exampleFormControlInput1" class="form-label">Email Pasien</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="masukan email pasien">
              @foreach ($errors->get('email') as $message) 
              <p class="text-danger">{{ $message }}</p>
              @endforeach
            </div>
            <input type="hidden" name="status" class="form-control" id="exampleFormControlInput1" value="Aktif">
          <div class="col-md-20 mt-5">
            <button type="submit" class="btn btn-info">Simpan</button>
          </div>
        </form>
        </div>
      </div>
        </div>
      </div>
    </section><!-- End About Us Section -->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>