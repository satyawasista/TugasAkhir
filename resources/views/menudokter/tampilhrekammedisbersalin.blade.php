@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Rekam Medis Persalinan</li>
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
        <form action="/editdatarekammedisbersalin/{{ $data->id }}" method="POST" class="row g-3" enctype="multipart/form-data">
          @csrf
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Nomor Identitas</label>
          <input type="number" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->identity_card }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->name }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
          <input type="text" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->birth_date }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id }}" readonly>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->patient->address }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id }}" readonly>
        </div>
        <div class="col-md-6 ">
          <label for="exampleFormControlInput1" class="form-label">Dokter</label>
          <input type="text" class="form-control" id="id_patient exampleFormControlInput1" value="{{ Auth::user()->name }}" readonly>
          <input type="hidden" name="id_user" class="form-control" id="id_patient exampleFormControlInput1" value="{{ Auth::user()->id }} " readonly>
        </div>
        <div class="col-md-6 mb-4">
          <label for="exampleFormControlInput1" class="form-label">Masuk Kamar Bersalin</label>
          <input type="date" name="delivery_room" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->delivery_room }}" required>
        </div>
        <h3>Anamnesa</h3>
        <div class="col-md-3">
          <label for="exampleFormControlInput1" class="form-label">His Mulai</label>
          <input type="datetime-local" name="his_start" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->his_start }}" required>
        </div>
        <div class="col-md-3">
          <label>Keluar Darah</label>
          <select class="form-control select2" name="bleeding" style="width: 100%;">
            <option selected>{{ $data->bleeding }}</option>
            <option value="Iya">Iya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="col-md-3">
          <label>Keluar Lendir</label>
          <select class="form-control select2" name="mucus_discharge" style="width: 100%;">
            <option selected>{{ $data->mucus_discharge }}</option>
            <option value="Iya">Iya</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        <div class="col-md-3">
          <label>Ketuban</label>
          <select class="form-control select2" name="amniotic" style="width: 100%;">
            <option selected>{{ $data->amniotic }}</option>
            <option value="Belum">Belum</option>
            <option value="Pecah">Pecah</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Keluhan Lain</label>
          <textarea class="form-control" name="other_complaints" id="exampleFormControlTextarea1" rows="3" required>{{ $data->other_complaints }}</textarea>
        </div>
        <h3>Keadaan Umum</h3>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Tensi</label>
          <div class="input-group">
            <input type="number" name="tension" value="{{ $data->tension }}" class="form-control" placeholder="masukan tensi" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">mmHg</span>
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Suhu</label>
          <div class="input-group">
            <input type="number" name="temprature" value="{{ $data->temprature }}" class="form-control" placeholder="masukan suhu" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">*C</span>
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nadi</label>
          <div class="input-group">
            <input type="number" name="pulse" value="{{ $data->pulse }}" class="form-control" placeholder="masukan denyut nadi" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">X/Menit</span>
          </div>
        </div>
        <div class="col-md-6">
          <label for="exampleFormControlInput1" class="form-label">Odema</label>
          <input type="text" name="odema" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->odema }}" placeholder="Masukan odema" required>
        </div>
        <div class="col-md-3">
          <label for="exampleFormControlInput1" class="form-label">Hemoglobin</label>
          <div class="input-group">
            <input type="number"  name="hemoglobin" value="{{ $data->hemoglobin }}" class="form-control" placeholder="masukan usia hemoglobin" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">Gr%</span>
          </div>
        </div>
        <div class="col-md-3">
          <label>Protein Urine</label>
          <select class="form-control select2" name="protein_urien" style="width: 100%;">
            <option selected>{{ $data->protein_urien }}</option>
            <option value="Negatif">Negatif</option>
            <option value="Positif">Positif</option>
          </select>
        </div>
        <h3>Pemeriksaan Obstetri</h3>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">TFU</label>
          <div class="input-group">
            <input type="number" name="fundus_uteri" value="{{ $data->fundus_uteri }}" class="form-control" placeholder="masukan tfu" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">Cm</span>
          </div>
        </div>
        <div class="col-md-4">
          <label>Posisi Kepala</label>
          <select class="form-control select2" name="baby_position" style="width: 100%;">
            <option selected>{{ $data->baby_position}}</option>
            <option value="Anterior">Anterior</option>
            <option value="Posterior">Posterior</option>
            <option value="Sungsang">Sungsang</option>
            <option value="SungsangPenuh">SungsangPenuh</option>
            <option value="SungsangLengkung">SungsangLengkung</option>
            <option value="SungsangLonjong">SungsangLonjong</option>
            <option value="Asinklitik">Asinklitik</option>
          </select>
          @foreach ($errors->get('baby_position') as $message) 
          <p class="text-danger">{{ $message }}</p>
          @endforeach
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">DJJ</label>
          <div class="input-group">
            <input type="number" name="baby_heart_rate" value="{{ $data->baby_heart_rate }}" class="form-control" placeholder="masukan djj" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">X/Menit</span>
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">His Dalam "10"</label>
          <div class="input-group">
            <input type="number" name="his" value="{{ $data->his }}" class="form-control" placeholder="masukan his dalam 10" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">X</span>
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Lama His</label>
          <div class="input-group">
            <input type="number" name="his_duration" value="{{ $data->his_duration }}" class="form-control" placeholder="masukan lama his" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
            <span class="input-group-text" id="basic-addon2">Detik</span>
          </div>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Vt</label>
          <input type="datetime-local" name="vt" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->vt }}" required>
        </div>
        <div class="">
          <label for="exampleFormControlTextarea1" class="form-label">VT Hasil</label>
          <textarea class="form-control" name="vt_result" id="exampleFormControlTextarea1" rows="3" required>{{ $data->vt_result }}</textarea>
        </div>
        <div class="">
          <label for="exampleFormControlTextarea1" class="form-label">Analisa/Diagnose</label>
          <textarea class="form-control" name="doagnose" id="exampleFormControlTextarea1" rows="3" required>{{ $data->doagnose }}</textarea>
        </div>
        <div class="">
          <label for="exampleFormControlTextarea1" class="form-label">Terapi</label>
          <textarea class="form-control" name="therapy" id="exampleFormControlTextarea1" rows="3" required>{{ $data->therapy }}</textarea>
        </div>
        <div class="col-md-6 mb-5">
          <label>Kamar Bersalin</label>
          <select class="form-control select2" name="verlos_kamer" style="width: 100%;">
            <option selected>{{ $data->verlos_kamer }}</option>
            <option value="VK I">VK I</option>
            <option value="VK II">VK II</option>
          </select>
        </div>
        <div class="col-md-6 mb-5">
          <label>Tipe Kamar</label>
          <select class="form-control select2" name="room_type" style="width: 100%;">
            <option selected>{{ $data->room_type }}</option>
            <option value="VIP">VIP</option>
            <option value="Kelas I">Kelas I</option>
            <option value="Kelas II">Kelas II</option>
          </select>
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

