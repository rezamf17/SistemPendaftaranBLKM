@extends('layouts.temp')
@section('title')
Laporan
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Laporan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="card">
    <div class="container">
      <div class="card">
        <div class="card-header">Laporan</div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Laporan</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Daftar Hadir</td>
                <th>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir">
                    <i class="fa fa-print"></i>Buat Laporan
                  </button>
                </th>
              </tr>
              <tr>
                <td>2</td>
                <td>Daftar Hadir Undangan</td>
                <th>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                    <i class="fa fa-print"></i>Buat Laporan
                  </button>
                </th>
              </tr>
              <tr>
                <td>3</td>
                <td>Tanda Terima Sertifikat</td>
                <th>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                    <i class="fa fa-print"></i>Buat Laporan
                  </button>
                </th>
              </tr>
              <tr>
                <td>4</td>
                  <td>Tanda Terima Perlengkapan</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>5</td>
                  <td>Tanda Terima Hasil Praktek</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>6</td>
                  <td>Tanda Terima Obat-Obatan</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>7</td>
                  <td>Tanda Terima Bahan/Alat Praktek</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>8</td>
                  <td>Tanda Terima Bahan Materi</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>9</td>
                  <td>Daftar Hadir Permakanan</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>10</td>
                  <td>Daftar Hadir Pelajaran</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>11</td>
                  <td>Daftar Nominatif</td>
                  <th>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-daftar-hadir-undangan">
                      <i class="fa fa-print"></i>Buat Laporan
                    </button>
                  </th>
              </tr>
              <tr>
                <td>12</td>
                  <td>Biodata Peserta</td>
                  <th>
                    <a href="{{ url('Formulir') }}" class="btn btn-danger"><i class="fa fa-print"></i>Buat Laporan</a>
                  </th>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 
    </div>

    <div class="modal fade" id="modal-daftar-hadir">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Daftar Hadir</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('ViewAbsensi') }}" method="post" accept-charset="utf-8">
            @csrf
            <div class="modal-body">
              <label>Hari/Tanggal</label>
              <input type="text" name="hari" class="form-control d-inline">
              <input type="date" name="tanggal" class="form-control d-inline">
              <label>Tahun</label>
              <input type="number" min="1900" max="2099" value="2021" step="1" class="form-control" name="tahun">
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
              <label>Kota/Kabupaten</label>
                <select name="cities" class="form-control" id="kota">
                <option value="" >-Pilih Kota/Kabupaten-</option>
                @foreach ($kota as $element)
                <option value="{{$element->id}}">{{$element->name}}</option>
                @endforeach
            </select>
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

    <div class="modal fade" id="modal-daftar-hadir-undangan">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Daftar Hadir Undangan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('ViewAbsensiUndangan') }}" method="post" accept-charset="utf-8">
            @csrf
            <div class="modal-body">
               <label>Hari/Tanggal</label>
                <input type="text" name="hari" class="form-control d-inline">
                <input type="date" name="tanggal" class="form-control d-inline">
                <label>Tahun</label>
              <input type="number" min="1900" max="2099" value="2021" step="1" class="form-control" name="tahun">
              <label>Kota/Kabupaten</label>
              <select name="cities" class="form-control" id="kota" onchange="change()">
              <option value="" >-Pilih Kota/Kabupaten-</option>
              @foreach ($kota as $element)
              <option value="{{$element->id}}">{{$element->name}}</option>
              @endforeach
            </select>
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
  </div>

   <div class="modal fade" id="modal-daftar-hadir-undangan">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tanda Terima Sertifikat</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('ViewAbsensiUndangan') }}" method="post" accept-charset="utf-8">
            @csrf
            <div class="modal-body">
               <label>Hari/Tanggal</label>
                <input type="text" name="hari" class="form-control d-inline">
                <input type="date" name="tanggal" class="form-control d-inline">
                <label>Tahun</label>
              <input type="number" min="1900" max="2099" value="2021" step="1" class="form-control" name="tahun">
              <label>Kota/Kabupaten</label>
              <select name="cities" class="form-control" id="kota" onchange="change()">
              <option value="" >-Pilih Kota/Kabupaten-</option>
              @foreach ($kota as $element)
              <option value="{{$element->id}}">{{$element->name}}</option>
              @endforeach
            </select>
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
  </div>
  @include('sweetalert::alert')
  @endsection

