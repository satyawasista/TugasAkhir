<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cetak Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
  <body>
    <div class="row">
      <div class="container">
        <table class="table table-bordered" style="width: 100%">
          <tr>
              <td align="center">
                <img src="{{ asset ('img/Iconklinik.png') }}" alt="Icon Klinik" height="100" width="100">
              </td>
              <td align="center">
                  <h4><b>KLINIK BUNDA SETIA</b></h4>
                  <p>Jl. Wisnu Marga, Batannyuh, Marga, Kabupaten Tabanan</p>
              </td>
              <td align="left">
                <p>Cetak: {{ date('d-m-y') }}</p>
            </td>
            </tr>
        </table>
        <hr class="line-title">
        <p align="center">
            LAPORAN KUNJUNGAN PASIEN PERSALINAN
        </p>
        <table class="table table-bordered" style="width: 100%">
        <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Nama Keluarga</th>
          <th scope="col">Kehamilan</th>
          <th scope="col">Tanggal Kunjungan</th>
        </tr>
        </thead>
        <tbody>
          @php
          $no =1;   
        @endphp
          @foreach ($cetakLaporan as $kunjungan)
     <tr>
      <th>{{ $no++ }}</th>
      <td>{{ $kunjungan->patient->name }}</td>
      <td>{{ $kunjungan->name_family }}</td>
      <td>Kehamilan yang ke {{ $kunjungan->previouse_pregnancies }}</td>
      <td>{{ $kunjungan->created_at->format('Y-m-d') }}</td>
      </tr>              
      @endforeach
        </tbody>
      </table>
    </div>
  </div>
    </div>
    <script>window.print()</script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>