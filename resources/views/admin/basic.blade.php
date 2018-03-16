@extends('admin.layout')

@section('title', $title)

@section('content')
    <div class="row" style="margin-top: 90px; margin-bottom: 10px;">
        <div class="col-sm-12">
            <h1 class="display-3">{{ $title }}</h1>

            <div class=" alert alert-danger">
                <h4 class="alert-heading">Atencion!</h4>
                <hr>
                <p>
                    Al dar click en <b>Guardar</b> se almacenaran todos los datos escritos en los formularios.
                </p>
            </div>

            <form action="#">
                <input type="text" value="Formularios aqui">
            </form>
        </div>
    </div>
@endsection