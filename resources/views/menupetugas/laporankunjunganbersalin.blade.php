@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Laporan Kunjungan Persalinan</li>
      </ol>
    </nav>
@endsection

<!-- cintent-->
@section('content')
    <div class="row">
      <div class="col-xs-12">
        <div class="card">
          <div class="card-body">
            <form class="row g-3" enctype="multipart/form-data">
            <div class="col-md-3">
              <input type="date" name="tglawal" class="form-control" id="tglawal" required>
            </div>
            <div class="col-md-3">
              <input type="date" name="tglakhir"  class="form-control" id="tglakhir" required>
            </div>
            <div class="col-auto">
              <a onclick="this.href='/cetakLaporanbersalin/'+ document.getElementById('tglawal').value +
              '/' + document.getElementById('tglakhir').value " target="_blank" class="btn btn-primary mb-3">
              <i class="fas fa-print text-dark"></i></a>
            </div>
            </form>
            <div class="row g-3 align-items-center mb-2">
              <div class="col-auto">
              </div>
            </div>
            <table class="table">
              <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Nama Keluarga</th>
                <th scope="col">Kehamilan</th>
                <th scope="col">Tanggal Kunjungan</th>
              </tr>
              </thead>
              <tbody>
                @php
                $no =1;   
              @endphp
                @foreach ($data as $index => $kunjungan)
           <tr>
            <th>{{ $index + $data-> firstItem() }}</th>
            <td>{{ $kunjungan->patient->name }}</td>
            <td>{{ $kunjungan->name_family }}</td>
            <td>Kehamilan yang ke {{ $kunjungan->previouse_pregnancies }}</td>
            <td>{{ $kunjungan->created_at->format('Y-m-d') }}</td>
            </tr>              
            @endforeach
    </tbody>
            </table>
            {{ $data->links() }}
          </div>
        </div>
      </div>
    </div>
@endsection