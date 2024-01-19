@extends('layouts.master')


@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data Pasien</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
    </div>
    <!-- /.box-header -->
    <div class="card">
    <div class="card-body">
      @if ($massage = Session::get('success'))
      <div class="alert alert-success" role="alert">
          {{ $massage }}
      </div>
      @endif
        <form action="/editdata/{{ $data->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
          @csrf
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nomor Identitas/KTP</label>
          <input type="number" name="identity_card" class="form-control" id="exampleFormControlInput1"  value="{{ $data->identity_card }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nama</label>
          <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $data->name }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text" name="address" class="form-control" id="exampleFormControlInput1" value="{{ $data->address }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
          <input type="date" name="birth_date" class="form-control" id="exampleFormControlInput1" value="{{ $data->birth_date }}" required>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control select2" name="gender" style="width: 100%;">
              <option selected>{{ $data->gender }}</option>
              <option value="laki-laki">laki-laki</option>
              <option value="perempuan">perempuan</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nomor Telepon Pasien</label>
          <input type="number" name="phone" class="form-control" id="exampleFormControlInput1" value="{{ $data->phone }}" required>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{ $data->email }}" required>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Status Data</label>
            <select class="form-control select2" name="status" style="width: 100%;">
              <option selected>{{ $data->status }}</option>
              <option value="Aktif">Aktif</option>
              <option value="Nonaktif">Nonaktif</option>
            </select>
          </div>
        </div>
        <div class="col-md-20">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/data-pasien" type="submit" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
    </div>
</section>
@endsection

