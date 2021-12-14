@extends('layouts.temp')
@section('title')
Lihat User
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Lihat User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lihat User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
  <div class="card">
    <div class="card-header">Data User : {{$formulir->nama}}
      
    </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <td>{{$formulir->nama}}</td>
            </tr>
            <tr>
              <th>Umur</th>
              <td>{{$formulir->umur}}</td>
            </tr>
            <tr>
              <th>Tempat, Tanggal Lahir</th>
              <td>{{$formulir->ttl}}</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>{{$formulir->alamat}}</td>
            </tr>
            <tr>
              <th>Provinsi</th>
              <td>{{$formulir->provinces->name}}</td>
            </tr>
            <tr>
              <th>Kota/Kabupaten</th>
              <td>{{$formulir->cities->name}}</td>
            </tr>
            <tr>
              <th>Kecamatan</th>
              <td>{{$formulir->districts->name}}</td>
            </tr>
            <tr>
              <th>Kelurahan</th>
              <td>{{$formulir->villages->name}}</td>
            </tr>
            <tr>
              <th>No Kartu Keluarga</th>
              <td>{{$formulir->no_kk}}</td>
            </tr>
            <tr>
              <th>No KTP</th>
              <td>{{$formulir->no_ktp}}</td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>{{$formulir->jenis_kelamin}}</td>
            </tr>
            <tr>
              <th>Pekerjaan</th>
              <td>{{$formulir->pekerjaan}}</td>
            </tr>
            <tr>
              <th>Pendidikan</th>
              <td>{{$formulir->pendidikan}}</td>
            </tr>
            <tr>
              <th>Angkatan</th>
              <td>{{$formulir->angkatan}}</td>
            </tr>
            <tr>
              <th>No HP</th>
              <td>{{$formulir->no_hp}}</td>
            </tr>
            <tr>
              <th>No Rekening</th>
              <td>{{$formulir->no_rek}}</td>
            </tr>
            <tr>
              <th>Bank</th>
              <td>{{$formulir->bank}}</td>
            </tr>
            <tr>
              <th>Atas Nama</th>
              <td>{{$formulir->atas_nama}}</td>
            </tr>
            <tr>
              <th>Peminatan</th>
              <td>{{$formulir->peminatan}}</td>
            </tr>
            <tr>
              <th>Foto KTP</th>
              <td><img width="150px" src="{{ url('/data_file/'.$formulir->foto_ktp) }}"></td>
            </tr>
        </table>
        </div>
        <div class="card-footer">
          <a href="{{ url('Formulir/'.$formulir->id.'/edit') }}" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
          <form action="{{ url('Formulir/'.$formulir->id) }}" method="post" class="d-inline" accept-charset="utf-8">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</button>
          </form>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-sm">
            <i class="fa fa-random"></i>Ganti Status
          </button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-cetak-sertifikat">
            <i class="fa fa-print"></i>Cetak Sertifikat
          </button>
          <a href="{{ url('Formulir/exports/'.$formulir->id) }}" class="btn btn-danger"><i class="fa fa-print"></i>Buat Laporan</a>
          <a href="{{ url('Formulir') }}" class="btn btn-default"><i class="fa fa-repeat"></i>Batal</a>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ganti Status</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('Formulir/GantiStatus/'.$formulir->id) }}" method="post" accept-charset="utf-8">
              @csrf
              @method('put')
            <div class="modal-body">
              <select name="status" class="form-control" required>
                <option value="">-Pilih Status Baru-</option>
                <option value="Calon Peserta">Calon Peserta</option>
                <option value="Peserta">Peserta</option>
                <option value="Alumni">Alumni</option>
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
      <!-- /.modal -->
      <div class="modal fade" id="modal-cetak-sertifikat">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Cetak Sertifikat</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ url('ViewSertifikat/'.$formulir->id) }}" method="post" accept-charset="utf-8">
              @csrf
            <div class="modal-body">
              <label>Nomor Sertifikat</label>
              <input type="text" name="nomor" class="form-control">
              <label>Tahun</label>
              <input type="number" min="1900" max="2099" value="2021" step="1" class="form-control" name="tahun">
              <label>Tempat Pelatihan</label>
              <input type="text" name="tempat" class="form-control">
              <label>Tanggal Mulai Pelatihan</label>
              <input type="text" name="mulai" class="form-control">
              <label>Tanggal Selesai Pelatihan</label>
              <input type="text" name="selesai" class="form-control">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Lihat Print</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @include('sweetalert::alert')
      @endsection
