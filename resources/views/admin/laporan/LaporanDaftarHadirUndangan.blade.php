<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Daftar Hadir</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		body{
			font-family: sans-serif;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
      padding:  6px;
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
	<h3>DAFTAR HADIR</h3>
  <h4>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
    TAHUN {{$tempat->angkatan}}</h4>
    <h4>DI {{$tempat->cities->name}}</h4>  
    <hr>
	<label>Hari :</label> {{$hari}}/{{$tanggal}} <br>
    <label>Tempat :</label>{{$tempat->cities->name}} <br>
	<table>
        <thead>
          <tr>
            <th>No</th>
            <th style="width: 300px;">Nama</th>
            <th style="width: 170px;">Jabatan</th>
            <th colspan="2">Tanda Tangan</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 1; $i <=20 ; $i++)
           <tr>
             <td>{{$i}}</td>
             <td></td>
             <td></td>
             <td style="width: 70px;">
               @if ($i % 2 == 0)
                 
                 @else
                 {{$i}}
               @endif
             </td>
             <td style="width: 70px;">
               @if ($i % 2 == 1)
                 
                 @else
                 {{$i}}
               @endif
             </td>
           </tr>
          @endfor
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