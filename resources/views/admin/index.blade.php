@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row" style="margin-top: 100px; margin-bottom: 10px;">
    <div class="col-sm-12">
        <h1 class="display-4">Estimado Administrador</h1>
        <p class="lead alert alert-primary">
            Bienvenido al panel de adminsitracion, esperamos que antes de comenzar a utilizar este servicio haya
            leido el manual de usuario, del caso contrario lo puede consultar
            <a class="alert-primary" href="#">aqui</a>. Es de suma importancia hacerlo antes de continuar.
        </p>
        <p class="lead">
            Para continuar puede ir a la opcion de
            <a class="btn btn-info alert-info alert-link" href="{{ action('AdminController@basic') }}">Configuracion Basica</a>
            desde su barra de navegacion para ajustar los parametros principales de su sitio web de <b style="font-weight: bold;">Gafette</b>.
        </p>
    </div>
</div>
@endsection