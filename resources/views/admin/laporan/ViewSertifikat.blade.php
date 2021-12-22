@extends('layouts.temp')
@section('title')
View Sertifikat
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">View Sertifikat</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">View Sertifikat</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">View Sertifikat</div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{ url('LaporanSertifikat/'.$formulir->id) }}" method="post" accept-charset="utf-8">
          @csrf
        <label>Nomor Sertifikat</label>
        <input type="text" name="nomor" value="{{$nomor}}" class="form-control">
        <label>Nama</label>
        <input type="text" name="nama" value="{{$formulir->nama}}" class="form-control">
        <label>Tempat, Tanggal Lahir</label>
        <input type="text" name="ttl" value="{{$formulir->ttl}}" class="form-control">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{$formulir->alamat}}, {{$formulir->villages->name}}, {{$formulir->districts->name}}, {{$formulir->cities->name}}</textarea>
        <label>Tempat Pelatihan</label>
        <input type="text" name="tempat" value="{{$tempat}}" class="form-control">
        <label>Tanggal Mulai Pelatihan</label>
        <input type="text" name="mulai" value="{{$mulai}}" class="form-control">
        <label>Tanggal Selesai Pelatihan</label>
        <input type="text" name="selesai" value="{{$selesai}}" class="form-control">
        <label>Tahun</label>
        <input type="" name="tahun" value="{{$tahun}}" class="form-control">
        <label>Peminatan :</label>
        <input type="text" name="peminatan" value="{{$formulir->peminatan}}" class="form-control" >
      </div>
      
      <div class="card-footer">
          <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i>Print</button>
        </form>
        <a href="{{ url('Laporan') }}" class="btn btn-default"><i class="fa fa-repeat"></i>Batal</a>
      </div>
    </div>
  </div>
  @endsection
