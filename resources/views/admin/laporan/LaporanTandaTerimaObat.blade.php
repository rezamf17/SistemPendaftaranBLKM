<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Tanda Terima Obat-obatan</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		body{
			font-family: sans-serif;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			padding:  3px;
			font-size: 15px;
		}
		label{
			font-size: 15px;
			text-align: left;
		}
    h4, h3 {
      text-align: center;
    }
    .ttd1{
      margin-top: 15px;
      text-align: center;
      margin-right: 60%;
      font-size: 12px;
    }
    .ttd2{
      margin-top: -36px;
      margin-left: 55%;
      text-align: center;
      font-size: 12px;
    }
  </style>
</head>
<body>
  <img src="{{asset('style/images/LogoJabar.jpg')}}" style=" width: 6em;height: 6em;position: absolute;padding-top:1em;">
	<h3>TANDA TERIMA OBAT-OBATAN</h3>
  <h4>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
    TAHUN {{$tahun}} <br> DI {{$tempat->cities->name}}</h4>  
    <hr>
    <label>Hari : {{$hari}}/{{$tanggal}}</label>  <br>
    <label>Tempat : {{$tempat->cities->name}}</label> <br>
    <label>Peminatan : {{$peminatan}}</label>
    <table>
      <thead>
        <tr>
          <th rowspan="2">No</th>
          <th rowspan="2">Nama</th>
          <th style="width: 340px;" rowspan="2">Alamat</th>
          <th colspan="2">Perlengkapan</th>
          <th colspan="2" rowspan="2">Tanda Tangan</th>
        </tr>
        <tr>
          <th style="font-size: 11px; text-align: left;">
            1. Fatigon <br>
            2. Paramex <br>
            3. Diapet 
          </th>
          <th style="font-size: 11px; text-align: left;">
            4. Antangin <br>
            5. Promaag
          </th>
        </tr>
      </thead>
      <tbody>
       @foreach ($formulir as $element)
       <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$element->nama}}</td>
        <td>{{$element->alamat}}, 
          Desa/Kelurahan :{{$element->villages->name}},
          Kecamatan :{{$element->districts->name}},
          Kota/Kabupaten :{{$element->cities->name}}</td>
          <td colspan="2">1 Paket</td>
          <td style="width: 70px;">
            @if ($loop->even)
            @else
            {{$loop->iteration}}.
            @endif
          </td>
          <td style="width: 70px;">
            @if ($loop->odd)
            @else
            {{$loop->iteration}}.
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="ttd1">
      Mengetahui : <br>
      Kepala Seksi Penyelenggaraan Pelatihan,
    </div>

    <div class="ttd2">
      Bandung, ............... {{$tahun}}<br>
      Urusan Administrasi,
    </div>
  </body>
  </html>