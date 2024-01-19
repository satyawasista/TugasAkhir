@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
    </div>
    <div class="card">
    <div class="card-body" >
        <form class="row g-3" action="/insertuser" method="POST" enctype="multipart/form-data">
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
              <label>Jenis Kelamin</label>
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
          <label for="exampleFormControlInput1" class="form-label">Kontak user</label>
          <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak">
          @foreach ($errors->get('phone') as $message) 
          <p class="text-danger">{{ $message }}</p>
          @endforeach
        </div>
        <div class="col-md-4">
              <label>Level User</label>
              <select class="form-control select2" name="level" style="width: 100%;">
                <option selected>Level User</option>
                <option value="Dokter">Dokter</option>
                <option value="Petugas">Petugas</option>
              </select>
              @foreach ($errors->get('level') as $message) 
          <p class="text-danger">{{ $message }}</p>
          @endforeach
          </div>
        <div class="col-md-20">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/data-user" type="submit" class="btn btn-secondary">Batal</a>
        </div>
        </div>
      </div>
      </form>
    </div>
</section>
@endsection
