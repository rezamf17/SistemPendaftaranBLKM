@extends('layouts.temp')
@section('title')
Daftar Hadir Pelajaran
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Daftar Hadir Pelajaran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Daftar Hadir Pelajaran</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">Daftar Hadir Pelajaran</div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{ url('LaporanDaftarHadirPelajaran') }}" method="post" accept-charset="utf-8">
          @csrf
        <input type="" name="cities" value="{{$cities}}" style="display: none;">
        <input type="" name="tahun" value="{{$tahun}}" style="display: none;">
        <label>Tempat :</label>
        <input type="text" name="tempat" value="{{$tempat->cities->name}}" class="form-control" >
        <label>Peminatan :</label>
        <input type="text" name="peminatan" value="{{$peminatan}}" class="form-control" >
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th rowspan="4">No</th>
            <th rowspan="4">Nama Peserta</th>
            <th colspan="6">Jadwal Pelajaran</th>
          </tr>
          <tr>
            <th colspan="6">
            <input type="text" name="hari" value="{{$hari}}">/
            <input type="text" name="tanggal" value="{{$tanggal}}"></th>
          </tr>
          <tr>
            <th>
              <input type="text" name="jam_awal_1" value="{{$jam_awal_1}}" style="width: 50px;"> -
              <input type="text" name="jam_akhir_1" value="{{$jam_akhir_1}}" style="width: 50px;">
            </th>
            <th>
              <input type="text" name="jam_awal_2" value="{{$jam_awal_2}}" style="width: 50px;"> -
              <input type="text" name="jam_akhir_2" value="{{$jam_akhir_2}}" style="width: 50px;">
            </th>
            <th>
              <input type="text" name="jam_awal_3" value="{{$jam_awal_3}}" style="width: 50px;"> -
              <input type="text" name="jam_akhir_3" value="{{$jam_akhir_3}}" style="width: 50px;">
            </th>
            <th>
              <input type="text" name="jam_awal_4" value="{{$jam_awal_4}}" style="width: 50px;"> -
              <input type="text" name="jam_akhir_4" value="{{$jam_akhir_4}}" style="width: 50px;">
            </th>
            <th>
              <input type="text" name="jam_awal_5" value="{{$jam_awal_5}}" style="width: 50px;"> -
              <input type="text" name="jam_akhir_5" value="{{$jam_akhir_5}}" style="width: 50px;">
            </th>
            <th>
              <input type="text" name="jam_awal_6" value="{{$jam_awal_6}}" style="width: 50px;"> -
              <input type="text" name="jam_akhir_6" value="{{$jam_akhir_6}}" style="width: 50px;">
            </th>
          </tr>
          <tr>
            <th>
              <input type="text" name="nama_pertemuan_1" value="{{$nama_pertemuan_1}}" style="width: 110px;">
            </th>
            <th>
              <input type="text" name="nama_pertemuan_2" value="{{$nama_pertemuan_2}}" style="width: 110px;">
            </th>
            <th>
              <input type="text" name="nama_pertemuan_3" value="{{$nama_pertemuan_3}}" style="width: 110px;">
            </th>
            <th>
              <input type="text" name="nama_pertemuan_4" value="{{$nama_pertemuan_4}}" style="width: 110px;">
            </th>
            <th>
              <input type="text" name="nama_pertemuan_5" value="{{$nama_pertemuan_5}}" style="width: 110px;">
            </th>
            <th>
              <input type="text" name="nama_pertemuan_6" value="{{$nama_pertemuan_6}}" style="width: 110px;">
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($formulir as $element)
            <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$element->nama}}</td>
             <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="card-footer">
          <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i>Print</button>
        </form>
        <a href="{{ url('Laporan') }}" class="btn btn-default"><i class="fa fa-repeat"></i>Batal</a>
      </div>
    </div>
  </div>
  @endsection
