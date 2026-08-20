@extends('layouts.app')

@section('content')

<div class="login-container">

    <div class="login-card">

        <div class="login-logo">
            <div class="logo-circle">
                <i class="bi bi-person-fill"></i>
            </div>
        </div>

        <h1>Iniciar sesión</h1>

        <p class="login-description">
            Ingresa tus datos para acceder al Sistema de Gestión SENA.
        </p>

        <form>

            <div class="form-group">

                <label for="email">
                    Correo electrónico
                </label>

                <div class="input-box">
                    <i class="bi bi-envelope-fill"></i>

                    <input
                        type="email"
                        id="email"
                        placeholder="Ingresa tu correo"
                    >
                </div>

            </div>

            <div class="form-group">

                <label for="password">
                    Contraseña
                </label>

                <div class="input-box">
                    <i class="bi bi-lock-fill"></i>

                    <input
                        type="password"
                        id="password"
                        placeholder="Ingresa tu contraseña"
                    >
                </div>

            </div>

            <div class="login-options">

                <label class="remember">
                    <input type="checkbox">
                    <span>Recordarme</span>
                </label>

                <a href="#">
                    ¿Olvidaste tu contraseña?
                </a>

            </div>

            <button type="button" class="btn-login">
                Iniciar sesión
            </button>

        </form>

        <div class="login-footer">
            <span>¿No tienes una cuenta?</span>
            <a href="#">Crear cuenta</a>
        </div>

    </div>

</div>


<style>

* {
    box-sizing: border-box;
}

.login-container {
    width: 100%;
    min-height: calc(100vh - 70px);
    background: #f5f7f6;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 50px 15px;
}

.login-card {
    width: 100%;
    max-width: 430px;
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-radius: 14px;
    padding: 40px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
}

.login-logo {
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

.login-card h1 {
    text-align: center;
    color: #111111;
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 10px;
}

.login-description {
    text-align: center;
    color: #6c757d;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
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
    transition: 0.3s;
}

.input-box input:focus {
    border-color: #39A900;
    box-shadow: 0 0 0 3px rgba(57, 169, 0, 0.10);
}

.login-options {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
    font-size: 13px;
}

.remember {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #6c757d;
    cursor: pointer;
}

.remember input {
    accent-color: #39A900;
}

.login-options a {
    color: #39A900;
    text-decoration: none;
    font-weight: 600;
}

.login-options a:hover {
    color: #00843D;
}

.btn-login {
    width: 100%;
    height: 46px;
    background: #39A900;
    color: #ffffff;
    border: 2px solid #39A900;
    border-radius: 7px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: 0.3s;
}

.btn-login:hover {
    background: #00843D;
    border-color: #00843D;
}

.login-footer {
    text-align: center;
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid #e9eeeb;
    font-size: 13px;
    color: #6c757d;
}

.login-footer a {
    color: #39A900;
    text-decoration: none;
    font-weight: 700;
    margin-left: 5px;
}

.login-footer a:hover {
    color: #00843D;
}

@media (max-width: 480px) {

    .login-container {
        padding: 35px 15px;
    }

    .login-card {
        padding: 30px 22px;
    }

    .login-card h1 {
        font-size: 26px;
    }

    .login-options {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }

}

</style>

@endsection