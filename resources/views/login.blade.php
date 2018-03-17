@extends('layout-login')

@section('title', "Inicio de sesión")

@section('content')
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Olvidaste la contraseña?</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<form action="#">
					<div class="group">
						<label for="user" class="label"><i class="fas fa-male  fa-2x"></i> Nombre de usuario o correo</label>
						<input id="user" type="text" class="input" placeholder="Ej. Alexxsram o alejandrosram@mail.com" required>
					</div>
					<div class="group">
						<label for="pass" class="label"><i class="fas fa-lock  fa-2x"></i> Contraseña</label>
						<input id="pass" type="password" class="input" data-type="password" placeholder="Ej. 1234" required>
					</div>
					<div class="hr"></div>
					<div class="group">
						<div class="col-md-12">
							<button type="submit" class="btn button btn-primary"><i class="fas fa-check-circle fa-2x"></i> Iniciar sesión </button>
						</div>
						<div class="col-md-12">
							<button type="button" class="btn button btn-danger" onclick="alert('Regresando...');"><i class="fas fa-angle-left fa-2x"></i>
							Regresar</button>
						</div>
					</div>
					<div class="hr"></div>
				</form>
			</div>
			<div class="for-pwd-htm">
				<form action="#">
					<div class="group">
						<label for="user" class="label"><i class="fas fa-male fa-2x"></i> Nombre de usuario o correo</label>
						<input id="user" type="text" class="input" placeholder="Ej. Alexxsram o alejandrosram@mail.com">
					</div>
					<div class="hr"></div>
					<div class="group">
						<div class="col-md-12">
							<button type="submit" class="btn button btn-primary"><i class="fas fa-check-circle fa-2x"></i> Recuperar</button>
						</div>
						<div class="col-md-12">
							<button type="button" class="btn button btn-danger" onclick="alert('Regresando...');"><i class="fas fa-angle-left fa-2x"></i> Regresar</button>
						</div>
					</div>
					<div class="hr"></div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection