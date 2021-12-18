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
    TAHUN {{$tempat->angkatan}} <br>
    DI {{$tempat->cities->name}}</h4>  
    <hr>
	<label>Hari :</label> {{$hari}}/{{$tanggal}} <br>
    <label>Tempat :</label>{{$tempat->cities->name}} <br>
    <label>Peminatan :</label>{{$peminatan}}
	<table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th style="width: 340px;">Alamat</th>
            <th colspan="2">Tanda Tangan</th>
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
              <td>
                @if ($loop->iteration % 2 == 0)
                  
                @else
                  {{$loop->iteration}}.
                @endif
            </td>
              <td>
                @if ($loop->iteration % 2 == 1)
                  
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