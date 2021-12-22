@extends('layouts.temp')
@section('title')
Jawaban Survey
@endsection
@section('breadcrumb')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Jawaban Survey</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Jawaban Survey</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @endsection
  @section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        Jawaban Survey Milik {{$kuesioner->nama->name}}
        <div class="float-right"><a href="{{ url('Survey') }}" class="btn btn-default">Kembali</a></div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Soal 1</th>
              <th>Soal 2</th>
              <th>Soal 3</th>
              <th>Soal 4</th>
              <th>Soal 5</th>
              <th>Soal 6</th>
              <th>Soal 7</th>
              <th>Soal 8</th>
              <th>Soal 9</th>
              <th>Soal 10</th>
              <th>Soal 11</th>
              <th>Soal 12</th>
              <th>Soal 13</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>{{strtoupper($kuesioner->soal_1)}}</td>
                <td>{{strtoupper($kuesioner->soal_2)}}</td>
                <td>{{strtoupper($kuesioner->soal_3)}}</td>
                <td>{{strtoupper($kuesioner->soal_4)}}</td>
                <td>{{strtoupper($kuesioner->soal_5)}}</td>
                <td>{{strtoupper($kuesioner->soal_6)}}</td>
                <td>{{strtoupper($kuesioner->soal_7)}}</td>
                <td>{{strtoupper($kuesioner->soal_8)}}</td>
                <td>{{strtoupper($kuesioner->soal_9)}}</td>
                <td>{{strtoupper($kuesioner->soal_10)}}</td>
                <td>{{strtoupper($kuesioner->soal_11)}}</td>
                <td>{{$kuesioner->soal_12}}</td>
                <td>{{$kuesioner->soal_13}}</td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

