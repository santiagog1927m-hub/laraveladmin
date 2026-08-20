@extends('layouts.app')

@section('content')

<div class="news-container">

    <div class="news-header">
        <h1>Noticias</h1>
        <p>Conoce las últimas novedades y acontecimientos del SENA.</p>
        <div class="title-line"></div>
    </div>

    <div class="container">

        <div class="row g-4">

            <!-- Noticia 1 -->
            <div class="col-lg-4 col-md-6">
                <article class="news-card">

                    <div class="news-image">
                        <img src="{{ asset('img/noticia1.jpg') }}" alt="Formación SENA">
                    </div>

                    <div class="news-body">

                        <span class="news-category">
                            Formación
                        </span>

                        <h3>
                            Nuevas oportunidades de formación para aprendices
                        </h3>

                        <p>
                            Conoce las nuevas oportunidades de formación
                            disponibles para los aprendices del SENA.
                        </p>

                        <div class="news-footer">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                20 Agosto 2026
                            </span>

                            <a href="#" class="news-link">
                                Leer más
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </article>
            </div>


            <!-- Noticia 2 -->
            <div class="col-lg-4 col-md-6">
                <article class="news-card">

                    <div class="news-image">
                        <img src="{{ asset('img/noticia2.jpg') }}" alt="Cursos SENA">
                    </div>

                    <div class="news-body">

                        <span class="news-category">
                            Cursos
                        </span>

                        <h3>
                            Inscripciones disponibles para nuevos cursos
                        </h3>

                        <p>
                            Revisa la oferta de cursos disponibles y encuentra
                            una opción para continuar tu formación.
                        </p>

                        <div class="news-footer">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                18 Agosto 2026
                            </span>

                            <a href="#" class="news-link">
                                Leer más
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </article>
            </div>


            <!-- Noticia 3 -->
            <div class="col-lg-4 col-md-6">
                <article class="news-card">

                    <div class="news-image">
                        <img src="{{ asset('img/noticia3.jpg') }}" alt="Centro de formación SENA">
                    </div>

                    <div class="news-body">

                        <span class="news-category">
                            Institucional
                        </span>

                        <h3>
                            Actividades en los centros de formación
                        </h3>

                        <p>
                            Conoce las actividades y proyectos que se desarrollan
                            en los centros de formación.
                        </p>

                        <div class="news-footer">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                15 Agosto 2026
                            </span>

                            <a href="#" class="news-link">
                                Leer más
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </article>
            </div>


            <!-- Noticia 4 -->
            <div class="col-lg-4 col-md-6">
                <article class="news-card">

                    <div class="news-image">
                        <img src="{{ asset('img/noticia4.jpg') }}" alt="Aprendices SENA">
                    </div>

                    <div class="news-body">

                        <span class="news-category">
                            Aprendices
                        </span>

                        <h3>
                            Aprendices participan en nuevos proyectos
                        </h3>

                        <p>
                            Los aprendices continúan desarrollando proyectos
                            que fortalecen sus conocimientos y habilidades.
                        </p>

                        <div class="news-footer">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                12 Agosto 2026
                            </span>

                            <a href="#" class="news-link">
                                Leer más
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </article>
            </div>


            <!-- Noticia 5 -->
            <div class="col-lg-4 col-md-6">
                <article class="news-card">

                    <div class="news-image">
                        <img src="{{ asset('img/noticia5.jpg') }}" alt="Tecnología SENA">
                    </div>

                    <div class="news-body">

                        <span class="news-category">
                            Tecnología
                        </span>

                        <h3>
                            Tecnología e innovación en la formación
                        </h3>

                        <p>
                            La tecnología continúa siendo una herramienta
                            importante para fortalecer los procesos de formación.
                        </p>

                        <div class="news-footer">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                10 Agosto 2026
                            </span>

                            <a href="#" class="news-link">
                                Leer más
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </article>
            </div>


            <!-- Noticia 6 -->
            <div class="col-lg-4 col-md-6">
                <article class="news-card">

                    <div class="news-image">
                        <img src="{{ asset('img/noticia6.jpg') }}" alt="SENA Regional Cauca">
                    </div>

                    <div class="news-body">

                        <span class="news-category">
                            Regional
                        </span>

                        <h3>
                            Noticias de la Regional Cauca
                        </h3>

                        <p>
                            Entérate de las novedades y actividades realizadas
                            en la Regional Cauca.
                        </p>

                        <div class="news-footer">
                            <span>
                                <i class="bi bi-calendar3"></i>
                                8 Agosto 2026
                            </span>

                            <a href="#" class="news-link">
                                Leer más
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>

                </article>
            </div>

        </div>

    </div>

</div>


<style>

* {
    box-sizing: border-box;
}

.news-container {
    width: 100%;
    min-height: 100vh;
    background: #f5f7f6;
    padding: 60px 0 80px;
}

.news-header {
    text-align: center;
    margin-bottom: 45px;
}

.news-header h1 {
    font-size: 38px;
    font-weight: 700;
    color: #111111;
    margin-bottom: 10px;
}

.news-header p {
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

.news-card {
    height: 100%;
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-radius: 12px;
    overflow: hidden;
}

.news-card:hover {
    border-color: #39A900;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
}

.news-image {
    width: 100%;
    height: 210px;
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.news-body {
    padding: 25px;
}

.news-category {
    display: inline-block;
    background: rgba(57, 169, 0, 0.10);
    color: #39A900;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    font-weight: 700;
    margin-bottom: 12px;
}

.news-body h3 {
    color: #111111;
    font-size: 19px;
    line-height: 1.4;
    font-weight: 700;
    margin-bottom: 12px;
}

.news-body p {
    color: #6c757d;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.news-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    padding-top: 15px;
    border-top: 1px solid #e9eeeb;
}

.news-footer span {
    color: #6c757d;
    font-size: 12px;
}

.news-footer span i {
    margin-right: 4px;
}

.news-link {
    color: #39A900;
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
}

.news-link:hover {
    color: #00843D;
}

.news-link i {
    margin-left: 3px;
}

@media (max-width: 768px) {

    .news-container {
        padding: 40px 15px 60px;
    }

    .news-header h1 {
        font-size: 30px;
    }

    .news-image {
        height: 200px;
    }

}

</style>

@endsection