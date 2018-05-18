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
							<th align="center">Configuración</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td scope="row"> {{ $user->id }} </td>
							<td> {{ $user->name }} </td>
							<td> {{ $user->email }} </td>
							<td align="center">
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

<div class="modal fade" id="modalCreateUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

@endsection