@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Deta Rekam Medis Umum</li>
      </ol>
    </nav>
@endsection
@section('content')
<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="card">
          <div class="card-body">
            <form class="row g-3" action="" method="GET">
              <div class="col-md-3">
              <input type="search" name="searchRM" id="searchRM" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari data Rekam Medis" autofocus="true" value="{{ $searchRM }}" >
              </div>
              <div class="col-auto mb-3">
                <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-search"></i></button>
              </div>
          </form>
            <table id="example2" class="table">
              <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">@sortablelink('id_patient','Nama')</th>
                <th scope="col">@sortablelink('anamnesa','Keluhan')</th>
                <th scope="col">@sortablelink('diagnosis','Diagnosa')</th>
                <th scope="col">@sortablelink('id_user','Dokter')</th>
                <th scope="col">Pilihan</th>
              </tr>
              </thead>
              <tbody>
                @php
                  $no =1;   
                @endphp
        @foreach ($data as $index => $datatindakan)
        <tr>
          <th scope="row">{{$index + $data-> firstItem() }}</th>
            <td>{{ $datatindakan->patient->name }}</td>
            <td>{{ $datatindakan->anamnesa }}</td>
            <td>{{ $datatindakan->diagnosis }}</td>
            <td>{{ $datatindakan->user->name }}</td>
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
            {{-- {{ $data->links() }} --}}
            {!! $data->appends(Request::except('page'))->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
   <!--Jquery-->
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   {{-- <script>
     $('.delete').click(function(){
       var recordid = $(this).attr('data-id');
       var name = $(this).attr('data-name');
       swal({
       title: "Anda Yakin?",
       text: "Menghapus data atas nama "+name+" ",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         window.location = "/hapusdatarekammedis/"+recordid+""
         swal("Data berhasil di hapus!", {
           icon: "success",
         });
       } else {
         swal("Data batal di hapus!");
       }
     });
   });      
   </script>  --}}
@endsection