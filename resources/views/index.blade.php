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
@endsection