<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Biodata</title>
  <link rel="stylesheet" href="">
  <style type="text/css" media="screen">
    body{

    }
    h2{
      text-align: center;
      font-family: sans-serif;
    }
    h3{
      text-align: center;
      font-family: sans-serif;
    }
    table{
      font-size: 20px;
      text-align: left;
      margin-left: 30px;
      font-family: sans-serif;
    }
    td{
      padding-left: 30px;
      text-align: left;
    }
    th{
      text-align: left;
    }
    .ttd{
      margin-left: 540px;
      text-align: center;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <h2>BIODATA PESERTA</h2>
  <h3>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
    TAHUN {{$formulir->angkatan}}</h3>  
    <hr> 
      <table>
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
            <th></th>
            <td style="font-weight: bold;">Provinsi</td>
            <td>{{$formulir->provinces->name}}</td>
          </tr>
          <tr>
            <th></th>
            <td style="font-weight: bold;">Kota/Kabupaten</td>
            <td>{{$formulir->cities->name}}</td>
          </tr>
          <tr>
            <th></th>
            <td style="font-weight: bold;">Kecamatan</td>
            <td>{{$formulir->districts->name}}</td>
          </tr>
          <tr>
            <th></th>
            <td style="font-weight: bold;">Kelurahan</td>
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
        </table> <br>
      <div class="ttd">
        ..... , ................{{$formulir->angkatan}}<br>
        Peserta, <br><br><br><br>
        {{$formulir->nama}}
      </div>
    </body>
    </html>