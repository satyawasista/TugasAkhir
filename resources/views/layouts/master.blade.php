<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bunda Setia</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('img/Iconklinik.png') }}">
    <!--Cdn Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--Admin LTE-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
  </head>
  <body>
    <div class="wrapper">

      <!-- Load header-->
      @includeIf('layouts.header')
      
      <!-- Load sidebar-->
      @includeIf('layouts.sidebar')
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              @yield('title')
            </h1>
            <ol class="breadcrumb">
              @section('breadcrumc')
              @show
            </ol>
          </section>
      
          <!-- Main content -->
          <section class="content">
            <!-- content) -->
           @yield('content')
      
      
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
      <!-- load footer-->
      @includeIf('layouts.footer')
      
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!--sweet aletr-->
    @include('sweetalert::alert')
    <!--Jquery-->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--Admin LTE-->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
     <!--sweet aletr-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>