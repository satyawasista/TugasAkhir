@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
        <form class="row g-3" action="/edituser/{{ $data->id }}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nama User</label>
          <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $data->name }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{ $data->email }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleFormControlInput1" value="{{ $data->password }}" required>
        </div>
        <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
            <input type="date" name="birth_date" class="form-control" id="exampleFormControlInput1" value="{{ $data->birth_date }}" required>
          </div>
          <div class="col-md-4">
              <label>Jenis Kelamin</label>
              <select class="form-control select2" name="gender" style="width: 100%;">
                <option selected>{{ $data->gender }}</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text" name="address" class="form-control" id="exampleFormControlInput1" value="{{ $data->address }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Kontak user</label>
          <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" value="{{ $data->phone }}" required>
        </div>
        <div class="col-md-4">
              <label>Level User</label>
              <select class="form-control select2" name="level" style="width: 100%;">
                <option selected>{{ $data->level }}</option>
                <option value="Dokter">Dokter</option>
                <option value="Petugas">Petugas</option>
              </select>
          </div>
          <div class="col-md-4">
            <label>Status</label>
            <select class="form-control select2" name="status" style="width: 100%;">
              <option selected>{{ $data->status }}</option>
              <option value="Aktif">Aktif</option>
              <option value="Nonaktif">Nonaktif</option>
            </select>
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
