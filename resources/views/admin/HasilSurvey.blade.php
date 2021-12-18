@extends('layouts.temp')
@section('title')
Hasil Survey
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Hasil Survey</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hasil Survey</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
    <div class="card">
      <table class="table">
        <thead>
          <tr>
            <th>Nomor Soal</th>
            <th>Soal</th>
            <th>Jawab A</th>
            <th>Jawab B</th>
            <th>Jawab C</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Program pelatihan yang dilaksanakan oleh Balai Latihan Kerja Mandiri (BLKM) menurut saudata telah sesuai dengan kurikulum?</td>
            <td>{{$percentA1}}%</td>
            <td>{{$percentB1}}%</td>
            <td>{{$percentC1}}%</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Menurut saudara program pelatihan yang dilaksanakan oleh Balai Latihan Kerja Mandiri (BLKM) dapat memberikan manfaat bagi peserta lain?</td>
            <td>{{$percentA2}}%</td>
            <td>{{$percentB2}}%</td>
            <td>{{$percentC2}}%</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Menurut Saudara apakah instruktur/Pengajar telah sesuai dengan kebutuhan?</td>
            <td>{{$percentA3}}%</td>
            <td>{{$percentB3}}%</td>
            <td>{{$percentC3}}%</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Menurut Saudara Penyampaian Materi oleh instruktur/Pengajar dengan jelas
            dan dapat dimengerti oleh Peserta Pelatihan?</td>
            <td>{{$percentA4}}%</td>
            <td>{{$percentB4}}%</td>
            <td>{{$percentC4}}%</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Bagaimana Menurut Saudara keterampilan Instruktur/Pengajar saat
            melakukan praktek?</td>
            <td>{{$percentA5}}%</td>
            <td>{{$percentB5}}%</td>
            <td>{{$percentC5}}%</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Menurut Saudara apakah Penyelenggara/Panitia dapat membantu peserta
            dalam memberikan layanan dan bimbingan pada saat praktek?</td>
            <td>{{$percentA6}}%</td>
            <td>{{$percentB6}}%</td>
            <td>{{$percentC6}}%</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Menurut Saudara bagaimana tanggung jawab penyelenggara/panitia
            terhadap kenyamanan peserta saat berada ditempat Pelatihan?</td>
            <td>{{$percentA7}}%</td>
            <td>{{$percentB7}}%</td>
            <td>{{$percentC7}}%</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Bagaimana menurut Saudara sarana dan prasarana yang diberikan oleh
            BLKM selama Pelatihan sesuai dengan kebutuhan?</td>
            <td>{{$percentA8}}%</td>
            <td>{{$percentB8}}%</td>
            <td>{{$percentC8}}%</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Sudah Sesuaikah Pelatihan yang saudara ikuti sekarang dengan arah minat dan bidang usaha yang sedang ditekuni?</td>
            <td>{{$percentA9}}%</td>
            <td>{{$percentB9}}%</td>
            <td>{{$percentC9}}%</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Apakah menurut saudara Pelatihan yang telah dilaksanakan selama berhari-hari sudah cukup?</td>
            <td>{{$percentA10}}%</td>
            <td>{{$percentB10}}%</td>
            <td>{{$percentC10}}%</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Program pelatihan yang dilaksanakan oleh Balai Latihan Kerja Mandiri (BLKM) menurut saudata telah sesuai dengan kurikulum?</td>
            <td>{{$percentA11}}%</td>
            <td>{{$percentB11}}%</td>
            <td>{{$percentC11}}%</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
<div class="container">
  <div class="card">
    <div class="card-header"> No 12 & 13</div>
    <div class="card-body">
      <table class="table" id="example1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Soal 12</th>
            <th>Nomor Soal 13</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $element)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$element->nama->name}}</td>
              <td>{{$element->soal_12}}</td>
              <td>{{$element->soal_13}}</td>
              <th>
                <a href="{{ url('JawabanSurvey/'.$element->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i>Lihat Semua Jawaban</a>
              </th>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
@section('script')

  @endsection
