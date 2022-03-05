@extends('layouts.apps')
@section('css')
<title>Iniciar Sesion</title>

<link rel="stylesheet" type="text/css" href="/inicioSesion/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/inicioSesion/fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="/inicioSesion/css/util.css">
<link rel="stylesheet" type="text/css" href="/inicioSesion/css/main.css">
@endsection
@section('content')
    <div class="container-login100" >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
                <span class="login100-form-title p-b-37">
                    INICIAR SESION
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Ingresar Correo">
                    <input class="input100" type="text" value="{{ old('email')}}" name="email" placeholder="Correo">
                    <span class="focus-input100"></span>
                </div>
                @error('email') <div style="color: brown ; text-align: center">{{$message}} </div> @enderror

                <div class="wrap-input100 validate-input m-b-25" data-validate = "Ingresar Contraseña">
                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                </div>
                @error('password') <div style="color: brown ; text-align: center"> <script> alert('Contraseña incorrecta')</script> {{$message}} </div> @enderror

                <br>

                <div class="container-login100-form-btn">
                    <button type="submit" value="login" class="login100-form-btn">
                        Iniciar Sesion
                    </button>
                </div>
                <br>
                <div style="text-align: center">
                <p>Usuario no creado?</p>
                    <a href="register">
                        <button type="button" style="align-content: center" class="btn btn-info">Registrarse</button>
                    </a>
                </div>


            </form>


        </div>
    </div>

@section('js')
<script src="/inicioSesion/js/main.js"></script>
@endsection
@endsection
