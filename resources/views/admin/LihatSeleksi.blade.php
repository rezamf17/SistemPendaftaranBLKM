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
      Hasil Seleksi Data Peserta Di {{$seleksis->cities->name}} Dengan Peminatan {{$seleksis->peminatan}}
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
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Peminatan</th>
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
              <td>{{$element->kota}}</td>
              <td>{{$element->jenis_kelamin}}</td>
              <td>{{$element->no_hp}}</td>
              <td>{{$element->peminatan}}</td>
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
