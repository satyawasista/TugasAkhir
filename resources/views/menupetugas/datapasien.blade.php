@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
      </ol>
    </nav>
@endsection
<!-- cintent-->
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-body">
        <div class="col-auto mt-3">
          <form class="row g-3" action="" method="GET">
            <div class="col-md-3">
            <input type="search" name="search" id="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari data pasien" autofocus="true" value="{{ $search }}" required >
            </div>
            <div class="col-auto mb-3">
              <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-search"></i></button>
            </div>
        </form>
        </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">@sortablelink('name','Nama')</th>
          <th scope="col">@sortablelink('gender','Jenis Kelamin')</th>
          <th scope="col">@sortablelink('address','Alamat')</th>
          <th scope="col">@sortablelink('status_data','Status')</th>
          <th scope="col">Pilihan</th>
        </tr>
      </thead>
      <tbody>
        @php
          $no =1;   
        @endphp
        @foreach ($data as $index => $datapasien)
      <tr>
          <th scope="row">{{$index + $data-> firstItem() }}</th>
          <td>{{ $datapasien->name }}</td>
          <td>{{ $datapasien->gender }}</td>
          <td>{{ $datapasien->address }}</td>
          @if ($datapasien->status === 'Aktif')
          <td><span class="text badge badge-success">{{ $datapasien->status }}</span></td>
            @else
            <td><span class="text badge badge-danger">{{ $datapasien->status }}</span></td>    
          @endif
          <td>
            @can('level')
            <a href="/edit-data-pasien/{{ $datapasien->id }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-pen-to-square text-dark"></i></a>  
            @endcan
          <a href="/detail-data-pasien/{{ $datapasien->id }}" class="btn btn-warning"><i class="fas fa-eye text-dark"></i></a>
          </td>
        </tr>
        @endforeach
</tbody>
</table>
{{-- {{ $data->links() }} --}}
{!! $data->appends(Request::except('page'))->render() !!}
</div>
</div>
</div>
</div>
@endsection