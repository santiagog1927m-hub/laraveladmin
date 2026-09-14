@extends('layouts.app')

@section('content')

<div class="register-container">

    <div class="register-card">

        <div class="register-logo">
            <div class="logo-circle">
                <i class="bi bi-person-plus-fill"></i>
            </div>
        </div>

        <h1>Crear cuenta</h1>

        <p class="register-description">
            Regístrate para acceder al Sistema de Gestión SENA.
        </p>

        <form method="POST" action="{{ route('registro.store') }}">
            @csrf

            @if ($errors->any())
                <div class="form-errors" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="name">Nombre completo</label>

                <div class="input-box">
                    <i class="bi bi-person-fill"></i>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Ingresa tu nombre" required autocomplete="name">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>

                <div class="input-box">
                    <i class="bi bi-envelope-fill"></i>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" required autocomplete="email">
                </div>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>

                <div class="input-box">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" id="password" name="password" placeholder="Crea una contraseña" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar contraseña</label>

                <div class="input-box">
                    <i class="bi bi-lock-fill"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña" required autocomplete="new-password">
                </div>
            </div>

            <button type="submit" class="btn-register">Registrarme</button>

        </form>

        <div class="register-footer">
            <span>¿Ya tienes una cuenta?</span>
            <a href="{{ route('login') }}">Iniciar sesión</a>
        </div>

    </div>

</div>

<style>

.register-container {
    width: 100%;
    min-height: calc(100vh - 70px);
    background: #f5f7f6;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 15px;
}

.register-card {
    width: 100%;
    max-width: 430px;
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-radius: 14px;
    padding: 40px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

.register-logo {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.logo-circle {
    width: 75px;
    height: 75px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #39A900;
    color: #ffffff;
    border-radius: 50%;
    font-size: 32px;
}

.register-card h1 {
    text-align: center;
    color: #111111;
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 10px;
}

.register-description {
    text-align: center;
    color: #6c757d;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-errors {
    margin-bottom: 20px;
    padding: 12px 16px;
    border: 1px solid #f1b7b7;
    border-radius: 7px;
    background: #fff4f4;
    color: #a71d2a;
    font-size: 13px;
}

.form-errors ul {
    margin: 0;
    padding-left: 18px;
}

.form-group label {
    display: block;
    color: #111111;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 8px;
}

.input-box {
    position: relative;
}

.input-box i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #39A900;
    font-size: 16px;
}

.input-box input {
    width: 100%;
    height: 46px;
    border: 1px solid #dce3df;
    border-radius: 7px;
    padding: 10px 14px 10px 42px;
    outline: none;
    font-size: 14px;
}

.input-box input:focus {
    border-color: #39A900;
    box-shadow: 0 0 0 3px rgba(57, 169, 0, 0.10);
}

.btn-register {
    width: 100%;
    height: 46px;
    background: #39A900;
    color: #ffffff;
    border: 2px solid #39A900;
    border-radius: 7px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
}

.btn-register:hover {
    background: #00843D;
    border-color: #00843D;
}

.register-footer {
    text-align: center;
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid #e9eeeb;
    font-size: 13px;
    color: #6c757d;
}

.register-footer a {
    color: #39A900;
    text-decoration: none;
    font-weight: 700;
    margin-left: 5px;
}

</style>

@endsection
