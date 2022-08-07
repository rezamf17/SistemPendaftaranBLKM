@extends('layouts.temp')
@section('title')
Isi Formulir
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Isi Formulir</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Isi Formulir</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
  <div class="card">
    <div class="card-header">Isi Formulir</div>
    <div class="card-body">
      <form action="{{ url('UserFormulir') }}" method="POST" enctype="multipart/form-data">
      @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="nama" required> 
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="number" class="form-control" name="umur" required> 
            </div>
            <div class="form-group">
                <label>Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" name="ttl" required>
                <i>*Contoh : Bandung, 18 April 1987</i>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" ></textarea>
                <label>Provinsi</label>
                @php
                    $provinces = new App\Http\Controllers\DependentDropdownController;
                    $provinces= $provinces->provinces();
                @endphp
                <select class="form-control" name="provinsi" id="provinsi" required>
                    <option>Pilih Provinsi</option>
                    @foreach ($provinces as $item)
                        <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                    @endforeach
                </select>
                <label>Kota/Kabupaten</label>
                <select class="form-control" name="kota" id="kota" required>
                    <option>Pilih Kota/Kabupaten</option>
                </select>
                <label>Kecamatan</label>
                <select class="form-control" name="kecamatan" id="kecamatan" required>
                    <option>Pilih Kecamatan</option>
                </select>
                <label>Desa/Keluharan</label>
                <select class="form-control" name="desa" id="desa" required>
                    <option>Pilih Desa/Kelurahan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" name="no_kk" disabled>
                <i>*Nomor Kartu Keluarga dan Nomor KTP diisi saat sudah jadi peserta</i> 
            </div>
            <div class="form-group">
                <label>Nomor KTP</label>
                <input type="text" class="form-control" name="no_ktp" disabled> 
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                  <option value="">-Silahkan Pilih Jenis Kelamin-</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerjaan/Unit Usaha Saat Ini</label>
                <input type="text" class="form-control" name="pekerjaan" required> 
            </div>
            <div class="form-group">
                <label>Pendidikan</label>
                <select name="pendidikan" class="form-control" required>
                     <option value="">-Pilih Pendidikan-</option>
                     <option value="SD">SD</option>
                     <option value="SMP">SMP</option>
                     <option value="SMA/SMK">SMA/SMK</option>
                     <option value="S1">S1</option>
                     <option value="S2">S2</option>
                     <option value="S3">S3</option>
                     <option value="Paket A">Paket A</option>
                     <option value="Paket B">Paket B</option>
                     <option value="Paket C">Paket C</option>
                 </select> 
            </div>
            <div class="form-group">
                <label>Angkatan</label>
                <input type="number" class="form-control" name="angkatan" value="2021" required> 
            </div>
            <div class="form-group">
                <label>Nomor Handphone</label>
                <input type="text" class="form-control" name="no_hp" value="{{Auth::user()->phone}}"> 
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" class="form-control" name="no_rek" disabled>
                <i>*Nomor Rekening dan Nama Bank Diisi Pada Saat Sudah Menjadi Peserta</i><br>
                <label>Nama Bank</label>
                <input type="text" class="form-control" name="bank" disabled>
                <label>Atas Nama</label>
                 <input type="text" name="atas_nama" class="form-control" disabled=""> 
            </div>
            <div class="form-group">
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
            </div>
            <div class="form-group">
                <label>Foto/Scan KTP</label>
                <input type="file" name="foto_ktp" class="form-control-file" required>
                {{-- <input type="text" name="foto_ktp" class="form-control" required> --}}
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan" name="">
            <a href="{{ url('user') }}" class="btn btn-default">Batal</a>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
