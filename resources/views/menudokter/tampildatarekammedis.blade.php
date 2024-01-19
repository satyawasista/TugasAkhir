@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Data Rekam Medis Umum</li>
      </ol>
    </nav>
@endsection
@section('content')
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
    </div>
    <div class="card mb-3">
      <div class="card-body">
        <form action="/editdatarekammedis/{{ $data->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
          @csrf
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Nomor Identitas</label>
          <input type="number" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->identity_card }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Nama</label>
          <input type="text"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->name }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->address }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6 mb-4">
          <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
          <input type="text"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->gender }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Tensi</label>
            <div class="input-group">
              <input type="number" name="tension" value="{{ $data->tension }}" class="form-control" placeholder="masukan tensi" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              <span class="input-group-text" id="basic-addon2">mmHg</span>
            </div>
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Suhu Tubuh</label>
            <div class="input-group">
              <input type="number" name="body_temp" value="{{ $data->body_temp }}"  class="form-control" placeholder="masukan suhu tubuh" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              <span class="input-group-text" id="basic-addon2">*C</span>
            </div>
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Alergi</label>
            <input type="text" name="allergic" class="form-control" id="exampleFormControlInput1" value="{{ $data->allergic }}" required>
          </div>
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
            <textarea name="anamnesa" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{ $data->anamnesa }}</textarea>
          </div>
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Diagnosis</label>
            <textarea name="diagnosis" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{ $data->diagnosis }}</textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{ $data->description }} </textarea>
          </div>
          <div class="col-md-20">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/data-kunjungan-pasien" class="btn btn-secondary">Batal</a>
          </div>
          </form>
      </div>
    </div>
    </div>
</section>
@endsection

