@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pendaftaran Pasien persalinan</li>
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
        <form class="row g-3" action="/simpanpasienbersalin/{{ $data->id }}" method="POST" enctype="multipart/form-data">
          @csrf

          <h5 class="ml-2"><b>Data Pasien</b></h5>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nomor Identitas Pasien</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ $data->identity_card }}" readonly >
          <input type="hidden" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->name }}" readonly>
          <input type="hidden" name="id_patient" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Alamat Pasien</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $data->address}}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Pasien</label>
          <input type="date" class="form-control" id="exampleFormControlInput1" value="{{ $data->birth_date }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Kontak Pasien</label>
          <input type="number" class="form-control" id="exampleFormControlInput1" value="{{ $data->phone }}" readonly>
          <input type="hidden"  class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>
        <div class="col-md-4">
          <label for="exampleFormControlInput1" class="form-label">Email Pasien</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ $data->email }}" readonly>
          <input type="hidden" class="form-control" id="id_patient exampleFormControlInput1" value="{{ $data->id  }}" readonly>
        </div>

        <h5 class="ml-2"><b>Data Keluarga</b></h5>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Nomor Identitas Keluarga</label>
        <input type="number" name="identity_number_family" class="form-control" id="exampleFormControlInput1" placeholder="masukan nomor identitas suami">
        @foreach ($errors->get('identity_number_family') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Nama Keluarga </label>
        <input type="text" name="name_family" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama suami">
        @foreach ($errors->get('name_family') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir Keluarga</label>
        <input type="date" name="birth_date_family" class="form-control" id="exampleFormControlInput1" placeholder="masukan tanggal lahir suami">
        @foreach ($errors->get('birth_date_family') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Alamat Keluarga</label>
        <input type="text" name="address_family" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak suami">
        @foreach ($errors->get('address_family') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Kontak Keluarga</label>
        <input type="number" name="phone_family" class="form-control" id="exampleFormControlInput1" placeholder="masukan kontak suami">
        @foreach ($errors->get('phone_family') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-4">
        <label>Hubungan</label>
        <select class="form-control select2" name="sibling_relationship" style="width: 100%;">
          <option selected>Hubungan</option>
          <option value="Suami">Suami</option>
          <option value="Orang Tua">Orang Tua</option>
          <option value="Kakak">Kakak</option>
          <option value="Adik">Adik</option>
        </select>
        @foreach ($errors->get('sibling_relationship') as $message) 
      <p class="text-danger">{{ $message }}</p>
      @endforeach
      </div>

      <h5 class="ml-2"><b>Data Lainnya</b></h5>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">HPL</label>
        <input type="date" name="hpl" class="form-control" id="exampleFormControlInput1">
        @foreach ($errors->get('hpl') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Usia Kehamilan</label>
      <div class="input-group">
        <input type="number" name="gestational_age" class="form-control" placeholder="masukan usia Kehamilan" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">Minggu</span>
      </div>
        @foreach ($errors->get('gestational_age') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
    </div>
      <div class="col-md-4">
        <label for="exampleFormControlInput1" class="form-label">Kehamilan Sebelumnya</label>
        <div class="input-group">
          <span class="input-group-text">Kehamilan yang ke</span>
          <input type="number" name="previouse_pregnancies" class="form-control" placeholder="masukan usia Kehamilan" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>
        @foreach ($errors->get('previouse_pregnancies') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
    </div>
      <div class="col-md-">
        <label for="exampleFormControlInput1" class="form-label">Alergi</label>
        <input type="text" name="allergic" class="form-control" id="exampleFormControlInput1" placeholder="alergi pasien">
        @foreach ($errors->get('allergic') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-">
        <label for="exampleFormControlInput1" class="form-label">Riwayat Operasi</label>
        <input type="text" name="surgery_history" class="form-control" id="exampleFormControlInput1" placeholder="riwayat operasi pasien">
        @foreach ($errors->get('surgery_history') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="col-md-">
        <label for="exampleFormControlInput1" class="form-label">Penyakit Bawaan</label>
        <input type="text" name="underlying_diseases" class="form-control" id="exampleFormControlInput1" placeholder="riwayat penyakit bawaan pasien">
        @foreach ($errors->get('underlying_diseases') as $message) 
        <p class="text-danger">{{ $message }}</p>
        @endforeach
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Dokter</label>
        <select class="form-control select2" name="id_user" id="id_user">
          <option disabled value>Pilih Dokter</option>
          @foreach ($dokter as $dokter)
            <option value="{{ $dokter->id }}">{{ $dokter->name }}</option>  
          @endforeach
        </select>
      </div>
        <div class="col-md-20 mt-5">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="/data-kunjungan-pasien" class="btn btn-secondary">Batal</a>
        </div>
      </form>
      </div>
    </div>
  </div>
</section>
@endsection

