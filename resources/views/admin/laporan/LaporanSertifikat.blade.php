<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Biodata</title>
  <link rel="stylesheet" href="">
  <style type="text/css" media="screen">
    h1{
      text-align: center;
      font-family: sans-serif;
    }
    h2{
      text-align: center;
      font-family: sans-serif;
    }
    table{
      font-size: 16px;
      text-align: left;
      margin-left: 35%;
      margin-right: 20%;
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
    .sertifikat{
      font-size: 17px;
      text-align: center;
      margin-top: 1%;
      font-family: sans-serif;
    }
    .sertifikat b{
      font-family: serif;
      font-size: 25px;
    }
    .nama{
      text-align: left;
    }
    .text{
      font-family: serif;
      font-style: italic;
      text-align: center;
      padding: 20px;
    }
    p{
      font-family: sans-serif;
      margin-left: 20px;
      margin-right: 20px;
    }
  </style>
</head>
<body>
  <h2>PEMERINTAH DAERAH PROVINSI JAWA BARAT</h2>
  <h1>DINAS TENAGA KERJA DAN TRANSMIGRASI</h1>
    
    <div class="sertifikat">
      <b><em><u>Sertifikat</u></em></b> <br>
    NO:{{$nomor}}
    </div>
    <div class="text">
      Diberikan Kepada :
    </div>
    <table>
      <tr>
        <th>Nama </th>
        <td>:{{$formulir->nama}}</td>
      </tr>
      <tr>
        <th>Tempat/Tanggal Lahir </th>
        <td>:{{$formulir->ttl}}</td>
      </tr>
      <tr>
        <th>Alamat/Asal </th>
        <td>:{{$formulir->alamat}}, 
                Desa/Kelurahan :{{$formulir->villages->name}}, <br>
                Kecamatan :{{$formulir->districts->name}},
                {{$formulir->cities->name}}</td>
      </tr>
    </table>

    <div class="text">
    Telah Mengikuti
    </div>

    <h2>PELATIHAN KERJA MANDIRI SESUAI MINAT USAHA TAHUN {{$formulir->angkatan}}</h2>
    <p>Diselenggarakan oleh Balai Latihan Kerja Mandiri Dinas Tenaga Kerja dan Transmigrasi Provinsi Jawa Barat di {{$tempat}} dari tanggal {{$mulai}} s.d. {{$selesai}} meliputi materi terlampir</p>
     
    </body>
    </html>    
