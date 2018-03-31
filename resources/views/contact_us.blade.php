@extends('layout')

@section('title', "Contactanos")
@section('sitio', $data->sitio)
@section('link_fb', $data->link_fb)
@section('link_tw', $data->link_tw)
@section('link_yt', $data->link_yt)


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Contactanos</h1>
            <hr>
            <p class="lead">
                Te agradecemos tu interes en contactarnos. Nos encantará poder contestar cualquier pregunta que puedas tener acerca de <b class="font-weight-bold">{{ $data->sitio }}</b>, nuestros productos, y servicios.
            </p>
            <p>Dejanos tus comentarios rellenando el siguiente formulario</p>

            <form class="form" role="form" autocomplete="off" method="">
                {!! csrf_field() !!}

                <div class="form-group row">
                    <div class="col-lg-8 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input class="form-control" type="text" placeholder="Nombre" required="" name="name">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-at"></i> </span>
                        </div>
                        <input class="form-control" type="email" placeholder="Tu email" required="" name="email">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                        </div>
                        <input class="form-control" type="text" placeholder="Asunto" required="" name="subject">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-8 input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-edit"></i></span>
                        </div>
                        <textarea class="form-control" rows="4" placeholder="Escriba su mensaje" name="mensage"></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <button type="submit" class="btn btn-primary"> Enviar <i class="fas fa-paper-plane"></i></i></button>
                    </div>
                </div>

            </form>
            <h3>Recuerda que tambien:</h3>
            <p>Nos puedes visitar en: <span class="font-weight-bold">{{ $data->address }}</span></p>
            <p>Llamarnos al: <span class="font-weight-bold">{{ $data->telephone }}</span></p>
            <p>O escribirnos en: <span class="font-weight-bold">{{ $data->email }}</span></p>


        </div>
    </div>
@endsection