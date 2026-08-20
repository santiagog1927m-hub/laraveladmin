<footer class="sena-footer">

    <div class="footer-container">

        <div class="footer-column footer-brand">

            <h3>ADMIN SENA</h3>

            <div class="footer-logo">
                <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA">
            </div>

            <p>
                Sistema de Gestión de la Información
                para la administración de aprendices,
                cursos, instructores y recursos.
            </p>

        </div>


        <div class="footer-column">

            <h3>SISTEMA</h3>

            <a href="{{ url('/') }}">Inicio</a>

            <a href="{{ route('aprendice.list') }}">
                Aprendices
            </a>

            <a href="{{ route('course.list') }}">
                Cursos
            </a>

            <a href="{{ route('teacher.list') }}">
                Instructores
            </a>

            <a href="{{ route('area.list') }}">
                Áreas de Formación
            </a>

            <a href="{{ route('training_center.list') }}">
                Centros de Formación
            </a>

            <a href="{{ route('computer.list') }}">
                Computadores
            </a>

        </div>


        <div class="footer-column">

            <h3>INFORMACIÓN</h3>

            <a href="#">Acerca del sistema</a>
            <a href="#">Misión</a>
            <a href="#">Visión</a>
            <a href="#">Contacto</a>
            <a href="#">Ayuda</a>
            <a href="#">Soporte</a>

        </div>


        <div class="footer-column footer-contact">

            <h3>CONTACTO</h3>

            <p>
                <i class="bi bi-envelope"></i>
                soporte@adminsena.com
            </p>

            <p>
                <i class="bi bi-geo-alt"></i>
                SENA Regional Cauca
            </p>

            <p>
                <i class="bi bi-building"></i>
                Centro de Comercio y Servicios
            </p>

            <p>
                <i class="bi bi-telephone"></i>
                Línea de atención SENA
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        <div class="footer-bottom-content">

            <p>
                © {{ date('Y') }} Santiago Gomez
                Todos los derechos reservados.
            </p>

            <div class="footer-social">

                <a href="#" title="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" title="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="#" title="YouTube">
                    <i class="bi bi-youtube"></i>
                </a>

                <a href="#" title="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                </a>

            </div>

        </div>

    </div>

</footer>


<button id="btnVolverArriba"
        class="btn-volver-arriba"
        title="Volver arriba">

    <i class="bi bi-chevron-up"></i>

</button>


<style>

.sena-footer {
    background: #111;
    color: #fff;
    margin-top: 60px;
    border-top: 4px solid #39A900;
}

.footer-container {
    max-width: 1400px;
    margin: auto;
    padding: 55px 50px 45px;
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr 1.4fr;
    gap: 60px;
}

.footer-column {
    display: flex;
    flex-direction: column;
}

.footer-column h3 {
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 1.5px;
    margin-bottom: 25px;
    padding-bottom: 12px;
    position: relative;
}

.footer-column h3::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 35px;
    height: 3px;
    background: #39A900;
}

.footer-logo {
    width: 90px;
    height: 90px;
    background: #fff;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.footer-logo img {
    max-width: 70px;
    max-height: 70px;
    object-fit: contain;
}

.footer-brand p {
    max-width: 280px;
    color: #bdbdbd;
    font-size: 13px;
    line-height: 1.7;
    margin: 0;
}

.footer-column > a {
    color: #cfcfcf;
    text-decoration: none;
    font-size: 13px;
    margin-bottom: 12px;
    transition: 0.2s;
}

.footer-column > a:hover {
    color: #39A900;
    padding-left: 5px;
}

.footer-contact p {
    color: #cfcfcf;
    font-size: 13px;
    line-height: 1.6;
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.footer-contact i {
    color: #39A900;
    font-size: 17px;
    min-width: 18px;
}

.footer-bottom {
    border-top: 1px solid #2d2d2d;
    background: #0b0b0b;
}

.footer-bottom-content {
    max-width: 1400px;
    margin: auto;
    padding: 20px 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.footer-bottom p {
    margin: 0;
    color: #999;
    font-size: 12px;
}

.footer-social {
    display: flex;
    gap: 10px;
}

.footer-social a {
    width: 35px;
    height: 35px;
    border: 1px solid #444;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: 0.25s;
}

.footer-social a:hover {
    background: #39A900;
    border-color: #39A900;
    transform: translateY(-3px);
}

.btn-volver-arriba {
    position: fixed;
    right: 25px;
    bottom: 25px;
    width: 48px;
    height: 48px;
    border: none;
    border-radius: 4px;
    background: #fff;
    color: #222;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    visibility: hidden;
    transform: translateY(15px);
    transition: 0.3s;
    z-index: 9999;
}

.btn-volver-arriba:hover {
    background: #39A900;
    color: #fff;
    transform: translateY(-3px);
}

.btn-volver-arriba.show {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

@media (max-width: 1000px) {

    .footer-container {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

}

@media (max-width: 600px) {

    .footer-container {
        grid-template-columns: 1fr;
        padding: 40px 25px;
        gap: 35px;
    }

    .footer-bottom-content {
        padding: 20px 25px;
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }

    .btn-volver-arriba {
        right: 15px;
        bottom: 15px;
    }

}

</style>


<script>

const btnVolverArriba = document.getElementById("btnVolverArriba");

window.addEventListener("scroll", function () {

    if (window.scrollY > 300) {
        btnVolverArriba.classList.add("show");
    } else {
        btnVolverArriba.classList.remove("show");
    }

});

btnVolverArriba.addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});

</script>