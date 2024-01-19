@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Data User</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
    <div class="card">
    <div class="card-body">
    <table class="table table-bordered table-hover">
        <tr>
            <th style="width: 35%;">Nama</th>
            <td style="width: 65%;">{{ $data->name}}</td>
          </tr>
          <tr>
            <th>Level</th>
            <td>{{ $data->level}}</td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $data->gender}}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $data->address}}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $data->birth_date}}</td>
          </tr>
          <tr>
            <th>Kontak</th>
            <td>{{ $data->phone}}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $data->email}}</td>
          </tr>
          <tr>
            <th>Status</th>
            <td>{{ $data->status}}</td>
          </tr>
            <th>Tanggal Pendaftaran</th>
            <td>{{ $data->created_at->format('Y-m-d') }}</td>
          </tr>
      </table>
      <div class="mt-5 mb-3">
      <a href="/data-user" type="submit" class="btn btn-secondary"><i class="fas fa-chevron-square-left text-dark"></i>Kembali</a>
    </div>
    </div>
</div>
</section>
@endsection

