@extends('layouts.app')

@section('content')

<div class="event-container">

    <div class="event-header">
        <h1>Eventos</h1>
        <p>Consulta las actividades y eventos programados por el Centro de Formación.</p>
        <div class="title-line"></div>
    </div>

    <div class="container">

        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="event-card">

                    <div class="event-icon">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <h3>Feria de Emprendimiento</h3>

                    <p>
                        Espacio para conocer los proyectos y emprendimientos
                        desarrollados por los aprendices.
                    </p>

                    <div class="event-info">
                        <p>
                            <i class="bi bi-calendar"></i>
                            28 de agosto de 2026
                        </p>

                        <p>
                            <i class="bi bi-clock"></i>
                            9:00 AM
                        </p>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            Auditorio SENA
                        </p>
                    </div>

                    <a href="#" class="btn-event">
                        Ver detalles
                    </a>

                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="event-card">

                    <div class="event-icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h3>Jornada de Bienestar</h3>

                    <p>
                        Actividad de integración y bienestar para los
                        aprendices del Centro de Formación.
                    </p>

                    <div class="event-info">
                        <p>
                            <i class="bi bi-calendar"></i>
                            2 de septiembre de 2026
                        </p>

                        <p>
                            <i class="bi bi-clock"></i>
                            10:00 AM
                        </p>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            Cancha principal
                        </p>
                    </div>

                    <a href="#" class="btn-event">
                        Ver detalles
                    </a>

                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="event-card">

                    <div class="event-icon">
                        <i class="bi bi-laptop"></i>
                    </div>

                    <h3>Charla de Tecnología</h3>

                    <p>
                        Espacio para conocer nuevas tecnologías y herramientas
                        relacionadas con el desarrollo de software.
                    </p>

                    <div class="event-info">
                        <p>
                            <i class="bi bi-calendar"></i>
                            10 de septiembre de 2026
                        </p>

                        <p>
                            <i class="bi bi-clock"></i>
                            2:00 PM
                        </p>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            Sala de sistemas
                        </p>
                    </div>

                    <a href="#" class="btn-event">
                        Ver detalles
                    </a>

                </div>
            </div>

        </div>

    </div>

</div>

<style>

.event-container {
    background: #f5f7f6;
    min-height: 100vh;
    padding: 45px 0 70px;
}

.event-header {
    text-align: center;
    margin-bottom: 45px;
}

.event-header h1 {
    font-size: 38px;
    font-weight: 700;
    color: #111;
    margin-bottom: 10px;
}

.event-header p {
    color: #666;
    margin: 0;
}

.title-line {
    width: 55px;
    height: 4px;
    background: #39A900;
    margin: 18px auto 0;
    border-radius: 5px;
}

.event-card {
    background: #fff;
    border: 1px solid #e2e8e5;
    border-radius: 12px;
    padding: 30px 25px;
    height: 100%;
    text-align: center;
    transition: 0.3s;
}

.event-card:hover {
    transform: translateY(-5px);
    border-color: #39A900;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
}

.event-icon {
    width: 65px;
    height: 65px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: #e8f5e9;
    color: #39A900;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
}

.event-card h3 {
    color: #111;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 12px;
}

.event-card > p {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
    min-height: 68px;
}

.event-info {
    border-top: 1px solid #e2e8e5;
    margin-top: 20px;
    padding-top: 15px;
}

.event-info p {
    color: #555;
    font-size: 13px;
    margin-bottom: 10px;
}

.event-info i {
    color: #39A900;
    margin-right: 6px;
}

.btn-event {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 20px;
    background: #39A900;
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
}

.btn-event:hover {
    background: #007A33;
    color: #fff;
}

</style>

@endsection
