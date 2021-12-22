@extends('layouts.temp')
@section('title')
Ganti Formulir
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Ganti Formulir</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Ganti Formulir</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">Ganti Formulir</div>
    <div class="card-body">
      <form action="{{ url('UserFormulir/'.$formulir->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="{{$formulir->nama}}" name="nama" > 
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="text" class="form-control" name="umur" value="{{$formulir->umur}}" >
        </div>
        <div class="form-group">
            <label>Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" name="ttl" value="{{$formulir->ttl}}" >
            <i>*Contoh : Bandung, 18 April 1987</i>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" >{{$formulir->alamat}}</textarea>
            <label>Provinsi</label>
            @php
            $provinces = new App\Http\Controllers\DependentDropdownController;
            $provinces= $provinces->provinces();
            @endphp
            <select class="form-control" name="provinsi" id="provinsi" >
                <option>Pilih Provinsi</option>
                @foreach ($provinces as $item)
                <option value="{{ $item->id ?? '' }}" {{$formulir->id_provinces == $item->id ? 'selected' : ''}}>{{ $item->name ?? '' }}</option>
                @endforeach
            </select>
             <label>Kota/Kabupaten</label>
            <select class="form-control" name="kota" id="kota" >
              <option value="{{$formulir->id_cities}}">{{$formulir->cities->name}}</option>
            </select>
            <label>Kecamatan</label>
            <select class="form-control" name="kecamatan" id="kecamatan" >
              <option value="{{$formulir->id_districts}}">{{$formulir->districts->name}}</option>
            </select>
            <label>Desa/Keluharan</label>
            <select class="form-control" name="desa" id="desa" >
              <option value="{{$formulir->id_villages}}">{{$formulir->villages->name}}</option>
            </select>
        </div>
        <div class="form-group">
            <label>Nomor Kartu Keluarga</label>
            <input type="text" class="form-control" name="no_kk"> 
        </div>
        <div class="form-group">
            <label>Nomor KTP</label>
            <input type="text" class="form-control" name="no_ktp"> 
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" >
              <option value="">-Silahkan Pilih Jenis Kelamin-</option>
             <option value="Laki-laki" {{$formulir->jenis_kelamin == 'Laki-laki'? 'selected' : ''}}>Laki-laki</option>
              <option value="Perempuan" {{$formulir->jenis_kelamin == 'Perempuan'? 'selected' : ''}}>Perempuan</option>
          </select>
      </div>
      <div class="form-group">
        <label>Pekerjaan/Unit Usaha Saat Ini</label>
        <input type="text" class="form-control" name="pekerjaan" value="{{$formulir->pekerjaan}}" > 
    </div>
    <div class="form-group">
        <label>Pendidikan</label>
        <input type="text" class="form-control" name="pendidikan" value="{{$formulir->pendidikan}}" > 
    </div>
    <div class="form-group">
        <label>Angkatan</label>
        <input type="text" class="form-control" name="angkatan" value="{{$formulir->angkatan}}" > 
    </div>
    <div class="form-group">
        <label>Nomor Handphone</label>
        <input type="text" class="form-control" name="no_hp" value="{{$formulir->no_hp}}" > 
    </div>
    <div class="form-group">
        <label>Nomor Rekening</label>
        <input type="text" class="form-control" name="no_rek">
        <label>Nama Bank</label>
        <input type="text" class="form-control" name="bank">
        <label>Atas Nama</label>
        <input type="text" name="atas_nama" class="form-control"> 
    </div>
    <div class="form-group">
        <label>Peminatan</label>
        <select name="peminatan" class="form-control" >
          <option value="">-Silahkan Pilih Peminatan-</option>
          <option value="Tata Boga" {{$formulir->peminatan == 'Tata Boga'? 'selected' : ''}}>Tata Boga</option>
          <option value="Las Listrik" {{$formulir->peminatan == 'Las Listrik'? 'selected' : ''}}>Las Listrik</option>
          <option value="Tata Rias Wajah dan Hijab" {{$formulir->peminatan == 'Tata Rias Wajah dan Hijab'? 'selected' : ''}}>Tata Rias Wajah dan Hijab</option>
          <option value="Financial Life Skill" {{$formulir->peminatan == 'Financial Life Skill'? 'selected' : ''}}>Financial Life Skill</option>
          <option value="Barista" {{$formulir->peminatan == 'Barista'? 'selected' : ''}}>Barista</option>
          <option value="Catering" {{$formulir->peminatan == 'Catering'? 'selected' : ''}}>Catering</option>
          <option value="Otomotif Service Sepeda Motor Ringan" {{$formulir->peminatan == 'Otomotif Service Sepeda Motor Ringan'? 'selected' : ''}}>Otomotif Service Sepeda Motor Ringan</option>
          <option value="Bakery" {{$formulir->peminatan == 'Bakery'? 'selected' : ''}}>Bakery</option>
          <option value="Start Up" {{$formulir->peminatan == 'Start Up'? 'selected' : ''}}>Start Up</option>
          <option value="Teknik Cukur Dasar" {{$formulir->peminatan == 'Teknik Cukur Dasar'? 'selected' : ''}}>Teknik Cukur Dasar</option>
      </select>
  </div>
  <div class="card-footer">
      <input type="submit" class="btn btn-success" value="Ganti" name="">
      <a href="{{ url('user') }}" class="btn btn-default">Batal</a>
  </div>
</form>
</div>
</div>
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
            $('#provinsi').on('change', function () {
                onChangeSelect('{{ route("cities") }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function () {
                onChangeSelect('{{ route("districts") }}', $(this).val(), 'kecamatan');
            })
            $('#kecamatan').on('change', function () {
                onChangeSelect('{{ route("villages") }}', $(this).val(), 'desa');
            })
        });
    </script>
    @endsection
