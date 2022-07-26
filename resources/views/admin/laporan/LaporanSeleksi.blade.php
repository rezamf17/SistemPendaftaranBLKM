<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Seleksi</title>
	<style>
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
    h2, h3 {
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
	 <h2>LAPORAN SELEKSI PESERTA</h2>
  <h3>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI</h3>
    <hr>
    Tempat : {{$kota}} <br>
    Peminatan : {{$peminatan}} <br>
    Nama Hasil Seleksi : {{$nama}}
    <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Peminatan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($seleksi as $element)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$element->nama}}</td>
              <td>{{$element->ttl}}</td>
              <td>{{$element->alamat}}</td>
              <td>{{$element->cities->name}}</td>
              <td>{{$element->jenis_kelamin}}</td>
              <td>{{$element->no_hp}}</td>
              <td>{{$element->peminatan}}</td>
            </tr>
          @endforeach
        </tbody>
      </table> 
</body>
</html>