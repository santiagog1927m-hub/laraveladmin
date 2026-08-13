<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container-fluid">

      <a class="navbar-brand d-flex align-items-center"
   href="{{ url('/') }}">

    <img src="{{ asset('img/logo-sena.png') }}"
         alt="Logo SENA"
         style="height: 55px; width: auto;">

    <div class="ms-2">
        <strong>Admin Sena</strong><br>
        <small class="text-light">Sistema de Gestión de la Informacion</small>
    </div>

</a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <!-- inicio -->
                <li class="nav-item">
                    <a class="nav-link active"
                       href="{{ url('/') }}">
                        Inicio
                    </a>
                </li>

                <!-- gestion -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        Gestión

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('aprendice.list') }}">
                                Aprendices
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('course.list') }}">
                                Cursos
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('teacher.list') }}">
                                Instructores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('area.list') }}">
                                Areas de Formación
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('training_center.list') }}">
                                Centros de Formacion
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                               href="{{ route('computer.list') }}">
                                Computadores
                            </a>
                        </li>

                    </ul>

                </li>

                <!-- reportes -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Reportes
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>