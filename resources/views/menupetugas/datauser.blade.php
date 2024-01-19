@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data User</li>
      </ol>
    </nav>
@endsection
@section('content')
<div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="card">
          <div class="card-body">
            <div class="col-auto mb-3">
              <a href="/tambah-data-user" class="btn btn-primary" type="button"><i class="fas fa-plus-square text-dark"></i> User</a> 
              </div>
            <form class="row g-3" action="" method="GET">
              <div class="col-md-3">
              <input type="search" name="searchUser" id="searchUser" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari data pasien" autofocus="true" value="{{ $searchUser }}" required >
              </div>
              <div class="col-auto mb-3">
                <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-search"></i></button>
              </div>
            </form>
            <table id="example2" class="table">
              <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">@sortablelink('name','Nama')</th>
                <th scope="col">@sortablelink('gender','Jenis Kelamin')</th>
                <th scope="col">@sortablelink('level','Level')</th>
                <th scope="col">@sortablelink('status','Status')</th>
                <th scope="col">pilihan</th>
              </tr>
              </thead>
              <tbody>
                @php
                  $no =1;   
                @endphp
        @foreach ($data as $datauser)
        <tr>
            <th scope="row">{{$no++ }}</th>
            <td>{{ $datauser->name }}</td>
            <td>{{ $datauser->gender }}</td>
            <td>{{ $datauser->level }}</td>
            @if ( $datauser->status === 'Aktif')
            <td><span class="text badge badge-success">{{ $datauser->status }}</span></td>  
            @else
            <td><span class="text badge badge-danger">{{ $datauser->status }}</span></td>   
            @endif
            <td>
              <a href="/detail-data-user/{{ $datauser->id }}" class="btn btn-warning"><i class="fas fa-eye text-dark"></i></a>
              <a href="/edit-data-user/{{ $datauser->id }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-pen-to-square text-dark"></i></a>  
              {{-- <a href="#" class="btn btn-danger  delete" id="delete" data-id="{{ $datauser->id }}" data-name="{{ $datauser->name }}"><i class="fa-sharp fa-solid fa-trash text-dark"></i></a> --}}
            </td>
          </tr> 
        @endforeach
    </tbody>
            </table>
            {!! $data->appends(Request::except('page'))->render() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
   <!--Jquery-->
   {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script>
     $('.delete').click(function(){
       var userId = $(this).attr('data-id');
       var name = $(this).attr('data-name');
       swal({
       title: "Anda Yakin?",
       text: "Menghapus data dengan nama"+name+ " ",
       icon: "warning",
       buttons: true,
       dangerMode: true,
     })
     .then((willDelete) => {
       if (willDelete) {
         window.location = "/hapusdatuser/"+userId+""
         swal("Data berhasil di hapus!", {
           icon: "success",
         });
       } else {
         swal("Data batal di hapus!");
       }
     });
   });      
   </script>    --}}
@endsection