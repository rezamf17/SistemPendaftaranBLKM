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
          @foreach ($formulir as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->ttl}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->cities->name}}</td>
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
                <a href="{{ url('Formulir/'.$item->id_user) }}" class="btn btn-primary"><i class="fa fa-eye"></i>Lihat</a>
              </th>     
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
        <!-- /.modal-content -->
      </div>
      @include('sweetalert::alert')
      @endsection
