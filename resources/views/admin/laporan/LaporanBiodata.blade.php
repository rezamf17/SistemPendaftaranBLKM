<style>
  body{
    font-family: arial;
  }
  h3{
    text-align: center;
  }
  h4{
    text-align: center;
  }
  table{
    font-size: 17px;
    text-align: left;
    margin-left: 30px;
  }
  td{
    padding-left: 30px;
  }
</style>
<h3>BIODATA PESERTA</h3>
<h4>PELATIHAN PENINGKATAN KETERAMPILAN KERJA MANDIRI <br> 
TAHUN {{$formulir->angkatan}}</h4>  
<table>
          <thead>
            <tr>
              <th>Nama</th>
              <td>{{$formulir->nama}}</td>
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
              <th>Provinsi</th>
              <td>{{$formulir->provinces->name}}</td>
            </tr>
            <tr>
              <th>Kota/Kabupaten</th>
              <td>{{$formulir->cities->name}}</td>
            </tr>
            <tr>
              <th>Kecamatan</th>
              <td>{{$formulir->districts->name}}</td>
            </tr>
            <tr>
              <th>Kelurahan</th>
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
            <tr>
              <th>Status</th>
              <td>{{$formulir->status}}</td>
            </tr>
        </table>
