@extends('layouts.temp')
@section('title')
Kelola Akun
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Kelola Akun</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Kelola Akun</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
        <i class="fa fa-plus"></i> Tambah Akun
      </button>
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
            <th>Nomor HP</th>
            <th>Level</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>@if ($item->role == 1)
              Admin
              @elseif($item->role == 2)
              User
              @else
              -
              @endif
            </td>
            <td>{{$item->status}}</td>
            <th>
              <a href="{{url('KelolaAkun/'.$item->id.'/edit')}}" title="" class="btn btn-success"> 
                <i class="fa fa-edit"></i>Edit</a>
                <form action="{{url('KelolaAkun', $item->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>Hapus
                  </button>
                </form>
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
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group">
                <label>Nomor HP</label>
                <input type="number" name="phone" class="form-control" placeholder="Nomor HP" required>
              </div>
              <div class="form-group">
                <label>Level</label>
                <select name="role" class="form-control" required>
                  <option value="">--Pilih Level--</option>
                  <option value="1">Admin</option>
                  <option value="2">User</option>
                </select>
              </div>

              </select>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control"  placeholder="Password" required>
              </div>
              <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control"  placeholder="Konfirmasi Password" required>
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
