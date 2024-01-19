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
    <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="{{ asset('img/iconLogin.jpg') }}" class="img-fluid rounded-start" alt="iconLogin">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <form action="/loginproses" method="post">
                @csrf
                <div class="text-center">
                   <h4> <b>LOGIN</b></h4>
                </div>
                <div class="mb-4 mt-5">
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div class="mb-4">
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3" style="">Login</button>
                <div>
                  <a href="/register">Belum punya akun ?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('sweetalert::alert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

