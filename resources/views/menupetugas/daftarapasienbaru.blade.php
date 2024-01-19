@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Pasien</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
    </div>
    <div class="card">
      <div class="card-body">
        <form class="row g-3" action="/insertdata" method="POST" enctype="multipart/form-data">
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
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      </div>
    </div>
    </div>
</section>
@endsection

