@extends('layouts.app')

@section('content')

<div class="container py-4">


<!-- Título -->
<div class="text-center mb-5">
    <h1 class="fw-bold">Sistema de Gestión SENA</h1>
    <p class="text-muted">
        Administración de aprendices, cursos, instructores y recursos
    </p>
</div>

<!-- Módulos del sistema -->
<div class="row g-4">

    <!-- Aprendices -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill fs-1 text-success"></i>

                <h4 class="card-title mt-3">Aprendices</h4>

                <p class="text-muted">
                    Gestiona los aprendices registrados en el sistema.
                </p>

                <a href="{{ route('aprendice.list') }}" class="btn btn-success">
                    Ver aprendices
                </a>
            </div>
        </div>
    </div>

    <!-- Cursos -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-book-fill fs-1 text-success"></i>

                <h4 class="card-title mt-3">Cursos</h4>

                <p class="text-muted">
                    Consulta y administra los cursos de formación.
                </p>

                <a href="{{ route('course.list') }}" class="btn btn-success">
                    Ver cursos
                </a>
            </div>
        </div>
    </div>

    <!-- Instructores -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-workspace fs-1 text-success"></i>

                <h4 class="card-title mt-3">Instructores</h4>

                <p class="text-muted">
                    Administra los instructores registrados.
                </p>

                <a href="{{ route('teacher.list') }}" class="btn btn-success">
                    Ver instructores
                </a>
            </div>
        </div>
    </div>

    <!-- Áreas de Formación -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-diagram-3-fill fs-1 text-success"></i>

                <h4 class="card-title mt-3">Áreas de Formación</h4>

                <p class="text-muted">
                    Administra las áreas disponibles.
                </p>

                <a href="{{ route('area.list') }}" class="btn btn-success">
                    Ver áreas
                </a>
            </div>
        </div>
    </div>

    <!-- Centros de Formación -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-building-fill fs-1 text-success"></i>

                <h4 class="card-title mt-3">Centros de Formación</h4>

                <p class="text-muted">
                    Gestiona los centros de formación.
                </p>

                <a href="{{ route('training_center.list') }}" class="btn btn-success">
                    Ver centros
                </a>
            </div>
        </div>
    </div>

    <!-- Computadores -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <div class="card-body text-center">
                <i class="bi bi-pc-display fs-1 text-success"></i>

                <h4 class="card-title mt-3">Computadores</h4>

                <p class="text-muted">
                    Controla los computadores disponibles.
                </p>

                <a href="{{ route('computer.list') }}" class="btn btn-success">
                    Ver computadores
                </a>
            </div>
        </div>
    </div>

</div>


<!-- Separador -->
<hr class="my-5">


<!-- Misión, Visión y Contacto -->
<div class="text-center mb-4">
    <h2 class="fw-bold">Conócenos</h2>
    <p class="text-muted">
        Información sobre nuestro sistema de gestión
    </p>
</div>

<div class="row g-4">

    <!-- Misión -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">

                <i class="bi bi-bullseye fs-1 text-success"></i>

                <h3 class="card-title mt-3 fw-bold">
                    Misión
                </h3>

                <p class="text-muted">
                    Brindar una plataforma sencilla, organizada y eficiente
                    que permita gestionar la información de aprendices,
                    cursos, instructores y recursos de manera rápida,
                    segura y accesible, facilitando la administración
                    de los datos.
                </p>

            </div>
        </div>
    </div>


    <!-- Visión -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">

                <i class="bi bi-eye-fill fs-1 text-success"></i>

                <h3 class="card-title mt-3 fw-bold">
                    Visión
                </h3>

                <p class="text-muted">
                    Ser una plataforma reconocida por su facilidad de uso,
                    organización e innovación, ofreciendo herramientas
                    que permitan gestionar la información de forma
                    eficiente y adaptándose a las necesidades de
                    nuestros usuarios.
                </p>

            </div>
        </div>
    </div>


    <!-- Contacto -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body p-4">

                <i class="bi bi-envelope-fill fs-1 text-success"></i>

                <h3 class="card-title mt-3 fw-bold">
                    Contacto
                </h3>

                <p class="text-muted">
                    Si tienes alguna pregunta o necesitas información
                    sobre el sistema, puedes comunicarte con nosotros.
                </p>

                <p class="mb-2">
                    <i class="bi bi-envelope me-2"></i>
                    santiagogomez06g@sena.com
                </p>

                <p class="mb-0">
                    <i class="bi bi-telephone-fill me-2"></i>
                    +57 3207717129
                </p>

            </div>
        </div>
    </div>

</div>

</div>

@endsection
