@extends('admin.layout')

@section('title', $title)

@section('content')
    <div class="row" style="margin-top: 100px; margin-bottom: 10px;">
        <div class="col-sm-12">
            <h1 class="display-4">Nueva publicacion</h1>
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

            {!! Form::open(array('route' => 'fileUpload','enctype' => 'multipart/form-data')) !!}

            <div class="row cancel">
                <div class="col-md-4">
                    {!! Form::file('image', array('class' => 'image')) !!}
                </div>
                <div>
                    <input type="text" id="title" name="title" placeholder="Titulo">
                    <textarea name="body" id="body" cols="40" rows="10" placeholder="Escribe el cuerpo de la publicacion..."></textarea>
                </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>

            </div>
            {!! Form::close() !!}

        </div>

    </div>
@endsection