@extends('layouts.temp')
@section('title')
Seleksi Data
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Seleksi Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Seleksi Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <style type="text/css">
    .bootstrap-timepicker-meridian, .meridian-column
    {
        display: none;
    }
</style>
  <div class="container">
    <div class="card">
      <div class="card-header">Pilih Data Yang Ingin Di Seleksi</div>
      <div class="card-body">
        <div class="form-group">
          <form action="{{ url('SeleksiData') }}" method="post" accept-charset="utf-8">
            @csrf
            <label>Pilih Kota/Kabupaten</label>
            <select name="id_cities" class="form-control" id="kota" onchange="change()" required>
              <option value="" >-Pilih Kota/Kabupaten-</option>
              @foreach ($kota as $element)
              <option value="{{$element->id}}">{{$element->name}}</option>
              @endforeach
            </select>
            <label>Peminatan</label>
            <select name="peminatan" class="form-control" required>
              <option value="">-Silahkan Pilih Peminatan-</option>
              <option value="Tata Boga">Tata Boga</option>
              <option value="Las Listrik">Las Listrik</option>
              <option value="Tata Rias Wajah dan Hijab">Tata Rias Wajah dan Hijab</option>
              <option value="Financial Life Skill">Financial Life Skill</option>
              <option value="Barista">Barista</option>
              <option value="Catering">Catering</option>
              <option value="Otomotif Service Sepeda Motor Ringan">Otomotif Service Sepeda Motor Ringan</option>
              <option value="Bakery">Bakery</option>
              <option value="Start Up">Start Up</option>
              <option value="Teknik Cukur Dasar">Teknik Cukur Dasar</option>
            </select>
            <label>Status</label>
            <select name="status" class="form-control">
              <option value="">-Silahkan Pilih Status-</option>
              <option value="Calon Peserta">Calon Peserta</option>
              <option value="Peserta">Peserta</option>
              <option value="Alumni">Alumni</option>
            </select>
            <label>Nama Hasil Seleksi</label>
            <input type="text" class="form-control" name="nama">
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Seleksi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">Daftar Nama Seleksi</div>
    <div class="card-body">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kota</th>
            <th>Peminatan</th>
            <th>Status</th>
            <th>Nama Pelatihan</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($namaSeleksi as $element)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$element->cities->name}}</td>
              <td>{{$element->peminatan}}</td>
              <td>{{$element->status}}</td>
              <td>{{$element->nama_pelatihan}}</td>
              <th>
                <form action="{{ url('lihatSeleksiData/'.$element->id) }}" method="post">
                  @csrf
                  <button type="submit" class="btn btn-primary">Seleksi Data</button>
                </form>
              </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
  function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
              url: url,
              type: 'GET',
              data: {
                id: id
              },
              success: function (data) {
                $('#' + name).empty();
                $('#' + name).append('<option>==Pilih Salah Satu==</option>');

                $.each(data, function (key, value) {
                  $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                });
              }
            });
          }
          $(function () {
            // $('#provinsi').on('change', function () {
            //     onChangeSelect(' route("cities") }}', $(this).val(), 'kota');
            // });
            $('#kota').on('change', function () {
              onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function () {
              onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
            })
            $('#change').on('change', function () {
              onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
            })
          });
        </script>
        @include('sweetalert::alert')
        @endsection
