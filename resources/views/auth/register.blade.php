@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf
                <span class="login100-form-title">
                    Registrarse
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor ingrese su dirección de correo">
                    <input id="email" type="email" class="input100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Dirección de correo">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor ingrese su dirección de correo">
                    <input id="password" type="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor ingrese su dirección de correo">
                    <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                    {{ __('Registrarse') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
