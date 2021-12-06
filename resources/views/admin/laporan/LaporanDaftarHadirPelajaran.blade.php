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
      width: 100%;
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
	<h3>DAFTAR HADIR PELAJARAN</h3>
  <h4>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
    TAHUN {{$tempat->angkatan}}</h4>
    <h4>DI {{$tempat->cities->name}}</h4>  
    <hr>
    <label>Tempat :</label>{{$tempat->cities->name}} <br>
    <label>Peminatan :</label>{{$peminatan}}
	<table>
        <thead>
          <tr>
            <th rowspan="4">No</th>
            <th rowspan="4">Nama Peserta</th>
            <th colspan="6" style="width: 500px;">Jadwal Pelajaran</th>
          </tr>
          <tr>
            <th colspan="6" style="width: 500px;">{{$hari}}/{{$tanggal}}</th>
          </tr>
          <tr>
            <th>
              {{$jam_awal_1}} -
              {{$jam_akhir_1}}
            </th>
            <th>
              {{$jam_awal_2}}-
              {{$jam_akhir_2}}
            </th>
            <th>
              {{$jam_awal_3}}-
              {{$jam_akhir_3}}
            </th>
            <th>
              {{$jam_awal_4}}-
              {{$jam_akhir_4}}
            </th>
            <th>
              {{$jam_awal_5}}-
              {{$jam_akhir_5}}
            </th>
            <th>
              {{$jam_awal_6}}-
              {{$jam_akhir_6}}
            </th>
          </tr>
          <tr>
            <th>
              {{$nama_pertemuan_1}}
            </th>
            <th>
             {{$nama_pertemuan_2}}
            </th>
            <th>
              {{$nama_pertemuan_3}}
            </th>
            <th>
              {{$nama_pertemuan_4}}
            </th>
            <th>
              {{$nama_pertemuan_5}}
            </th>
            <th>
              {{$nama_pertemuan_6}}
            </th>
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