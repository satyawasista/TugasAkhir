@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Data Kunjungan Pasien persalinan</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
    <div class="card">
    <div class="card-body">
    <table class="table table-bordered table-hover">
          <tr>
            <th style="width: 35%;">Nomor Idenritas Pasien</th>
            <td style="width: 65%;">{{ $data->patient->identity_card }}</td>
          </tr>
          <tr>
            <th>Nama Pasien</th>
            <td>{{ $data->patient->name }}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir Pasien</th>
            <td>{{ $data->patient->birth_date }}</td>
          </tr>
          <tr>
            <th>Alamat Pasien</th>
            <td>{{ $data->patient->address }}</td>
          </tr>
          <tr>
            <th>Kontak Pasien</th>
            <td>{{ $data->patient->phone }}</td>
          </tr>
          <tr>
            <th>Email Pasien</th>
            <td>{{ $data->patient->email }}</td>
          </tr>
          <tr>
            <th>Nomor Idenritas Keluarga</th>
            <td>{{ $data->identity_number_family }}</td>
          </tr>
          <tr>
            <th>Nama Keluarga</th>
            <td>{{ $data->name_family }}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir Keluarga</th>
            <td>{{ $data->birth_date_family }}</td>
          </tr>
          <tr>
            <th>Alamat Keluarga</th>
            <td>{{ $data->address_family }}</td>
          </tr>
          <tr>
            <th>Kontak Keluaraga</th>
            <td>{{ $data->phone_family }}</td>
          </tr>
          <tr>
            <th>Hubungan</th>
            <td>{{ $data->sibling_relationship }}</td>
          </tr>
          <tr>
            <th>Hari Perkiraan Lahir</th>
            <td>{{ $data->hpl }}</td>
          </tr>
          <tr>
            <th>Usia Kehamilan</th>
            <td>{{ $data->gestational_age }} Minggu</td>
          </tr>
          <tr>
            <th>Kehamilan Sebelumnya</th>
            <td>Kehamilan yang ke {{ $data->previouse_pregnancies }}</td>
          </tr>
          <tr>
            <th>Alergi</th>
            <td>{{ $data->allergic }}</td>
          </tr>
          <tr>
            <th>Riwayat Operasi</th>
            <td>{{ $data->surgery_history }}</td>
          </tr>
          <tr>
            <th>Riwayat Penyakit Bawaan</th>
            <td>{{ $data->underlying_diseases }}</td>
          </tr>
          <tr>
            <th>Dokter</th>
            <td>{{ $data->user->name }}</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>{{ $data->status}}</td>
          </tr>
      </table>
      <div class="mt-5 mb-3">
      <a href="/data-kunjungan-pasien" type="submit" class="btn btn-secondary"><i class="fas fa-chevron-square-left text-dark"></i>Kembali</a>
    </div>
    </div>
</div>
</section>
@endsection

