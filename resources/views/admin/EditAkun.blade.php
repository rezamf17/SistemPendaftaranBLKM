@extends('layouts.temp')
@section('title')
Edit Akun
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Akun</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Akun</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">Edit Akun</div>
    <div class="card-body">
      <form action="{{url('KelolaAkun/'.$users->id)}}" method="POST">

              <div class="form-group">
                @csrf
                @method('put')
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{$users->name}}" required>
                @error('nama_barang')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Nomor HP</label>
                <input type="number" name="phone" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Nomor HP" value="{{$users->phone}}" required>
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
                  <option value="1" @if($users->role == 1) selected @endif>Admin</option>
                  <option value="2" @if($users->role == 2) selected @endif>User</option>
                </select>
                @error('jumlah')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                  <option value="">-Pilih Status-</option>
                  <option value="Calon Peserta" @if($users->status == 'Calon Peserta') selected @endif>Calon Peserta</option>
                  <option value="Peserta" @if($users->status == 'Peserta') selected @endif>Peserta</option>
                  <option value="Alumni" @if($users->status == 'Alumni') selected @endif>Alumni</option>
                </select>
              </div>
              </select>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password">
                @error('jumlah')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
                <i>*Kosongkan Password Jika Tidak Diganti</i>
              </div>
              <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror"  placeholder="Konfirmasi Password">
                @error('jumlah')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Update" name="">
            <a href="{{ url('KelolaAkun') }}" class="btn btn-default">Batal</a>
            </div>
              
            </form>
        </div>
        <!-- /.modal-content -->
      </div>
    </div>
  </div>
            

      @endsection
