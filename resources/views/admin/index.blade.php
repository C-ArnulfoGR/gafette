@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row" style="margin-top: 100px; margin-bottom: 10px;">
    <div class="col-sm-12">
        <h1 class="display-4">Estimado {{ Auth::user()->name }}</h1>
        <p class="lead alert alert-primary">
            Bienvenido al panel de adminsitracion, esperamos que antes de comenzar a utilizar este servicio haya
            leido el manual de usuario, del caso contrario lo puede consultar
            <strong><a class="alert-primary" href="#"> aqui</a></strong>. Es de suma importancia hacerlo antes de continuar.
        </p>
        <p class="lead">
            Para continuar puede ir a la opcion de
            <a class="btn btn-outline-info waves-effect alert-info btn-sm my-0" href="{{ action('AdminController@basic') }}">Configuración Básica</a>
            desde su barra de navegacion para ajustar los parametros principales de su sitio web de <b style="font-weight: bold;">Gafette</b>.
        </p>
    </div>
</div>
@endsection