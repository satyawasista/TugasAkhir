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
  <link rel="stylesheet" href="{{ asset('PortoKlinik/assets/vendor/aos/aos.css" rel="stylesheet') }}">
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
        <div class="col-xs-12">
          <div class="card w-50 mt-4">
            <div class="card-body">
              <form action="/data-pasien-kunjungan-online" method="get">
                @csrf
                <div class="md-3">
                  <label for="exampleFormControlInput1" class="form-label">Pilih Tanggal Kunjungan</label>
                  <input type="hidden" class="form-control tglkunjungan" id="namatglkunjungan" name="search" value="{{ request('search') }}">
                  <input type="date" class="form-control tglkunjungan" id="inputtglkunjungan" name="tanggal" min="<?php echo date('Y-m-d'); ?>">
                  <div class="col-md-20 mt-3">
                    <button type="submit" class="btn btn-info">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              @if(session()->has('error'))
              <div class="alert alert-danger">{{ session()->get('error') }}</div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Pilihan</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no =1;   
              @endphp
              @foreach ($data as $index => $datapasien)
            <tr>
                <th scope="row">{{$index + $data-> firstItem() }}</th>
                <td>{{ $datapasien->name }}</td>
                <td>{{ $datapasien->gender }}</td>
                <td>{{ $datapasien->address }}</td>
                {{-- <td>{{ $datapasien->created_at->format('Y-m-d') }}</td> --}}
                <td>
                  <button type="button" id="btnmodal"  class="TambahAntrian btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-bs-id="{{ $datapasien->id }}" data-bs-name="{{ $datapasien->name }}">
                    <i class="fas fa-plus"></i> Kunjungan
                  </button>
                </td>
              </tr>
              @endforeach
      </tbody>
      </table>
      {{ $data->links() }}
      </div>
      </div>
      </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Kunjungan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3" method="POST" action="/simpanpendaftaranonline">
                @csrf
                <div class="">
                  <input type="hidden" class="form-control" id="inputid" name="id">
                  <input type="hidden" class="form-control" id="inputtgl" name="id">
                </div>
                <div class="col-md-4">
                  <label for="exampleFormControlInput1" class="form-label">No Kunjungan</label>
                  <input type="text" class="form-control" id="inputantrian" name="visitation_number" value="{{ $urut }}" readonly> 
                </div>
                <div class="md-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="inputname" name="name" readonly>
                  <input type="hidden" class="form-control" id="inputid_patient" name="id_patient">
                </div>
                <div class="md-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal Kunjungan</label>
                  <input type="text" class="form-control tglkunjungan" id="namatglkunjungan" name="created_at" value="{{ request('tanggal') }}" readonly>
                  <input type="hidden" class="form-control tglkunjungan" id="namatglkunjungan" name="updated_at" value="{{ request('tanggal') }}" readonly>
                </div>
                <div class="md-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Keluhan</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="">
                  <input type="hidden" class="form-control" id="inputid_patient" name="visitation_status" value="Menungggu">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button  type="submit" class="btn btn-info">Simpan</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('PortoKlinik/assets/js/main.js') }}"></script>
           <!--Jquery-->
           <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
           <script>
               $('.TambahAntrian').click(function(){
                 $('#staticBackdrop').modal()
                 var id = $(this).attr('data-bs-id')
                 var id_patient = $(this).attr('data-bs-id')
                 var antrian = $(this).attr('data-bs-id')
                 var name = $(this).attr('data-bs-name')
                 $('#inputid').val(id) 
                 $('#inputname').val(name)
                 $('#inputid_patient').val(id_patient) 
               })
           </script>

            <script>
              $(function () {
                $('.tglkunjungan').on('change', function () {
                  $.ajax({
                    url: '/datapasienkunjunganonline',
                    type: 'POST',
                    data: {
                      '_token': '{{ csrf_token() }}',
                      'tanggal': $('.tglkunjungan').val(),
                    },
                    success: function (data) {
                      console.log(data);
                    }
                  });
                });
              });
            </script>
           
            
            
            
            
            
            
</body>

</html>