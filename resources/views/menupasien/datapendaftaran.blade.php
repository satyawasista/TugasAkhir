<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bunda Setia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .center {
        display: flex;
        justify-content: center;
        height: 100vh;
        align-items: center;
        }
    </style>
</head>
  <body>
    <div class="center">
      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title text-center">Klinik Bunda Setia</h5>
          <p class="card-text">Terima kasih telah melakukan pendaftaran online, anda telah terdaftar sebagai pasien dengan:</p>
          <table class="table ">
            <tr>
                <th>Nama</th>
                <td>{{ $data->patient->name }}</td>
            </tr>
            <tr>
              <th>Nomor Kunjungan</th>
              <td>{{ $data->visitation_number }}</td>
          </tr>
          <tr>
            <th>Keluhan</th>
            <td>{{ $data->description }}</td>
        </tr>
          <tr>
            <th>Tanggal Kunjungan</th>
            <td>{{ $data->created_at->format('Y-m-d') }}</td>
        </tr>
          </table>
          <p class="card-text">Mohon datang tepat waktu, untuk konfirmasi dibagian pendaftaran.</p>
        </div>
      </div>
    </div>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>window.print()</script>  
  </body>
</html>