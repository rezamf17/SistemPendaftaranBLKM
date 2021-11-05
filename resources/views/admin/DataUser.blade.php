@extends('layouts.temp')
@section('title')
Data User
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">
      Data User
      {{-- <div class="float-right">
        <a href="{{ url('cetakDataAkun') }}" class="btn btn-danger"><i class="fa fa-print"></i>Print PDF</a>
        <a href="{{ url('exportDataAkun') }}" class="btn btn-success"><i class="fa fa-print"></i>Print Excel</a></div>
      </div> --}}
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
          @foreach ($formulir as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->ttl}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kota}}</td>
            {{-- <td>{{$item->no_kk}}</td> --}}
            {{-- <td>{{$item->no_ktp}}</td> --}}
            <td>{{$item->jenis_kelamin}}</td>
            {{-- <td>{{$item->pekerjaan}}</td> --}}
            <td>{{$item->no_hp}}</td>
            {{-- <td>{{$item->no_rek}}</td> --}}
            {{-- <td>{{$item->bank}}</td> --}}
            <td>{{$item->peminatan}}</td>
            <th>
             {{--  <a href="{{url('KelolaAkun/'.$item->id.'/edit')}}" title="" class="btn btn-success"> 
                <i class="fa fa-edit"></i>Edit</a>
                <form action="{{url('KelolaAkun', $item->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>Hapus
                  </button>
                </form> --}}
                <a href="{{ url('Formulir/'.$item->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i>Lihat</a>
              </th>     
            </tr>
            @endforeach

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
      @include('sweetalert::alert')
      @endsection
