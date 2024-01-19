@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Data Pasien</li>
      </ol>
    </nav>
@endsection

@section('content')
<section class="content">
    <div class="card">
    <div class="card-body">
    <table class="table table-bordered " id="tabelpasien">
        <tr id="trpasien">
            <th style="width: 35%;">Nomor Idenritas/KTP</th>
            <td style="width: 65%;">{{ $data->identity_card }}</td>
          </tr>
          <tr >
            <th>Nama</th>
            <td>{{ $data->name }}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $data->birth_date }}</td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $data->gender }}</td>
          </tr>
          <tr>
            <th>Kontak</th>
            <td>{{ $data->phone }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $data->email }}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $data->address }}</td>
          </tr>
          <tr>
            <th>Tanggal Data Ditambahkan</th>
            <td>{{ $data->created_at->format('Y-m-d') }}</td>
          </tr>
        <tr>
        <th>Status Data</th>
        <td>{{ $data->status }}</td>
      </tr>
      </table>
      <div class="mt-5 mb-3">
        <a href="/data-pasien" type="submit" class="btn btn-secondary"><i class="fas fa-chevron-square-left text-dark"></i>Kembali</a>
      </div>
      </div>
  </div>
  {{-- RM Umum --}}
   @if ($dataRecord->count())
   <div class="card">
    <div class="card-body">
      <h5 class="ml-2"><b>RM Umum</b></h5>
      <table id="example2" class="table">
        <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Diagnosa</th>
          <th scope="col">Dokter</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Pilihan</th>
        </tr>
        </thead>
        <tbody>
          @php
            $no =1;   
          @endphp
  @foreach ($dataRecord as $index => $datatindakan)
  <tr>
    <th scope="row">{{ $index + $dataRecord-> firstItem()}}</th>
      <td>{{ $datatindakan->diagnosis }}</td>
      <td>{{ $datatindakan->user->name }}</td>
      <td>{{ $datatindakan->created_at->format('Y-m-d') }}</td>
      <td>
        @can('dokter')
        <a href="/edit-data-rekam-medis-pasien-pemeriksaan-umum/{{ $datatindakan->id }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-pen-to-square text-dark"></i></a>
        @endcan
        <a href="/detail-data-rekam-medis-pasien-pemeriksaan-umum/{{ $datatindakan->id }}" class="btn btn-warning"><i class="fas fa-eye text-dark"></i></a>
          {{-- <a href="#" class="btn btn-danger delete" id="delete" data-id="{{ $datatindakan->id }}" data-name="{{ $datatindakan->patient->name }}"><i class="fa-sharp fa-solid fa-trash text-dark"></i></a> --}}
      </td>
    </tr> 
  @endforeach
</tbody>
      </table>
      {{ $dataRecord->links() }}
    </div>
  </div>   
   @else
       
   @endif

  {{-- RM Persalinan --}}
      @if ($dataBirthRecord->count())
      <div class="card">
        <div class="card-body">
          <h5 class="ml-2"><b>RM Persalinan</b></h5>
      <table id="example2" class="table">
        <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Masuk Kamar Bersalin</th>
          <th scope="col">Dokter</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Pilihan</th>
        </tr>
        </thead>
        <tbody>
          @php
            $no =1;   
          @endphp
  @foreach ($dataBirthRecord as $indexx => $bersalin)
  <tr>
    <th scope="row">{{ $indexx + $dataBirthRecord-> firstItem()}}</th>
      <td>{{ $bersalin->delivery_room }}</td>
      <td>{{ $bersalin->user->name }}</td>
      <td>{{ $bersalin->created_at->format('Y-m-d') }}</td>
      <td>
          @can('dokter')
          <a href="/edit-data-rekam-medis-pasien-persalinan/{{ $bersalin->id }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-pen-to-square text-dark"></i></a> 
          @endcan
          <a href="/detail-rekam-medis-pasien-persalinan/{{ $bersalin->id }}" class="btn btn-warning"><i class="fas fa-eye text-dark"></i></a>
          {{-- <a href="#" class="btn btn-danger delete" id="delete" data-id="{{ $bersalin->id }}" data-name="{{ $bersalin->maternityPatient->patient->name }}"><i class="fa-sharp fa-solid fa-trash text-dark"></i></a>  --}}
      </td>
    </tr> 
  @endforeach
  
</tbody>
      </table>
      {{ $dataBirthRecord->links() }}
    </div>
  </div>
      @else 
      @endif
</section>
@endsection

