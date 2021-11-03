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
  {{-- <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>1</th>
        <th>2</th>
      </tr>
    </thead>
    <tbody id="data">

    </tbody>
  </table> --}}
  {{-- <select name="kota" class="form-control" id="data">
    <option value="">Pilih Kota/Kabupaten</option>
  </select> --}}
  <form action="{{ url('catchAPI') }}" method="post" accept-charset="utf-8">
    @csrf
  <select name="provinsi" id="provinsi">
    <option value="">Pilih</option>
  </select>
  <select name="kabupaten" id="kabupaten">
    <option value="">Pilih</option>
  </select>
  <select name="kecamatan" id="kecamatan">
    <option value="">Pilih</option>
  </select>
  <select name="kelurahan" id="kelurahan">
    <option value="">Pilih</option>
  </select>
  <button type="submit">submit</button>
  </form>
  <button type="button" id="show">GET DATA JSON</button>
            <div id="output"></div>
            <script>
            
              
            </script>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
<script>
  var render=createwidgetlokasi("provinsi","kabupaten","kecamatan","kelurahan");
  $(document).ready(function(){
                $("#show").click(function(){
                    $("#output").html(_0x7547x2);
                });            
            });
</script>
{{-- <script>
  const url_kota = 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=32';
fetch(url).then(
  res => {
    res.json().then(
      data => {
        console.log(data.kota_kabupaten);
        if (data.kota_kabupaten.length > 0) {

          var temp = "";
          data.kota_kabupaten.forEach((itemData) => {
            temp += "<tr>";
            temp += "<td>" + itemData.id + "</td>";
            temp += "<td>" + itemData.id_provinsi + "</td>";
            temp += "<td>" + itemData.nama + "</td></tr>";
            temp += '<option value="'+itemData.nama+'">'+itemData.nama+'</option>'
          });
          document.getElementById('data').innerHTML = temp;
        }
      }
    )
  }
)
</script> --}}
@endsection
