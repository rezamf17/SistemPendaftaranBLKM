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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Seleksi Data</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">Pilih Data Yang Ingin Di Seleksi</div>
      <div class="card-body">
        <div class="form-group">
          <label>Pilih Kota/Kabupaten</label>
          <select name="kota" class="form-control" id="kota">
            <option value="" >==Pilih Salah Satu==</option>
          @foreach ($seleksi as $element)
            <option value="{{$element->id}}">{{$element->name}}</option>
          @endforeach
          </select>
          <label>Pilih Kecamatan</label>
          <select name="kecamatan" class="form-control" id="kecamatan">
            <option value="" ></option>
          </select>
          <div class="card-footer">
            <a href="" class="btn btn-primary">Seleksi</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      Seleksi Data
      <div class="float-right"><a href="" title=""></a></div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kota</th>
            {{-- <th>No Kartu Keluarga</th> --}}
            {{-- <th>No KTP</th> --}}
            <th>Jenis Kelamin</th>
            {{-- <th>Pekerjaan</th> --}}
            <th>No HP</th>
            {{-- <th>No Rekening</th> --}}
            {{-- <th>Bank</th> --}}
            <th>Peminatan</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Akun</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('KelolaAkun')}}" method="POST">

            <div class="form-group">
              @csrf
              <label>Nama Lengkap</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" required>
              @error('nama_barang')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Nomor HP</label>
              <input type="number" name="phone" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nomor HP" required>
              @error('jumlah')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Level</label>
              <select name="role" class="form-control" id="main_menu" required>
                <option value="">--Pilih Level--</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
              </select>
              @error('jumlah')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

          </select>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" required>
            @error('jumlah')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror"  placeholder="Konfirmasi Password" required>
            @error('jumlah')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Simpan" name="">
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
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
