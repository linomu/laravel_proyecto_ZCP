@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf
                <span class="login100-form-title">
                    Ingresar
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Por favor ingrese su dirección de correo">
                    <input id="email" class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Dirección de correo" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="focus-input100"></span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Por favor ingrese su contraseña">
                    <input id="password" class="form-control @error('password') is-invalid @enderror input100" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
                    <span class="focus-input100"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row" style="margin:12px -50px;">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Recordarme') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        ¿Olvidaste tu
                    </span>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link txt2" href="{{ route('password.request') }}">
                            {{ __('Dirección de correo / Contraseña?') }}
                        </a>
                    @endif
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                    {{ __('Ingresar') }}
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
