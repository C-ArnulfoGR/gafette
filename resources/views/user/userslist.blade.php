@extends('admin.layout')

@section('title', $title)

@section('content')

<div class="row">
	<div class="col-md-9"></div>
	<div class="col-md-3">
		<div class="card border-dark mb-3" style="max-width: 18rem;">
			<div class="card-header text-center"> Nuevos usuarios </div>
			<div class="card-body text-dark text-center">
				<button type="button" class="btn btn-outline-primary waves-effect btn-sm my-0" data-toggle="modal" data-target="#modalCreateUser"> <i class="fas fa-check"></i> Crear usuario</button>
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
							<th>Nombre</th>
							<th>Correo</th>
							<th>Configuración</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td scope="row"> {{ $user->id }} </td>
							<td> {{ $user->name }} </td>
							<td> {{ $user->email }} </td>
							<td align="center"> 
								<button type="button" class="btn btn-outline-success waves-effect btn-sm my-0" data-toggle="modal" data-target=""> <i class="fas fa-pencil"></i> Editar </button>

								@if($user->hasRole('admin'))
								<button class="btn disabled btn-outline-light waves-effect btn-sm my-0" disabled> <i class="fas fa-times"></i> Eliminar</button>
								@else
								<button class="btn btn-outline-danger waves-effect btn-sm my-0" onclick="return deleteConfirmUser('{{ $user->id }}')"> <i class="fas fa-times"></i> Eliminar</button>
									@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{{ $users->render() }}
			</div>
		</div>
	</div>
</div>

<div class="modal fade left" id="modalCreateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white-text">
                <h4 class="title"> <i class="fas fa-user"></i> Nuevo usuario</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            	<form me role="form" autocomplete="off" method="POST" action="{{ route('user.register') }}">
            		{!! csrf_field() !!}
	                <div class="md-form">
	                    <i class="fas fa-at prefix"></i>
	                    <input type="text" id="name" name="name" class="form-control" required="" placeholder="Nombre usuario:">
	                    {{-- <label for="name">Your name</label> --}}
	                </div>

	                <div class="md-form">
	                    <i class="fas fa-envelope prefix"></i>
	                    <input type="email" id="email" name="email" class="form-control" required="" placeholder="Correo usuario:">
	                    {{-- <label for="name">Your name</label> --}}
	                </div>

	                <div class="md-form">
	                    <i class="fas fa-asterisk prefix"></i>
	                    <input type="password" id="password" name="password" class="form-control" required="" placeholder="Contraseña usuario:">
	                    {{-- <label for="name">Your name</label> --}}
	                </div>
					
					<div class="md-form">
		                <select class="custom-select" name="rol">
		                	<option value="" selected>Tipo usuario - elegir</option>
		                	<option value="admin">Admnistrador</option>
		                	<option value="manager">Gerente</option>
		                	<option value="comm">Atencion a clientes</option>
					    </select>
					</div>

	                <div class="text-center mt-4 mb-2">
	                    <button class="btn btn-cyan" type="submit"><i class="fas fa-save ml-2"></i> Guardar</button>
	                </div>
                </form>
            </div>
        </div>
	</div>
</div>

@foreach($users as $user)
<div class="modal fade right" id="modalMessageView{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-side modal-top-right modal-notify modal-primary" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<p class="heading"> <strong>Asunto:</strong> {{ $user->name }}</p>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>		
			<div class="modal-body">
				<div class="row">
					<div class="col-3">
						<p></p>
						<p class="text-center"><i class="fas fa-envelope-open fa-4x"></i></p>
					</div>
					<div class="col-9">
						<p><strong>De:</strong></p>
						<p> () </p>
					</div>
				</div>
			</div>		
			<div class="modal-footer flex-center">
				<a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cerrar mensaje</a>
			</div>
		</div>
	</div>
</div>


<div class="modal fade left" id="modalMessageAnswer{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark white-text">
                <h4 class="title"> <i class="fas fa-envelope-open"></i> Responder mensaje</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            	<p> <strong> Para: </strong> ()</p>

            	<form role="form" autocomplete="off" method="POST" action="#">
            		{{-- {!! csrf_field() !!} --}}
	                <div class="md-form">
	                    <i class="fas fa-envelope prefix"></i>
	                    <input type="email" id="community_email" name="community_email" class="form-control" required="" placeholder="De: Correo community manager">
	                    {{-- <label for="materialFormNameModalEx1">Your name</label> --}}
	                </div>

	                <div class="md-form">
	                    <i class="fas fa-file-alt prefix"></i>
	                    <textarea type="hidden" id="answer_body" name="answer_body" class="form-control md-textarea" required="" placeholder=""></textarea>
	                    {{-- <label for="materialFormMessageModalEx1">Your message</label> --}}
	                </div>

	                <div class="md-form">
	                    <input type="hidden" id="message_id" name="message_id" class="form-control" value="" required="">
	                    {{-- <label for="materialFormSubjectModalEx1">Subject</label> --}}
	                </div>

	                <div class="text-center mt-4 mb-2">
	                    <button class="btn btn-cyan" type="submit"><i class="fas fa-paper-plane ml-2"></i> Enviar Respuesta</button>
	                </div>
                </form>
            </div>
        </div>
        <!--/.Content-->
	</div>
</div>
@endforeach

@endsection