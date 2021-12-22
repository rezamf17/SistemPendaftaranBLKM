@extends('layouts.temp')
@section('title')
Daftar Hadir Permakanan
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Daftar Hadir Permakanan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Daftar Hadir Permakanan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">Daftar Hadir Permakanan</div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{ url('LaporanDaftarHadirPermakanan') }}" method="post" accept-charset="utf-8">
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
            <th rowspan="3">No</th>
            <th rowspan="3">Nama</th>
            <th colspan="15">Tanda Tangan</th>
          </tr>
          <tr>
            <th colspan="5">
              <input type="text" name="hari_1" value="{{$hari1}}">/
              <input type="date" name="tanggal_1" value="{{$tanggal1}}">
            </th>
            <th colspan="5">
              <input type="text" name="hari_2" value="{{$hari2}}">/
              <input type="date" name="tanggal_2" value="{{$tanggal2}}">
            </th>
            <th colspan="5">
              <input type="text" name="hari_3" value="{{$hari3}}">/
              <input type="date" name="tanggal_3" value="{{$tanggal3}}">
            </th>
          </tr>
          <tr>
            <th>Pagi</th>
            <th>Snack</th>
            <th>Siang</th>
            <th>Snack</th>
            <th>Malam</th>
            <th>Pagi</th>
            <th>Snack</th>
            <th>Siang</th>
            <th>Snack</th>
            <th>Malam</th>
            <th>Pagi</th>
            <th>Snack</th>
            <th>Siang</th>
            <th>Snack</th>
            <th>Malam</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($formulir as $element)
            <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$element->nama}}</td>
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
