@extends('layouts.master')

@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Kunjungan</li>
      </ol>
    </nav>
@endsection

<!-- cintent-->
@section('content')
    <div class="row">
      <div class="col-xs-12">
        @can('level')
        <div class="card w-50">
          <div class="card-body">
            <div class="col-auto mt-3">
              <form class="row g-3" action="/datapasienkunjungan" method="GET">
                <div class="col-md-10">
                <input type="search" name="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Cari pasien" required>
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-search"></i></button>
                </div>
                <div id="emailHelp" class="form-text"><p class="fw-light"> Temukan data pasien disini !!!</p></div>
            </form>
            </div>
          </div>
        </div>
        @endcan
        <div class="card">
          <div class="card-body">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pasien Umum</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pasien Bersalin</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      {{-- Kunjungan Umum --}}
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">No Kunjungan</th>
            <th scope="col">Nama</th>
            <th scope="col">Keluhan</th>
            <th scope="col">Dokter</th>
            <th scope="col">Status</th>
            <th scope="col">Pilihan</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($dataKunjungan as $kunjungan)
       <tr>
        <td>{{ $kunjungan->visitation_number }}</td>
        <td>{{ $kunjungan->patient->name }}</td>
        <td>{{ $kunjungan->description }}</td>
        <td>{{ $kunjungan->user->name }}</td>
        @if ($kunjungan->visitation_status === 'Menunggu')
        <td><span class="text badge badge-secondary">{{ $kunjungan->visitation_status }}</span></td>  
        @elseif($kunjungan->visitation_status === 'Diperiksa')
        <td><span class="text badge badge-primary">{{ $kunjungan->visitation_status }}</span></td>  
        @elseif($kunjungan->visitation_status === 'Lewat')
        <td><span class="text badge badge-danger">{{ $kunjungan->visitation_status }}</span></td>    
        @else
        <td><span class="text badge badge-success">{{ $kunjungan->visitation_status }}</span></td>
        @endif
        <td>
          @can('dokter')
          <a href="/tambah-data-rekam-medis-pasien-pemeriksaan-umum/{{ $kunjungan->id_patient }}/{{ $kunjungan->id_user }}" type="button" id="btntindakan"  class="TambahTindakan btn btn-primary"><i class="fas fa-plus"></i> Tindakan</a>   
          @endcan
          @can('level')
          <button type="button" id="btnmodal"  class="EditKunjungan btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $kunjungan->id }}">
          <i class="fa-sharp fa-solid fa-pen-to-square text-dark"></i></button>   
          @endcan
          {{-- <a href="#" class="btn btn-danger  delete" id="delete" data-id="{{ $kunjungan->id }}" data-name="{{ $kunjungan->patient->name }}"><i class="fa-sharp fa-solid fa-trash text-dark"></i></a> --}}
        </td>  
        </tr>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop{{ $kunjungan->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Kunjungan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3" method="POST" action="{{ route('editdatakunjungan', $kunjungan->id) }}" id="editDataForm{{ $kunjungan->id }}">
                @csrf
                <div class="mb-4">
                  <input type="hidden" class="form-control" id="inputid">
                </div>
                <div class="md-4">
                  <label for="exampleFormControlInput1" class="form-label">No Kunjungan</label>
                  <input type="text" class="form-control" id="inputantrian" style="width: 150px;" value="{{ $kunjungan->visitation_number }}" readonly> 
                </div>
                <div class="md-4">
                  <label for="exampleFormControlInput1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="inputname" value="{{ $kunjungan->patient->name }}" readonly>
                </div>
                <div class="md-4">
                  <label for="exampleFormControlTextarea1" class="form-label">Dokter</label>
                  <select class="form-control select2" name="id_user" id="id_user">
                    <option disabled value>Pilih Dokter</option>
                    <option value="{{ $kunjungan->user->id }}">{{ $kunjungan->user->name }}</option> 
                    @foreach ($dokter as $dr)
                      <option value="{{ $dr->id }}">{{ $dr->name }}</option>  
                    @endforeach
                  </select>
                </div>
                <div class="md-4">
                  <label>Status</label>
                  <select class="form-control select2" id="inputStatus" name="visitation_status" style="width: 100%;">
                    <option selected>{{ $kunjungan->visitation_status }}</option>
                    <option value="Menunggu">Menunggu</option>
                    <option value="Diperiksa">Diperiksa</option>
                    <option value="Lewat">Dilewati</option>
                    <option value="Selesai">Selesai</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Keluhan</label>
                  <textarea class="form-control" id="inputKeluhan" rows="3" name="description" required>{{ $kunjungan->description }}</textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button  type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>  
        @endforeach       
        </tbody>
        </table>
      </div>  

      {{-- Kunjungan Bersalin --}}
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <table class="table">
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Hari Perkiraan Lahir</th>
            <th scope="col">Dokter</th>
            <th scope="col">Tanggal Kunjungan</th>
            <th scope="col">Status</th>
            <th scope="col">Pilihan</th>
          </tr>
          </thead>
          <tbody>
            @php
                $no=1
            @endphp
            @foreach ($dateVisits as $kunjunganbersalin)
       <tr>
        <th scope="row">{{$no++ }}</th>
        <td>{{ $kunjunganbersalin->patient->name }}</td>
        <td>{{ $kunjunganbersalin->hpl }}</td>
        <td>{{ $kunjunganbersalin->user->name }}</td>
        <td>{{ $kunjunganbersalin->created_at->format('Y-m-d') }}</td>
        @if ($kunjunganbersalin->status === 'Menunggu')
        <td><span class="text badge badge-secondary">{{ $kunjunganbersalin->status }}</span></td>  
        @elseif($kunjunganbersalin->status === 'Diperiksa')
        <td><span class="text badge badge-primary">{{ $kunjunganbersalin->status }}</span></td>     
        @else
        <td><span class="text badge badge-success">{{ $kunjunganbersalin->status }}</span></td>
        @endif
        <td>
          @can('dokter')
          <a href="/tambah-rekam-medis-pasien-persalinan/{{ $kunjunganbersalin->id}}" type="button" id="btntindakan"  class="TambahTindakan btn btn-primary"><i class="fas fa-plus"></i> Tindakan</a>  
          @endcan
          @can('level')
          <a href="/edit-data-kunjungan-pasien-persalinan/{{ $kunjunganbersalin->id }}" class="btn btn-info"><i class="fa-sharp fa-solid fa-pen-to-square text-dark"></i></a>     
          @endcan
          <a href="/detail-data-kunjungan-persalinan/{{ $kunjunganbersalin->id }}" class="btn btn-warning"><i class="fas fa-eye text-dark"></i></a>
          {{-- <a href="#" class="btn btn-danger  delete" id="delete" data-id="{{ $kunjunganbersalin->id }}" data-name="{{ $kunjunganbersalin->patient->name }}"><i class="fa-sharp fa-solid fa-trash text-dark"></i></a> --}}
        </td>  
        </tr>
        @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    <!--Jquery-->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
    function updateData(id) {
      $.ajax({
        url: "{{ route('editdatakunjungan', ':id') }}".replace(':id', id),
        type: "POST",
        data: $('#editDataForm' + id).serialize(),
        success: function(response) {
          // refresh halaman setelah sukses update
          location.reload();
        },
        error: function(xhr) {
          // tampilkan pesan error jika update gagal
          alert(xhr.responseText);
        }
      });
    }
    </script>
    {{-- <script>
      $('.delete').click(function(){
        var visitationid = $(this).attr('data-id');
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
          window.location = "/hapusdataantrian/"+visitationid+""
          swal("Data berhasil di hapus!", {
            icon: "success",
          });
        } else {
          swal("Data batal di hapus!");
        }
      });
    });      
    </script>
    
    delete melahirkan 
    <script>
      $('.delete').click(function(){
        var bersalin = $(this).attr('data-id');
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
          window.location = "/hapusdatakunjunganbersalin/"+bersalin+""
          swal("Data berhasil di hapus!", {
            icon: "success",
          });
        } else {
          swal("Data batal di hapus!");
        }
      });
    });      
    </script> --}}
@endsection
<!--/end content-->