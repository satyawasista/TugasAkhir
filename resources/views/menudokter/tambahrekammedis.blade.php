@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Rekam Medis Umum</li>
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
        <form action="/simpanrekammedis/{{ $data->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
          @csrf
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Nomor Identitas</label>
          <input type="number" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->identity_card }}" readonly>
          <input type="hidden" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Nama</label>
          <input type="text" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->name }}" readonly>
          <input type="hidden" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->address }}" readonly>
          <input type="hidden" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
          <input type="text" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->gender }}" readonly>
          <input type="hidden" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Dokter</label>
          <input type="text" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $dokter->name }}" readonly>
          <input type="hidden" name="id_user" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $dokter->id }} " readonly>
        </div>
        <div></div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Tensi</label>
            <div class="input-group">
              <input type="number" name="tension" class="form-control" placeholder="masukan tnsi" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <span class="input-group-text" id="basic-addon2">mmHg</span>
            </div>
            @foreach ($errors->get('tension') as $message) 
            <p class="text-danger">{{ $message }}</p>
            @endforeach
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Suhu Tubuh</label>
            <div class="input-group">
              <input type="number" name="body_temp"  class="form-control" placeholder="masukan suhu tubuh" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <span class="input-group-text" id="basic-addon2">*C</span>
            </div>
            @foreach ($errors->get('body_temp') as $message) 
            <p class="text-danger">{{ $message }}</p>
            @endforeach
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Alergi</label>
            <input type="text" name="allergic" class="form-control" id="exampleFormControlInput1" placeholder="masukan alamat">
            @foreach ($errors->get('allergic') as $message) 
            <p class="text-danger">{{ $message }}</p>
            @endforeach
          </div>
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
            <textarea name="anamnesa" class="form-control" id="exampleFormControlTextarea1" rows="3"placeholder="Keluhan pasien"></textarea>
            @foreach ($errors->get('anamnesa') as $message) 
            <p class="text-danger">{{ $message }}</p>
            @endforeach
          </div>
          <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label">Diagnosis</label>
            <textarea name="diagnosis" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Diagnosa penyakit"></textarea>
            @foreach ($errors->get('diagnosis') as $message) 
            <p class="text-danger">{{ $message }}</p>
            @endforeach
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi"></textarea>
            @foreach ($errors->get('description') as $message) 
            <p class="text-danger">{{ $message }}</p>
            @endforeach
          </div>
          <div class="col-md-20">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/data-kunjungan-pasien" class="btn btn-dark">Batal</a>
          </div>
          </form>
      </div>
    </div>
    </div>
</section>
@endsection

