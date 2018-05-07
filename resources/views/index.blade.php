@extends('layout')

@section('title', "Inicio")
@section('sitio', $data->sitio)
@section('link_fb', $data->link_fb)
@section('link_tw', $data->link_tw)
@section('link_yt', $data->link_yt)


@section('content')
<div class="row"> 
	<div class="col-md-4"></div>

	<hr>
	<div class="col-md-4">
		<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
			<!-- <p> {{ $posts->title }} </p> -->
			<div class="card-header text-center">Página de administración</div>
			<div class="card-body" style="margin: 0 auto;">
				<a class="btn btn-secondary alert-secondary alert-link" href="{{ action('AdminController@index') }}"><i class="fas fa-cog"></i> Click Aquí</a>
			</div>
		</div>
	</div>
	<!-- <a class="card card-secondary alert-secondary alert-link" href="{{ action('AdminController@index') }}">Pagina de administracion</a> -->
	<hr>
	<div class="col-md-4">
		<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
			<div class="card-header text-center">Página de login</div>
			<div class="card-body" style="margin: 0 auto;">
				<a class="btn btn-secondary alert-secondary alert-link" href="{{ url('/login') }}"><i class="fas fa-user"></i> Click Aquí</a>
			</div>
		</div>
	</div>
	<!-- <a class="btn btn-outline-secondary alert-secondary alert-link" href="{{ url('/login') }}">Pagina de Login</a> -->
</div>

<div class="row">
	<div class="col-md-4"></div>
	
	<hr>
	<div class="col-md-4"> <!-- ///card de ejemplo hecho con bootrap -->
		<div class="card text-white bg-dark" style="width: 18rem;">
			<div class="text-center" style="margin-top: 5px;">
				<h5> <span class="badge badge-success"> {{ $posts->title }} </span> </h5>
			</div>
			<a href="#"> 
				<img class="card-img-top" src="/images/{{ $posts->image }}" alt="Card image cap"> 
			</a>
			<div class="card-body" style="margin: 0 auto;" style="margin-top: 5px;">
				<p class="card-text"> 
					{{ $posts->body }} 
				</p>
				<a href="#" class="btn btn-success"> Ver más... </a>
			</div>
			
		</div>
	</div>
	
	<hr>
	<div class="col-md-4"> <!-- ///card de ejemplo hecho con estilo css y bootstrap-->
		<div class="box">
			<div class='article'>
				<img src='/images/{{ $posts->image }}' width='235px' height='135px'>
				<h2>
					<span class='badge badge-success'> {{ $posts->title }} </span>
				</h2>
				<p class='post-body'>
					{{ $posts->body }} 
				</p>
				<hr class="separate">
				<a href="#" class="btn btn-success"> <i class="fas fa-eye"></i> Ver más </a>				
			</div>
		</div>
	</div>
</div>
@endsection