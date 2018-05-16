@extends('admin.layout')

@section('title', $title)

@section('content')
    <div class="row" style="margin-top: 100px; margin-bottom: 10px;">
        <div class="col-sm-12">
            <h1 class="display-4">Nueva publicación</h1>
            <p class="lead alert alert-primary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut debitis dolore et facilis incidunt iste iusto minima minus mollitia nihil nobis optio provident quae rerum tempora, vitae voluptatibus? Illo, minus.
            </p>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores esse eum facilis laboriosam natus nemo neque nulla provident ratione, repellat. Corporis sapiente sequi voluptatem? Commodi et exercitationem in libero repellendus?
            </p>

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            @endif

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <strong>Whooops!</strong>There were some problems with your input. <br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h4 class="mb-0">...</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}
                        <div class="form-group row">
                            <div class="col-lg-12 input-group">
                                {!! Form::file('image', array('class' => 'image')) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-12 input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-font"></i></span>
                                </div>
                                <input class="form-control" type="text" placeholder="Titúlo del post" required="" id="title" name="title" value="">
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
                                <textarea class="form-control" rows="4" placeholder="Descripción detallada del post" required="" id="body" name="body"></textarea>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-lg-12 input-group">
                                <input class="form-control" type="hidden" placeholder="Autor del post"  id="author" name="author" value="{{ Auth::user()->id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary"> Guardar <i class="fas fa-save"></i></i></button>
                                <button type="reset" class="btn btn-dark"> Cancelar <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    

@endsection