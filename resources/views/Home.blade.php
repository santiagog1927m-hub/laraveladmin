@extends('layouts.app')

@section('content')

<div class="home-container">

    <div class="sena-hero">
        <img src="{{ asset('img/imagen-home.png') }}" alt="Sistema de Gestión Admin SENA">
    </div>

    <div class="home-header">
        <h1>Sistema de <span>Gestión</span></h1>
        <p>Administración de aprendices, cursos, instructores y recursos</p>
        <div class="title-line"></div>
    </div>

    <div class="row g-4">

        <div class="col-lg-4 col-md-6">
            <div class="sena-card">
                <div class="sena-card-body">
                    <div class="icon-box">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h4>Aprendices</h4>
                    <p>Gestiona los aprendices registrados en el sistema.</p>

                    <a href="{{ route('aprendice.list') }}" class="btn-sena">
                        Ver aprendices
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="sena-card">
                <div class="sena-card-body">
                    <div class="icon-box">
                        <i class="bi bi-book-fill"></i>
                    </div>

                    <h4>Cursos</h4>
                    <p>Consulta y administra los cursos de formación.</p>

                    <a href="{{ route('course.list') }}" class="btn-sena">
                        Ver cursos
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="sena-card">
                <div class="sena-card-body">
                    <div class="icon-box">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <h4>Instructores</h4>
                    <p>Administra los instructores registrados.</p>

                    <a href="{{ route('teacher.list') }}" class="btn-sena">
                        Ver instructores
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="sena-card">
                <div class="sena-card-body">
                    <div class="icon-box">
                        <i class="bi bi-diagram-3-fill"></i>
                    </div>

                    <h4>Áreas de Formación</h4>
                    <p>Administra las áreas disponibles para la formación.</p>

                    <a href="{{ route('area.list') }}" class="btn-sena">
                        Ver áreas
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="sena-card">
                <div class="sena-card-body">
                    <div class="icon-box">
                        <i class="bi bi-building-fill"></i>
                    </div>

                    <h4>Centros de Formación</h4>
                    <p>Gestiona los centros de formación disponibles.</p>

                    <a href="{{ route('training_center.list') }}" class="btn-sena">
                        Ver centros
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="sena-card">
                <div class="sena-card-body">
                    <div class="icon-box">
                        <i class="bi bi-pc-display"></i>
                    </div>

                    <h4>Computadores</h4>
                    <p>Controla los computadores disponibles.</p>

                    <a href="{{ route('computer.list') }}" class="btn-sena">
                        Ver computadores
                    </a>
                </div>
            </div>
        </div>

    </div>

    <hr class="section-divider">

    <div class="section-header">
        <h2><span>Conócenos</span></h2>
        <p>Información sobre nuestro sistema de gestión</p>
        <div class="title-line"></div>
    </div>

    <div class="row g-4">

        <div class="col-lg-4 col-md-6">
            <div class="info-card">
                <div class="info-icon">
                    <i class="bi bi-bullseye"></i>
                </div>

                <h3>Misión</h3>

                <p>
                    Brindar una plataforma sencilla, organizada y eficiente
                    que permita gestionar la información de aprendices,
                    cursos, instructores y recursos de manera rápida,
                    segura y accesible.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="info-card">
                <div class="info-icon">
                    <i class="bi bi-eye-fill"></i>
                </div>

                <h3>Visión</h3>

                <p>
                    Ser una plataforma reconocida por su facilidad de uso,
                    organización e innovación, ofreciendo herramientas
                    que permitan gestionar la información de forma eficiente.
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="info-card">
                <div class="info-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>

                <h3>Contacto</h3>

                <p>
                    Si tienes alguna pregunta o necesitas información
                    sobre el sistema, puedes comunicarte con nosotros.
                </p>

                <div class="contact-info">
                    <p>
                        <i class="bi bi-envelope-fill"></i>
                        santiagogomez06g@sena.com
                    </p>

                    <p>
                        <i class="bi bi-telephone-fill"></i>
                        +57 3207717129
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>


<style>

:root {
    --sena-green: #39A900;
    --sena-dark: #00843D;
    --sena-black: #111111;
    --sena-light: #f5f7f6;
    --sena-gray: #6c757d;
    --sena-border: #e2e8e5;
}

.home-container {
    background: var(--sena-light);
    min-height: 100vh;
    padding: 0 0 70px;
}

.home-header {
    text-align: center;
    margin-bottom: 45px;
}

.home-header h1 {
    font-size: 38px;
    font-weight: 700;
    color: var(--sena-black);
    margin-bottom: 10px;
}

.home-header h1 span,
.section-header h2 span {
    color: var(--sena-green);
}

.home-header p,
.section-header p {
    color: var(--sena-gray);
    margin: 0;
}

.title-line {
    width: 55px;
    height: 4px;
    background: var(--sena-green);
    margin: 18px auto 0;
    border-radius: 5px;
}

.sena-hero {
    width: 100%;
    height: 520px;
    margin-bottom: 45px;
    overflow: hidden;
}

.sena-hero img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center;
}

.sena-card {
    background: #fff;
    border: 1px solid var(--sena-border);
    border-radius: 12px;
    height: 100%;
    transition: 0.3s;
}

.sena-card:hover {
    transform: translateY(-5px);
    border-color: var(--sena-green);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
}

.sena-card-body {
    padding: 30px 25px;
    text-align: center;
}

.icon-box {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(57, 169, 0, 0.10);
    color: var(--sena-green);
    font-size: 30px;
}

.sena-card h4 {
    color: var(--sena-black);
    font-weight: 700;
    margin-bottom: 12px;
}

.sena-card p {
    color: var(--sena-gray);
    font-size: 14px;
    line-height: 1.6;
    min-height: 48px;
}

.btn-sena {
    display: inline-block;
    background: var(--sena-green);
    color: #fff;
    border: 2px solid var(--sena-green);
    padding: 8px 20px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    margin-top: 10px;
    transition: 0.3s;
}

.btn-sena:hover {
    background: var(--sena-dark);
    border-color: var(--sena-dark);
    color: #fff;
}

.section-divider {
    border: none;
    height: 1px;
    background: var(--sena-border);
    margin: 70px 0;
}

.section-header {
    text-align: center;
    margin-bottom: 40px;
}

.section-header h2 {
    color: var(--sena-black);
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 8px;
}

.info-card {
    background: #fff;
    border: 1px solid var(--sena-border);
    border-radius: 12px;
    height: 100%;
    padding: 30px;
    text-align: center;
    transition: 0.3s;
}

.info-card:hover {
    transform: translateY(-5px);
    border-color: var(--sena-green);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.09);
}

.info-icon {
    width: 65px;
    height: 65px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: var(--sena-green);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 27px;
}

.info-card h3 {
    color: var(--sena-black);
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 15px;
}

.info-card p {
    color: var(--sena-gray);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 0;
}

.contact-info {
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid var(--sena-border);
}

.contact-info p {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    margin-bottom: 10px;
    color: #444;
}

.contact-info i {
    color: var(--sena-green);
    font-size: 17px;
}

@media (max-width: 768px) {

    .home-container {
        padding: 30px 15px 50px;
    }

    .home-header h1 {
        font-size: 30px;
    }

    .section-header h2 {
        font-size: 26px;
    }

    .sena-hero {
        height: 300px;
    }

    .sena-card-body {
        padding: 25px 20px;
    }
}

</style>

@endsection




