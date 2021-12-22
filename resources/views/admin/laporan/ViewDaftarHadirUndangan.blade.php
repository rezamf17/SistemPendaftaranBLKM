@extends('layouts.temp')
@section('title')
View Daftar Hadir Undangan
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">View Daftar Hadir Undangan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">View Daftar Hadir Undangan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">View Daftar Hadir Undangan</div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{ url('LaporanAbsensiUndangan') }}" method="post" accept-charset="utf-8">
          @csrf
        <input type="" name="cities" value="{{$cities}}" style="display: none;">
        <input type="" name="tahun" value="{{$tahun}}" style="display: none;">
        <label>Hari :</label>
        <input type="text" name="hari" value="{{$hari}}" class="form-control">
        <label>Tanggal :</label>
        <input type="text" name="tanggal" value="{{$tanggal}}" class="form-control">
        <label>Tempat :</label>
        <input type="text" name="tempat" value="{{$tempat->cities->name}}" class="form-control" >
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th colspan="2">Tanda Tangan</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <=20 ; $i++)
           <tr>
             <td>{{$i}}</td>
             <td></td>
             <td></td>
             <td>
               @if ($i % 2 == 0)
                 
                 @else
                 {{$i}}
               @endif
             </td>
             <td>
               @if ($i % 2 == 1)
                 
                 @else
                 {{$i}}
               @endif
             </td>
           </tr>
          @endfor
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
