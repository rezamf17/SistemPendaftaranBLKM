@extends('layouts.temp')
@section('title')
View Tanda Terima Perlengkapan
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">View Tanda Terima Perlengkapan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View Tanda Terima Perlengkapan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">View Tanda Terima Perlengkapan</div>
    <div class="card-body">
      <div class="form-group">
        <form action="{{ url('LaporanTandaTerimaPerlengkapan') }}" method="post" accept-charset="utf-8">
          @csrf
        <input type="" name="cities" value="{{$cities}}" style="display: none;">
        <input type="" name="tahun" value="{{$tahun}}" style="display: none;">
        <label>Hari :</label>
        <input type="text" name="hari" value="{{$hari}}" class="form-control">
        <label>Tanggal :</label>
        <input type="text" name="tanggal" value="{{$tanggal}}" class="form-control">
        <label>Tempat :</label>
        <input type="text" name="tempat" value="{{$tempat->cities->name}}" class="form-control" >
        <label>Peminatan :</label>
        <input type="text" name="peminatan" value="{{$peminatan}}" class="form-control" >
        <label>Perlengkapan 1</label>
              <input type="text" name="perlengkapan_1" class="form-control" value="{{$perlengkapan_1}}">
            <label>Perlengkapan 2</label>
              <input type="text" name="perlengkapan_2" class="form-control" value="{{$perlengkapan_2}}">
            <label>Perlengkapan 3</label>
              <input type="text" name="perlengkapan_3" class="form-control" value="{{$perlengkapan_3}}">
            <label>Perlengkapan 4</label>
              <input type="text" name="perlengkapan_4" class="form-control" value="{{$perlengkapan_4}}">
            <label>Perlengkapan 5</label>
              <input type="text" name="perlengkapan_5" class="form-control" value="{{$perlengkapan_5}}">
            <label>Perlengkapan 6</label>
              <input type="text" name="perlengkapan_6" class="form-control" value="{{$perlengkapan_6}}">
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th>Alamat Asal</th>
            <th>Perlengkapan</th>
            <th colspan="2">Tanda Tangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($formulir as $element)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$element->nama}}</td>
              <td>{{$element->alamat}}, 
                Desa/Kelurahan :{{$element->villages->name}},
                Kecamatan :{{$element->districts->name}},
                Kota/Kabupaten :{{$element->cities->name}}</td>
              <td>1 Set</td>
              <td>
                @if ($loop->even)
                @else
                {{$loop->iteration}}.
                @endif
              </td>
              <td>
                @if ($loop->odd)
                @else
                {{$loop->iteration}}.
                @endif
              </td>
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
