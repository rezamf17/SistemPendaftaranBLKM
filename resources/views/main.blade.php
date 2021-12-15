@extends('layouts.utama')
@section('title')
Web Utama
@endsection
@section('header')
<header id="head">
		<div class="container">
			<div class="row">
				<p><a href="{{url('register')}}" class="btn btn-action btn-lg" role="button">DAFTAR SEKARANG</a></p>
			</div>
		</div>
	</header>
@endsection
@section('intro')
<div class="container text-center">
		<br> <br>
		<h2 class="thin">Pelatihan Balai Latihan Kerja Mandiri Bertujuan Mengurangi Pengangguran di Jawa Barat</h2>
		<p class="text-muted">
			Mengingat masih tingginya jumlah pengangguran, khususnya warga yang berpendidikan rendah membuat tantangan tersendiri bagi Balai Latihan Kerja Mandiri (BLKM) milik Provinsi Jawa Barat (Jabar) untuk memaksimalkan pelatihan.
		</p>
	</div>
@endsection
@section('jumbotron')
<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Fungsi Pelatihan Balai Latihan Kerja Mandiri</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Penyelengaraan penyusunan bahan kebijakan teknis Pelatihan Kerja Mandiri</h4></div>
					
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Penyelenggaraan Pelatihan Kerja Mandiri Meliputi penyelenggaraan pelatihan, kerja sama dan pemasaran</h4></div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Penyelenggaraan Kordinasi dan Fasilitasi Pelatihan Kerja Mandiri</h4></div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Penyelenggaraan Pengendalian, Pemantauan dan evaluasi Pelaksanaan Pelatihan Kerja Mandiri</h4></div> 
				</div>
			</div> <!-- /row  -->
		
		</div>
	</div>
@endsection
@section('content')
<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
@endsection