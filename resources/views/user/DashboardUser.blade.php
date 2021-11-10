@extends('layouts.temp')
@section('title')
Dashboard Admin
@endsection
@section('breadcrumb')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection
@section('content')
<div class="container">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Formulir</h4>

                @if (DB::table('formulir')->where('id_user', Auth::user()->id)->exists())
                  <p>Terimakasih, Kamu Sudah Isi Formulir</p>
                @else
                <p>Maaf, Kamu Belum Isi Formulir. Silahkan Isi Terlebih Dahulu</p>
                @endif
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="{{ url('Formulir/create') }}" class="small-box-footer">Isi Formulir <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Lengkapi Data</h4>
                @if (Auth::user()->status != "Peserta")
                <p>Lengkapi Data Jika Sudah Menjadi Peserta</p>
                @elseif (Auth::user()->status == "Peserta")
                <p>Anda Sudah Jadi Peserta, Silahkan Lengkapi data</p>
                @endif
              </div>
              @if (Auth::user()->status == "Peserta")
              <div class="icon">
                <i class="ion ion-speakerphone"></i>
              </div>
              <a href="{{ url('LengkapiData/'.Auth::user()->id) }}" class="small-box-footer">Lengkapi Data <i class="fas fa-arrow-circle-right"></i></a>
              @else
              <div class="icon">
                <i class="ion ion-speakerphone"></i>
              </div>
             <a class="small-box-footer">Maaf, Anda Belum Menjadi Peserta<i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Lihat Data Formulir</h3>

                <p>Lihat Data Formulir Anda</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        Status : {{ Auth::user()->status }}
</div>
@include('sweetalert::alert')
@endsection
