@extends('layouts.app')

@section('content')

<div class="reports-container">

    <div class="reports-header">
        <h1>Reportes</h1>
        <p>Consulta la información registrada en el sistema.</p>
        <div class="title-line"></div>
    </div>

    <div class="container">

        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="report-card">
                    <div class="report-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h3>Aprendices</h3>
                    <p>Consulta los aprendices registrados en el sistema.</p>

                    <a href="{{ route('aprendice.list') }}" class="btn-report">Ver aprendices</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="report-card">
                    <div class="report-icon">
                        <i class="bi bi-book-fill"></i>
                    </div>

                    <h3>Cursos</h3>
                    <p>Consulta los cursos de formación registrados.</p>

                    <a href="{{ route('course.list') }}" class="btn-report">Ver cursos</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="report-card">
                    <div class="report-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <h3>Instructores</h3>
                    <p>Consulta los instructores registrados en el sistema.</p>

                    <a href="{{ route('teacher.list') }}" class="btn-report">Ver instructores</a>
                </div>
            </div>

        </div>

    </div>

</div>

<style>

.reports-container {
    min-height: 100vh;
    background: #f5f7f6;
    padding: 60px 0 80px;
}

.reports-header {
    text-align: center;
    margin-bottom: 45px;
}

.reports-header h1 {
    color: #111111;
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 10px;
}

.reports-header p {
    color: #6c757d;
    margin: 0;
}

.title-line {
    width: 55px;
    height: 4px;
    background: #39A900;
    margin: 18px auto 0;
    border-radius: 5px;
}

.report-card {
    height: 100%;
    padding: 35px 25px;
    text-align: center;
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-radius: 12px;
}

.report-card:hover {
    border-color: #39A900;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
}

.report-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #e8f5e9;
    color: #39A900;
    border-radius: 50%;
    font-size: 28px;
}

.report-card h3 {
    color: #111111;
    font-size: 20px;
    font-weight: 700;
}

.report-card p {
    color: #6c757d;
    font-size: 14px;
    margin: 12px 0 20px;
}

.btn-report {
    display: inline-block;
    padding: 9px 18px;
    background: #39A900;
    color: #ffffff;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
}

.btn-report:hover {
    background: #007A33;
    color: #ffffff;
}

</style>

@endsection
