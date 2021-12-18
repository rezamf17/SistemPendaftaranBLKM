@extends('layouts.temp')
@section('title')
Pengumuman
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Kelola Pengumuman</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kelola Pengumuman</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">Kelola Pengumuman</div>
      <div class="card-body">
        <a href="{{ url('Pengumuman/create') }}" class="btn btn-primary" title="Buat Pengumuman"><i class="fa fa-plus"></i>Buat Pengumuman</a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pengumuman as $element)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$element->judul}}</td>
              <th>
                <a href="{{ url('Pengumuman/'.$element->id.'/edit') }}" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
                <form action="{{url('Pengumuman', $element->id)}}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus pengumuman?')">
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
    </div>
  </div>  
   @include('sweetalert::alert')
  @endsection
