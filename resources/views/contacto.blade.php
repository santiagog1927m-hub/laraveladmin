@extends('layouts.app')

@section('content')

<div class="contact-container">

    <div class="contact-header">
        <h1>Contáctanos</h1>
        <p>Estamos aquí para brindarte información y orientación.</p>
        <div class="title-line"></div>
    </div>

    <div class="container">

        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <h3>Ubicación</h3>

                    <p>
                        SENA Regional Cauca
                    </p>

                    <span>
                        Popayán, Cauca
                    </span>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>

                    <h3>Teléfono</h3>

                    <p>
                        Línea de atención
                    </p>

                    <span>
                        (602) 824 5300
                    </span>

                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-card">

                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <h3>Correo electrónico</h3>

                    <p>
                        Escríbenos para recibir información.
                    </p>

                    <span>
                        contacto@sena.edu.co
                    </span>

                </div>
            </div>

        </div>

    </div>

</div>


<style>

* {
    box-sizing: border-box;
}

.contact-container {
    width: 100%;
    min-height: 100vh;
    background: #f5f7f6;
    padding: 60px 0 80px;
}

.contact-header {
    text-align: center;
    margin-bottom: 45px;
}

.contact-header h1 {
    font-size: 38px;
    font-weight: 700;
    color: #111111;
    margin-bottom: 10px;
}

.contact-header p {
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

.contact-card {
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-radius: 12px;
    padding: 35px 25px;
    text-align: center;
    height: 100%;
}

.contact-card:hover {
    border-color: #39A900;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.10);
}

.contact-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(57, 169, 0, 0.10);
    color: #39A900;
    border-radius: 50%;
    font-size: 28px;
}

.contact-card h3 {
    color: #111111;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 12px;
}

.contact-card p {
    color: #6c757d;
    margin-bottom: 5px;
    font-size: 14px;
}

.contact-card span {
    color: #39A900;
    font-size: 14px;
    font-weight: 600;
}

.contact-help {
    display: flex;
    align-items: center;
    gap: 30px;
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-left: 5px solid #39A900;
    border-radius: 12px;
    padding: 35px;
    margin-top: 40px;
}

.help-icon {
    width: 75px;
    height: 75px;
    min-width: 75px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #39A900;
    color: #ffffff;
    border-radius: 50%;
    font-size: 30px;
}

.help-content h2 {
    color: #111111;
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 12px;
}

.help-content p {
    color: #6c757d;
    line-height: 1.7;
    margin-bottom: 6px;
}

.contact-hours {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    background: #ffffff;
    border: 1px solid #e2e8e5;
    border-radius: 12px;
    padding: 25px;
    margin-top: 25px;
    text-align: center;
}

.hours-icon {
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(57, 169, 0, 0.10);
    color: #39A900;
    border-radius: 50%;
    font-size: 22px;
}

.contact-hours h3 {
    color: #111111;
    font-size: 19px;
    font-weight: 700;
    margin-bottom: 5px;
}

.contact-hours p {
    color: #6c757d;
    margin: 0;
}

.contact-hours strong {
    color: #39A900;
}

.contact-button {
    text-align: center;
    margin-top: 35px;
}

.btn-sena {
    display: inline-block;
    background: #39A900;
    color: #ffffff;
    border: 2px solid #39A900;
    padding: 10px 22px;
    border-radius: 7px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-sena:hover {
    background: #00843D;
    border-color: #00843D;
    color: #ffffff;
}

.btn-sena i {
    margin-right: 6px;
}

@media (max-width: 768px) {

    .contact-container {
        padding: 40px 15px 60px;
    }

    .contact-header h1 {
        font-size: 30px;
    }

    .contact-help {
        flex-direction: column;
        text-align: center;
        padding: 25px 20px;
    }

    .contact-hours {
        flex-direction: column;
    }

}

</style>

@endsection