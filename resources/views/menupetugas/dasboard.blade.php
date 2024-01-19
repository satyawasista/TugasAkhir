@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
      </ol>
    </nav>
@endsection
@section('content')
@if (auth()->user()->level==='Petugas')
<div class="card">
  <div class="card-body">
    <div class="row">
    <div class="col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $jumlahKunjungan->count() }}</h3>
          <p>Kunjungan Umum</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-friends"></i>
        </div>
        <a href="/data-kunjungan-pasien" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="small-box bg-olive">
        <div class="inner">
          <h3>{{ $dataKunjungan->count() }}</h3>
          <p>Kunjungan Bersalin</p>
        </div>
        <div class="icon">
          <i class="fas fa-baby"></i>
        </div>
        <a href="/data-kunjungan-pasien" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="small-box bg-teal">
        <div class="inner">
          <h3>{{ $jumlahPasien->count() }}</h3>
          <p>Total Data Pasien</p>
        </div>
        <div class="icon">
          <i class="fas fa-folder-plus"></i>
        </div>
        <a href="/data-pasien" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
     @can('level') 
    <div class="col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $jumlahUser->count() }}</h3>
          <p>Total data User</p>
        </div>
        <div class="icon">
          <i class="fas fa-hospital-user"></i>
        </div>
        <a href="/data-user" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    @endcan
    </div>
  </div>
</div>
 @else
 <div class="card">
  <div class="card-body">
    <div class="row">
    <div class="col-lg-4">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $jumlahKunjungan->count() }}</h3>
          <p>Kunjungan Umum</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-friends"></i>
        </div>
        <a href="/data-kunjungan-pasien" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="small-box bg-olive">
        <div class="inner">
          <h3>{{ $dataKunjungan->count() }}</h3>
          <p>Kunjungan Bersalin</p>
        </div>
        <div class="icon">
          <i class="fas fa-baby"></i>
        </div>
        <a href="/data-kunjungan-pasien" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="small-box bg-teal">
        <div class="inner">
          <h3>{{ $jumlahPasien->count() }}</h3>
          <p>Total Data Pasien</p>
        </div>
        <div class="icon">
          <i class="fas fa-folder-plus"></i>
        </div>
        <a href="/data-pasien" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
     @can('level') 
    <div class="col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $jumlahUser->count() }}</h3>
          <p>Total data User</p>
        </div>
        <div class="icon">
          <i class="fas fa-hospital-user"></i>
        </div>
        <a href="/data-user" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    @endcan
    </div>
  </div>
</div>
@endif
<div class="card">
  <div class="card-body">
<div class="panel">
  <div id="chart">
  </div>
</div>
</div>
</div>
<!--CDN Chart-->
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
  Highcharts.chart('chart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Statistik Kunjungan Pasien'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mei',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Okt',
            'Nov',
            'Des'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Umum',
        data: [
          {{ $jumlahJan }},
          {{ $jumlahFeb }},
          {{ $jumlahMar }},
          {{ $jumlahApr }},
          {{ $jumlahMei }},
          {{ $jumlahJun }},
          {{ $jumlahJul }},
          {{ $jumlahAgu }},
          {{ $jumlahSep }},
          {{ $jumlahOkt }},
          {{ $jumlahNov }},
          {{ $jumlahDes }},
        ]
      }, {
        name: 'Persalinan',
        data: [
          {{ $bersalinJan }},
          {{ $bersalinFeb }},
          {{ $bersalinMar }},
          {{ $bersalinApr }},
          {{ $bersalinMei }},
          {{ $bersalinJun }},
          {{ $bersalinJul }},
          {{ $bersalinAgu }},
          {{ $bersalinSep }},
          {{ $bersalinOkt }},
          {{ $bersalinNov }},
          {{ $bersalinDes }}
        ]   
    }]
});
</script>
@endsection