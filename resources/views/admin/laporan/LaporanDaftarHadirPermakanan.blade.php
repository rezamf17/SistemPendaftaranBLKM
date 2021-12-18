<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Daftar Hadir Permakanan</title>
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
	<h3>DAFTAR HADIR PERMAKANAN</h3>
  <h4>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
    TAHUN {{$tempat->angkatan}}</h4>
    <h4>DI {{$tempat->cities->name}}</h4>  
    <hr>
    <label>Tempat :</label>{{$tempat->cities->name}} <br>
	<table>
        <thead>
          <tr>
            <th rowspan="3">No</th>
            <th rowspan="3">Nama</th>
            <th colspan="15">Tanda Tangan</th>
          </tr>
          <tr>
            <th colspan="5">
              {{$hari1}}/{{$tanggal1}}
            </th>
            <th colspan="5">
              {{$hari2}}/{{$tanggal2}}
            </th>
            <th colspan="5">
              {{$hari3}}/{{$tanggal3}}
            </th>
          </tr>
          <tr>
            <th>Pagi</th>
            <th>Snack</th>
            <th>Siang</th>
            <th>Snack</th>
            <th>Malam</th>
            <th>Pagi</th>
            <th>Snack</th>
            <th>Siang</th>
            <th>Snack</th>
            <th>Malam</th>
            <th>Pagi</th>
            <th>Snack</th>
            <th>Siang</th>
            <th>Snack</th>
            <th>Malam</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($formulir as $element)
            <tr>
             <td>{{$loop->iteration}}</td>
             <td>{{$element->nama}}</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
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