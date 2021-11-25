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
              <h3>{{$user}}</h3>

              <p>Data Akun</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{ url('KelolaAkun') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Data Pengumuman</p>
            </div>
            <div class="icon">
              <i class="ion ion-speakerphone"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$formulir}}</h3>

              <p>Data User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ url('Formulir') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$kuesioner}}</h3>

              <p>Hasil Survey</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ url('Survey') }}" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </div>
    <section class="content">

            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Peminatan Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    </div>
    @endsection
    @section('script')
    <script>
   //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Tata Boga', 
      'Las Listrik',
      'Tata Rias Wajah dan Hijab', 
      'Financial Life Skill', 
      'Barista', 
      'Catering',
      'Otomotif Service Sepeda Motor Ringan',
      'Bakery',
      'Start Up',
      'Teknik Cukur Dasar' 
      ],
      datasets: [
      {
        data: [
        {{$tataBoga}},
        {{$lasListrik}},
        {{$tataRias}},
        {{$financial}},
        {{$barista}},
        {{$catering}}, 
        {{$otomotif}}, 
        {{$bakery}}, 
        {{$startUp}},
        {{$teknikCukur}}
        ],
        backgroundColor : [
        '#ff4f4f', 
        '#bd0000', 
        '#f1ff30', 
        '#a6b300', 
        '#40ff43', 
        '#00ab03', 
        '#0800ff', 
        '#030059', 
        '#ff4acc',
        '#96006c'
        ],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    
  </script>
  @endsection
