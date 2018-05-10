@extends('admin.layout')

@section('title', $title)

@section('content')

<div class="row">
	<div class="col-md-9"></div>
	<div class="col-md-3">
		<div class="card border-dark mb-3" style="max-width: 18rem;">
			<div class="card-header text-center"> Para nuevas publicaciones </div>
			<div class="card-body text-dark text-center">
				<a class="btn btn-primary" href="{{ url('/post/create') }}"> <i class="fas fa-check"></i> Crear Post </a>
			</div>
		</div>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-hover table-responsive-md table-fixed">
					<thead>
						<tr>
							<th>#</th>
							<th>Titulo</th>
							<th>Descripción</th>
							<th>Configuración</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
						<tr>
							<th scope="row"> {{ $post->id }} </th>
							<td> {{ $post->title }} </td>
							<td> {{ substr($post->body, 0, 50) }} </td>
							<td align="center"> 
								<button type="button" class="btn btn-outline-success waves-effect btn-sm my-0" data-toggle="modal" data-target="#modalPostEditForm{{ $post->id }}"> <i class="fas fa-edit"></i> Editar </button>
								<button type="button" class="btn btn-outline-danger waves-effect btn-sm my-0"> <i class="fas fa-times"></i> Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $posts->render() }}
			</div>
		</div>
	</div>
</div>

@foreach($posts as $post)
<div class="modal fade" id="modalPostEditForm{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
		<div class="modal-content">
			<div class="modal-header bg-dark white-text">
				<h4 class="title">
					<i class="fas fa-pencil-alt"></i> Edición de publicación</h4>
					<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="post" action="{{ url("post/{$post->id}") }}" enctype="multipart/form-data">

						{!! method_field('put') !!}

						{!! csrf_field() !!}

						<img id="image" name="image" src="/images/{{ old('image', $post->image) }}" alt="placeholder" class="img-thumbnail mx-auto d-block">

						<input type="hidden" name="image" value="{{ old('image', $post->image) }}">

						<div class="md-form">
							<i class="fas fa-font prefix grey-text"></i>
							<input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}">
							<label for="title" class="font-weight-light">Titulo del post</label>
						</div>

						<div class="md-form">
							<i class="fas fa-file-alt prefix grey-text"></i>
							<textarea type="text" id="body" name="body" class="form-control md-textarea" rows="1">{{ old('body', $post->body) }}</textarea>
							<label for="body" class="font-weight-light">Your email</label>
						</div>

						<div class="md-form">
							<i class="fas fa-user prefix grey-text"></i>
							<input type="text" id="author" name="author" class="form-control" value="{{ old('author', $post->author) }}">
							<label for="body" class="font-weight-light">Your email</label>
						</div>

						<div class="text-center py-4 mt-3">
							<button class="btn btn-cyan" type="submit"> <i class="fas fa-save"></i> Guardar cambios</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
@endforeach

@endsection