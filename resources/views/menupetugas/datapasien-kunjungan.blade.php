@extends('layouts.master')
@section('breadcrumc')
    @parent
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Pasien kunjungan</li>
      </ol>
    </nav>
@endsection
<!-- cintent-->
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-body">
        @if(session()->has('error'))
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Alamat</th>
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
          {{-- <td>{{ $datapasien->created_at->format('Y-m-d') }}</td> --}}
          <td>
            <button type="button" id="btnmodal"  class="TambahAntrian btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-bs-id="{{ $datapasien->id }}" data-bs-name="{{ $datapasien->name }}">
              <i class="fas fa-plus"></i>Umum
            </button>
            <a href="/daftaran-pasien-Persalinan/{{ $datapasien->id }}" type="button" id="btntindakan"  class="TambahTindakan btn btn-primary"><i class="fas fa-plus"></i> Bersalin</a>
          </td>
        </tr>
        @endforeach
</tbody>
</table>
{{ $data->links() }}
</div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Kunjungan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3" method="POST" action="/antrian">
          @csrf
          <div class="">
            <input type="hidden" class="form-control" id="inputid" name="id">
          </div>
          <div class="col-md-4">
            <label for="exampleFormControlInput1" class="form-label">No Kunjungan</label>
            <input type="text" class="form-control" id="inputantrian" name="visitation_number" value="{{ $urut }}" readonly> 
          </div>
          <div class="md-6">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputname" name="name" readonly>
            <input type="hidden" class="form-control" id="inputid_patient" name="id_patient">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Dokter</label>
            <select class="form-control select2" name="id_user" id="id_user">
              <option disabled value>Pilih Dokter</option>
              @foreach ($dokter as $dokter)
                <option value="{{ $dokter->id }}">{{ $dokter->name }}</option>  
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Keluhan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
          </div>
          <div class="col-auto">
            <input type="hidden" class="form-control"  name="visitation_status" value="Menunggu">
            <input type="hidden" class="form-control"  name="created_at" value="{{ date('y-m-d') }}" >
            <input type="hidden" class="form-control"  name="updated_at" value="{{ date('y-m-d') }}">
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
    <!--Jquery-->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $('.TambahAntrian').click(function(){
      $('#staticBackdrop').modal()
      var id = $(this).attr('data-bs-id')
      var id_patient = $(this).attr('data-bs-id')
      var antrian = $(this).attr('data-bs-id')
      var name = $(this).attr('data-bs-name')
      $('#inputid').val(id) 
      $('#inputname').val(name)
      $('#inputid_patient').val(id_patient) 
    })
</script>
@endsection