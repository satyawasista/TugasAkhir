@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail rekam medis Persalinan</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
    <div class="card">
    <div class="card-body">
    <table class="table table-bordered table-hover">
          <tr>
            <th>Dokter</th>
            <td>{{ $data->user->name }}</td>
          </tr>
          <tr>
            <th style="width: 35%;">Nomor Idenritas/KTP</th>
            <td style="width: 65%;">{{ $data->patient->identity_card }}</td>
          </tr>
          <tr>
            <th>Nama</th>
            <td>{{ $data->patient->name }}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $data->patient->birth_date }}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $data->patient->address }}</td>
          </tr>
          <tr>
            <th>Masuk Kamar Bersalin</th>
            <td>{{ $data->delivery_room }}</td>
          </tr>
          <tr>
            <th>His Mulai</th>
            <td>{{ $data->his_start }}</td>
          </tr>
          <tr>
            <th>Keluar Darah</th>
            <td>{{ $data->bleeding }}</td>
          </tr>
          <tr>
            <th>Keluar Lendir</th>
            <td>{{ $data->mucus_discharge }}</td>
          </tr>
          <tr>
            <th>Ketuban</th>
            <td>{{ $data->amniotic }}</td>
          </tr>
          <tr>
            <th>Keluhan Lain</th>
            <td>{{ $data->other_complaints }}</td>
          </tr>
          <tr>
            <th>Tensi</th>
            <td>{{ $data->tension }} mmHg</td>
          </tr>
          <tr>
            <th>Suhu</th>
            <td>{{ $data->temprature }} *C</td>
          </tr>
          <tr>
            <th>Nadi</th>
            <td>{{ $data->pulse }} X/Menit</td>
          </tr>
          <tr>
            <th>Odema</th>
            <td>{{ $data->odema }}</td>
          </tr>
          <tr>
            <th>Himoglobin</th>
            <td>{{ $data->hemoglobin }} Gr%</td>
          </tr>
          <tr>
            <th>Protein Urien</th>
            <td>{{ $data->protein_urien }}</td>
          </tr>
          <tr>
            <th>TFU</th>
            <td>{{ $data->fundus_uteri }} Cm</td>
          </tr>
          <tr>
            <th>Posisi Kepala</th>
            <td>{{ $data->baby_position}}</td>
          </tr>
          <tr>
            <th>Detak Jantung Janin</th>
            <td>{{ $data->baby_heart_rate }} X/Menit</td>
          </tr>
          <tr>
            <th>His Dalam "10"</th>
            <td>{{ $data->his }} X</td>
          </tr>
          <tr>
            <th>Lama His</th>
            <td>{{ $data->his_duration }} Detik</td>
          </tr>
          <tr>
            <th>Vt</th>
            <td>{{ $data->vt }}</td>
          </tr>
          <tr>
            <th>Vt Hasil</th>
            <td>{{ $data->vt_result }}</td>
          </tr>
          <tr>
            <th>Analisa/Diagnose</th>
            <td>{{ $data->doagnose }}</td>
          </tr>
          <tr>
            <th>Terapi</th>
            <td>{{ $data->therapy }}</td>
          </tr>
          <tr>
            <th>Kamar Bersali</th>
            <td>{{ $data->verlos_kamer }}</td>
          </tr>
          <tr>
            <th>Tipe Kamar</th>
            <td>{{ $data->room_type }}</td>
          </tr>
      </table>
      <div class="mt-5 mb-3">
      <a href="" onclick="history.back();return false;" type="submit" class="btn btn-secondary"><i class="fas fa-chevron-square-left text-dark"></i>Kembali</a>
    </div>
    </div>
</div>
</section>
@endsection

