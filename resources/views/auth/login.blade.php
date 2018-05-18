@extends('layout-login')

@section('title', "Inicio de sesión")

@section('content')
    <div class="login-wrap">
        <div class="login-html">
            <div class="text-center" style="margin-bottom: 20px;"> <h1 class="display-6"> Gafette </h1> </div>
            <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">Login</label>
            <div class="login-form">
                <div class="sign-in-htm text-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="group">
                            <label for="email" class="label"><i class="fas fa-male fa-2x"></i> Correo Electronico</label>
                            <input id="email" name="email" type="email" class="input" placeholder="Ej. Alexxsram o alejandrosram@mail.com" required>
                        </div>
                        <div class="group">
                            <label for="password" class="label"><i class="fas fa-lock fa-2x"></i> Contraseña</label>
                            <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Ej. 1234" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Recuerdame') }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr"></div>
                        <div class="group">
                            <div class="col-md-12">
                                <button type="submit" class="btn button btn-primary"><i class="fas fa-check-circle"></i> Iniciar sesión </button>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn button btn-danger" onclick="changeRoute();"> <i class="fas fa-angle-left"> </i>
                                    Regresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection