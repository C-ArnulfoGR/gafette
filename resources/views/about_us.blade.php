@extends('layout')

@section('title', "Acerca de")
@section('sitio', $data->sitio)
@section('link_fb', $data->link_fb)
@section('link_tw', $data->link_tw)
@section('link_yt', $data->link_yt)


@section('content')
    <div class="row">
        <div class="col col-sm-12">
            <h1 class="display-3">Acerca de {{ $data->sitio }}</h1>
            <hr>
            <h2 class="display-4">Quienes somos</h2>
            <p class="lead">
                {{ $data->about_us }}
            </p>

            <h2 class="display-4">Mision</h2>
            <p class="lead">
                {{ $data->objective }}
            </p>

            <h2 class="display-4">Biografia</h2>
            <p class="lead">
                {{ $data->biography }}
            </p>

        </div>
    </div>
@endsection