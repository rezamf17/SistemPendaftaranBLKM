<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Tanda Terima Bahan/Alat Praktik</title>
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
	<h3>TANDA TERIMA BAHAN/ALAT PRAKTIK</h3>
  <h4>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
    TAHUN {{$tahun}} <br> DI {{$tempat->cities->name}}</h4>  
    <hr>
	<label>Hari : {{$hari}}/{{$tanggal}}</label>  <br>
    <label>Tempat : {{$tempat->cities->name}}</label> <br>
    <label>Peminatan : {{$peminatan}}</label>
    <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th style="width: 340px;">Alamat Asal</th>
            <th>Bahan Praktik</th>
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
              <td>1 Paket</td>
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