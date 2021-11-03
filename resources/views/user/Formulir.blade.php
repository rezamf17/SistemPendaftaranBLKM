@extends('layouts.temp')
@section('title')
Isi Formulir
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Isi Formulir</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Isi Formulir</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
  <div class="card">
    <div class="card-header">Isi Formulir</div>
    <div class="card-body">
      <form action="{{ url('Formulir') }}" method="POST">
      @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="nama" required> 
            </div>
            <div class="form-group">
                <label>Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" name="ttl" required>
                <i>*Contoh : Bandung, 18 April 1987</i>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" ></textarea>
                <label>Kabupaten/Kota</label>
                <select name="kota" class="form-control" id="data">
                </select>
            </div>
            <div class="form-group">
                <label>Nomor Kartu Keluarga</label>
                <input type="text" class="form-control" name="no_kk" required> 
            </div>
            <div class="form-group">
                <label>Nomor KTP</label>
                <input type="text" class="form-control" name="no_ktp" required> 
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                  <option value="">-Silahkan Pilih Jenis Kelamin-</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerjaan/Unit Usaha Saat Ini</label>
                <input type="text" class="form-control" name="pekerjaan"> 
            </div>
            <div class="form-group">
                <label>Nomor Handphone</label>
                <input type="text" class="form-control" name="no_hp"> 
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" class="form-control" name="no_rek">
                <label>Nama Bank</label>
                <input type="text" class="form-control" name="bank"> 
            </div>
            <div class="form-group">
                <label>Peminatan</label>
                <select name="peminatan" class="form-control">
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
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan" name="">
            <a href="{{ url('user') }}" class="btn btn-default">Batal</a>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <script>
    const url_kota = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=32';
fetch(url_kota).then(
  res => {
    res.json().then(
      data => {
        console.log(data.kota_kabupaten);
        if (data.kota_kabupaten.length > 0) {

          var temp = "";
          temp += '<option>Pilih Kota</option>'
          data.kota_kabupaten.forEach((itemData) => {
            temp += '<option value="'+itemData.nama+'">'+itemData.nama+'</option>'
          });
          document.getElementById('data').innerHTML = temp;
        }
      }
    )
  }
)
  </script