@extends('layouts.temp')
@section('title')
Hasil Seleksi Data
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Hasil Seleksi Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Hasil Seleksi Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">
      Hasil Seleksi Data Peserta
      <div class="float-right"><a href="" title=""></a></div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ url('LaporanSeleksi') }}" method="post" accept-charset="utf-8">
      @csrf
      @if ($seleksiPeminatan == null)
      Maaf Data Tidak Ada
       @else 
      <div class="form-group">
        Tempat
        <input type="text" name="kota" value="{{$seleksiPeminatan->cities->name}}" class="form-control">
        <input type="text" name="id_cities" value="{{$seleksiPeminatan->id_cities}}" style="display: none;">
      </div>
      <div class="form-group">
        Peminatan
        <input type="text" name="peminatan" value="{{$seleksiPeminatan->peminatan}}" class="form-control">
        <br>
        Status
        <select name="stats" class="form-control" id="main_menu" aria-readonly="true" required>
          <option value="">--Pilih Status--</option>
          <option value="Calon Peserta" @if($seleksiPeminatan->status == "Calon Peserta") selected @endif>Calon Peserta</option>
          <option value="Peserta" @if($seleksiPeminatan->status == "Peserta") selected @endif>Peserta</option>
          <option value="Alumni" @if($seleksiPeminatan->status == "Alumni") selected @endif>Alumni</option>
        </select>
        <br>
        Nama Hasil Seleksi
        <input type="text" class="form-control" name="nama" value="{{$nama}}">
        <br>
         {{-- <button type="submit" class="btn btn-danger"><i class="fa fa-file"></i>Buat Laporan</button> --}}
         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-report"><i class="fa fa-file"></i>Buat Laporan</button>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">
          <i class="fa fa-random"></i>Ganti Semua Status
        </button>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-save">
          <i class="fa fa-save"></i>Simpan Seleksi Pelatihan
        </button>
      @endif
      </form>
      </div>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Peminatan</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($seleksi as $element)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$element->nama}}</td>
              <td>{{$element->ttl}}</td>
              <td>{{$element->alamat}}</td>
              <td>{{$seleksiPeminatan->cities->name}}</td>
              <td>{{$element->jenis_kelamin}}</td>
              <td>{{$element->no_hp}}</td>
              <td>{{$element->peminatan}}</td>
              <td>{{$element->status}}</td>
              <th>
             {{--  <a href="{{url('KelolaAkun/'.$element->id.'/edit')}}" title="" class="btn btn-success"> 
                <i class="fa fa-edit"></i>Edit</a>
                <form action="{{url('KelolaAkun', $element->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>Hapus
                  </button>
                </form> --}}
                <a href="{{ url('Formulir/'.$element->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i>Lihat</a>
              </th>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  </div>
  <div class="modal fade" id="modal-sm">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Ganti Status<h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('gantiSemuaStatus/'.$seleksiPeminatan->id) }}" method="post" accept-charset="utf-8">
          @csrf
          @method('patch')
        <div class="modal-body">
          <input type="text" name="kota" value="{{$seleksiPeminatan->cities->name}}" class="form-control" style="display: none;">
          <input type="text" name="id_cities" value="{{$seleksiPeminatan->id_cities}}" style="display: none;">
          <input type="text" name="peminatan" value="{{$seleksiPeminatan->peminatan}}" class="form-control" style="display: none;">
          @foreach ($seleksi as $item)
          <input type="text" name="id[]" value="{{$item->id_user}}" style="display: none;">
          @endforeach
          <select name="status" class="form-control" id="main_menu" aria-readonly="true" required>
            <option value="">--Pilih Status--</option>
            <option value="Calon Peserta" @if($seleksiPeminatan->status == "Calon Peserta") selected @endif>Calon Peserta</option>
            <option value="Peserta" @if($seleksiPeminatan->status == "Peserta") selected @endif>Peserta</option>
            <option value="Alumni" @if($seleksiPeminatan->status == "Alumni") selected @endif>Alumni</option>
          </select>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ganti</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <div class="modal fade" id="modal-save">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Simpan Data ?</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('simpanSeleksiData') }}" method="post" accept-charset="utf-8">
          @csrf
          @method('post')
        <div class="modal-body">
          <h5>Anda Yakin Ingin Menyimpan Data?</h5>
          <div style="display: none;">
            <input type="text" value="{{$seleksiPeminatan->id_cities}}" name="id_cities">
            <input type="text" value="{{$seleksiPeminatan->peminatan}}" name="peminatan">
            <input type="text" value="{{$seleksiPeminatan->status}}" name="stats">
            <input type="text" value="{{$nama}}" name="nama">

          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <div class="modal fade" id="modal-report">
    <div class="modal-dialog modal-lg" >
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buat Laporan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('ViewAbsensi/'.$seleksiData->id) }}" method="post" accept-charset="utf-8">
          @csrf
          @method('post')
        <div class="modal-body">
          <div style="display:;">
              <table class="table bordered">
                <tr>
                  <th>Daftar Hadir</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Daftar Hadir Undangan</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Sertifikat</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Perlengkapan</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Hasil Praktik</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Obat-Obatan</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Bahan/Alat Praktik</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Bahan Materi</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Tanda Terima Permakanan</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Daftar Hadir Pelajaran</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Daftar Nominatif</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Biodata Peserta</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Sertifikat</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
                <tr>
                  <th>Seleksi Peserta</th>
                  <td>
                    <button type="submit" class="btn btn-danger">Buat Laporan</button>
                  </td>
                </tr>
              </table>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          {{-- <button type="submit" class="btn btn-success">Simpan</button> --}}
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
        });
    </script>
  @include('sweetalert::alert')
  @endsection
