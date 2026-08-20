@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="section-header text-center mb-5">
        <h2><span>Conócenos</span></h2>
        <p>Información sobre nuestro sistema de gestión</p>
        <div class="title-line"></div>
    </div>

    <div class="row g-4">

        <div class="col-lg-4 col-md-6">
            <div class="info-card">

                <div class="info-icon">
                    <i class="bi bi-people-fill"></i>
                </div>

                <h3>¿Quiénes Somos?</h3>

                <p>
                    Somos un sistema de gestión diseñado para facilitar
                    la organización y administración de la información
                    relacionada con aprendices, cursos, instructores
                    y centros de formación.
                </p>

            </div>
        </div>

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

        <div class="col-lg-4 col-md-12">
            <div class="info-card">

                <div class="info-icon">
                    <i class="bi bi-eye-fill"></i>
                </div>

                <h3>Visión</h3>

                <p>
                    Ser una plataforma reconocida por su facilidad de uso,
                    organización e innovación, ofreciendo herramientas
                    que permitan gestionar la información de forma eficiente
                    y contribuir a la mejora de los procesos administrativos.
                </p>

            </div>
        </div>

    </div>

</div>

<style>
    .section-header h2 {
        font-size: 32px;
        font-weight: 700;
        color: #333;
    }

    .section-header h2 span {
        color: #39a900;
    }

    .section-header p {
        color: #666;
        margin-bottom: 10px;
    }

    .title-line {
        width: 60px;
        height: 3px;
        background: #39a900;
        margin: 0 auto;
    }

    .info-card {
        height: 100%;
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
    }

    .info-icon {
        width: 65px;
        height: 65px;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #39a900;
        color: white;
        font-size: 28px;
    }

    .info-card h3 {
        margin-bottom: 15px;
        color: #333;
    }

    .info-card p {
        color: #666;
        line-height: 1.6;
        margin-bottom: 0;
    }
</style>

@endsection