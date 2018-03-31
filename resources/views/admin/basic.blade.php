@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-4">{{ $title }}</h1>

        <div class="alert alert-warning">
            <h4 class="alert-heading">Atencion!</h4>
            <hr>
            <p>
                Al dar click en <b>Guardar</b> se almacenaran todos los datos escritos en los formularios.
            </p>
            <p>
                Los campos con <b><i class="fas fa-asterisk"></i></b> son obligatorios asegurate de no dejarlos vacios.
            </p>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <h4 class="alert-heading">Campos Incompletos!!</h4>
                <hr>
                <p>Asegurate de completar todos los campos obligatorios</p>
            </div>
        @endif


    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h4 class="mb-0">Agregar datos para la configuracion del sitio</h4>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off" method="post" action="{{ route('admin.basic.store') }}">
                    {!! csrf_field() !!}

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                            <input class="form-control" type="text" placeholder="Sitio: Gafette" required="" name="sitio" value="{{ $data->sitio }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                            </div>
                            <input class="form-control" type="text" placeholder="Link de Facebook: https://www.facebook.com/gafette" required="" name="link_fb" value="{{ $data->link_fb }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                            </div>
                            <input class="form-control" type="text" placeholder="Link de Twitter: https://www.twitter.com/gafette" required="" name="link_tw" value="{{ $data->link_tw }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                            </div>
                            <input class="form-control" type="text" placeholder="Link de YouTube: https://www.youtube.com/channel/gafette" required="" name="link_yt" value="{{ $data->link_yt }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input class="form-control" type="email" placeholder="Correo: gafette@gmail.com" required="" name="email" value="{{ $data->email }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                        @if($errors->has('email'))
                            <p class="alert-danger">Asegurate de escribir un correo que este correo sea valido</p>
                        @endif
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-compass"></i></span>
                            </div>
                            <input class="form-control" type="text" placeholder="Dirección: Blvd. Lomas Caste #69, Col. Elmer Curio, Zapopan, Jalisco" required="" name="address" value="{{ $data->address }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input class="form-control" type="tel" placeholder="Teléfono: (33) 3623 1515" required="" name="telephone" value="{{ $data->telephone }}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Objetivo: Ser los más chingones k-bron :v" name="objective"> {{ $data->objective }}</textarea>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Acerca de nosotros: Empresa que sabe dar levantones pariente :v" name="about_us">{{ $data->about_us }}</textarea>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12 input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Biografía: Nuestra empresa se fundo en un proyecto que nos encargo la tal Paty :v" name="biography">{{ $data->biography }}</textarea>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <button type="submit" class="btn btn-primary"> Guardar <i class="fas fa-save"></i></i></button>
                            <button type="reset" class="btn btn-secondary"> Cancelar <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection