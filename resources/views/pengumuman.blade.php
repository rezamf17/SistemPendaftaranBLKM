@extends('layouts.utama')
@section('title')
Berita Pengumuman
@endsection
@section('content')
<br>
<div class="card">
	<div class="card-header">
		<h3>Berita Pengumuman</h3>
	</div>
</div>
@foreach ($pengumuman as $element)
<div class="card">
	<div class="card-header">
		<h3>{{$element->judul}}</h3>
	</div>
	<div class="card-body">
	{!!$element->isi!!}
	</div>
</div>
@endforeach
@endsection