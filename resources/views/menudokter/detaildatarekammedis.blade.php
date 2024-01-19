@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dasboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail rekam medis Umum</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
    <div class="card">
    <div class="card-body">
    <table class="table table-bordered table-hover">
        <tr>
            <th style="width: 35%;">Nomor Idenritas/KTP</th>
            <td style="width: 65%;">{{ $data->patient->identity_card }}</td>
          </tr>
          <tr>
            <th>Nama</th>
            <td>{{ $data->patient->name }}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $data->patient->address }}</td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $data->patient->gender }}</td>
          </tr>
          <tr>
            <th>Tensi</th>
            <td>{{ $data->tension }} mmHg</td>
          </tr>
          <tr>
            <th>Suhu Tubuh</th>
            <td>{{ $data->body_temp }} C*</td>
          </tr>
          <tr>
            <th>Alergi</th>
            <td>{{ $data->allergic }}</td>
          </tr>
          <tr>
            <th>Keluhan</th>
            <td>{{ $data->anamnesa }}</td>
          </tr>
          <tr>
            <th>Diagnosis</th>
            <td>{{ $data->diagnosis }}</td>
          </tr>
          <tr>
            <th>Deskripsi</th>
            <td>{{ $data->description }}</td>
          </tr>
          <tr>
            <th>Dokter</th>
            <td>{{ $data->user->name }}</td>
          </tr>
          <tr>
            <th>Tanggal pemeriksaan</th>
            <td>{{ $data->created_at->format('Y-m-d') }}</td>
          </tr>
      </table>
      <div class="mt-5 mb-3">
      <a href="" onclick="history.back();return false;" type="submit" class="btn btn-secondary"><i class="fas fa-chevron-square-left text-dark"></i>Kembali</a>
    </div>
    </div>
</div>
</section>
@endsection

