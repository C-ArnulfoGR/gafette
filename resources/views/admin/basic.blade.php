@extends('admin.layout')

@section('title', $title)

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h3 class="display-4">{{ $title }}</h3>

        <div class="alert alert-danger">
            <h4 class="alert-heading">Atencion!</h4>
            <hr>
            <p>
                Al dar click en <b>Guardar</b> se almacenaran todos los datos escritos en los formularios.
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h4 class="mb-0">Agregar datos para la conf. del sitio</h4>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off" method="#">

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                <input class="form-control" type="text" placeholder="Sitio: https://www.gafette.com/" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                <input class="form-control" type="text" placeholder="Link de Facebook: https://www.facebook.com/gafette" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                <input class="form-control" type="text" placeholder="Link de Twitter: https://www.twitter.com/gafette" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                <input class="form-control" type="text" placeholder="Link de YouTube: https://www.youtube.com/channel/gafette" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input class="form-control" type="email" placeholder="Correo: gafette@gmail.com" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-compass"></i></span>
                                <input class="form-control" type="text" placeholder="Dirección: Blvd. Lomas Caste #69, Col. Elmer Curio, Zapopan, Jalisco" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <input class="form-control" type="number" placeholder="Teléfono: (33) 3623 1515" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                                <textarea class="form-control" rows="1" placeholder="Objetivo: Ser los más chingones k-bron :v"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                <textarea class="form-control" rows="2" placeholder="Acerca de nosotros: Empresa que sabe dar levantones pariente :v"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                <textarea class="form-control" rows="2" placeholder="Biografía: Nuestra empresa se fundo en un proyecto que nos encargo la tal Paty :v"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <button type="submit" class="btn btn-primary"> Guardar <i class="fas fa-paper-plane"></i></button>
                            <button type="reset" class="btn btn-secondary"> Cancelar <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection