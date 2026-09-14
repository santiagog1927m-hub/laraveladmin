


<nav class="main-navbar">

    <div class="navbar-container">

        <a href="{{ url('/') }}" class="sena-brand">

            <div class="logo-container">
                <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA">
            </div>

            <div class="brand-text">
                <strong>ADMIN</strong>
                <span>SISTEMA DE GESTIÓN</span>
            </div>

        </a>


        <div class="main-menu">

            <a href="{{ url('/') }}" class="menu-link active">
                INICIO
            </a>

            <a href="{{ route('quienes.somos') }}" class="menu-link">
                ¿QUIÉNES SOMOS?
            </a>


            <div class="menu-dropdown">

                <a href="#" class="menu-link dropdown-trigger">
                    GESTIÓN
                    <i class="bi bi-chevron-down"></i>
                </a>

                <div class="custom-dropdown">

                    <div class="dropdown-title">
                        ADMINISTRACIÓN
                    </div>

                    <a href="{{ route('aprendice.list') }}">
                        <i class="bi bi-people"></i>
                        Aprendices
                    </a>

                    <a href="{{ route('course.list') }}">
                        <i class="bi bi-book"></i>
                        Cursos
                    </a>

                    <a href="{{ route('teacher.list') }}">
                        <i class="bi bi-person-badge"></i>
                        Instructores
                    </a>

                    <a href="{{ route('area.list') }}">
                        <i class="bi bi-diagram-3"></i>
                        Áreas de Formación
                    </a>

                    <a href="{{ route('training_center.list') }}">
                        <i class="bi bi-building"></i>
                        Centros de Formación
                    </a>

                    <a href="{{ route('computer.list') }}">
                        <i class="bi bi-pc-display"></i>
                        Computadores
                    </a>

                </div>

            </div>


            <a href="{{ route('contacto') }}" class="menu-link">
                CONTÁCTANOS
            </a>

            <a href="{{ route('noticias') }}" class="menu-link">
                NOTICIAS
            </a>

            <a href="{{ route('eventos') }}" class="menu-link">
                EVENTOS
            </a>

            <a href="{{ route('reportes') }}" class="menu-link green-link">
                REPORTES
            </a>

        </div>


        <div class="navbar-actions">

            <details class="search-menu">
                <summary title="Buscar" aria-label="Abrir buscador">
                    <i class="bi bi-search"></i>
                </summary>

                <form action="{{ route('search') }}" method="GET" class="search-form">
                    <label class="visually-hidden" for="search">Buscar</label>
                    <input id="search" name="q" type="search" value="{{ request('q') }}" placeholder="Buscar..." required>
                    <button type="submit" aria-label="Buscar">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            </details>

            <a href="{{ route('login') }}" title="Iniciar sesión">
                <i class="bi bi-person"></i>
            </a>

            <a href="#" title="Notificaciones" class="notification">
                <i class="bi bi-bell"></i>
                <span>0</span>
            </a>

            <a href="#" title="Configuración">
                <i class="bi bi-gear"></i>
            </a>

        </div>

    </div>

</nav>



<style>
    :root {
        --sena-green: #39A900;
        --sena-dark-green: #007A33;
        --sena-light-green: #E8F5E9;
        --sena-black: #1B1B1B;
        --sena-dark: #252525;
        --sena-gray: #666666;
        --sena-light-gray: #F4F4F4;
        --sena-border: #E2E2E2;
        --sena-white: #FFFFFF;
    }

    .top-navbar {
        height: 48px;
        background: var(--sena-black);
        border-top: 3px solid var(--sena-green);
        color: var(--sena-white);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 55px;
        font-size: 13px;
        letter-spacing: 1.2px;
        font-weight: 600;
    }

    .top-left,
    .top-right {
        display: flex;
        align-items: center;
        height: 100%;
    }

    .brand-top {
        font-size: 15px;
        margin-right: 30px;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .top-link {
        color: var(--sena-white);
        text-decoration: none;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 0 22px;
        transition: 0.25s;
    }

    .top-link:hover {
        background: #303030;
        color: var(--sena-white);
    }

    .active-top {
        background: var(--sena-green);
        padding: 0 30px;
    }

    .top-right {
        gap: 25px;
    }

    .top-right a,
    .country {
        color: var(--sena-white);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 7px;
        font-size: 12px;
    }

    .top-right a:hover {
        color: var(--sena-green);
    }

    .main-navbar {
        height: 82px;
        background: var(--sena-white);
        border-bottom: 1px solid var(--sena-border);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.06);
    }

    .navbar-container {
        height: 100%;
        max-width: 1800px;
        margin: auto;
        padding: 0 55px;
        display: flex;
        align-items: center;
    }

    .sena-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
        min-width: 270px;
    }

    .logo-container {
        width: 70px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .logo-container img {
        max-width: 60px;
        max-height: 60px;
        object-fit: contain;
    }

    .brand-text {
        margin-left: 15px;
        display: flex;
        flex-direction: column;
    }

    .brand-text strong {
        color: var(--sena-dark);
        font-size: 17px;
        letter-spacing: 1.5px;
        font-weight: 800;
    }

    .brand-text span {
        color: var(--sena-gray);
        font-size: 10px;
        letter-spacing: 1.5px;
        margin-top: 3px;
    }

    .main-menu {
        height: 100%;
        display: flex;
        align-items: center;
        margin-left: auto;
        gap: 3px;
    }

    .menu-link {
        height: 100%;
        display: flex;
        align-items: center;
        padding: 0 17px;
        color: var(--sena-dark);
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.3px;
        white-space: nowrap;
        transition: 0.2s;
        border-bottom: 3px solid transparent;
    }

    .menu-link:hover,
    .menu-link.active {
        color: var(--sena-green);
        border-bottom-color: var(--sena-green);
    }

    .green-link {
        color: var(--sena-green);
    }

    .dropdown-trigger {
        gap: 6px;
    }

    .dropdown-trigger i {
        font-size: 10px;
    }

    .menu-dropdown {
        height: 100%;
        position: relative;
        display: flex;
        align-items: center;
    }

    .custom-dropdown {
        position: absolute;
        top: 82px;
        left: 0;
        min-width: 270px;
        background: var(--sena-white);
        border-top: 4px solid var(--sena-green);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        padding: 10px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: 0.2s;
        z-index: 1000;
    }

    .menu-dropdown:hover .custom-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-title {
        padding: 12px 22px;
        color: #888;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 1.5px;
    }

    .custom-dropdown a {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 12px 22px;
        color: #333;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        transition: 0.2s;
    }

    .custom-dropdown a i {
        color: var(--sena-green);
        font-size: 17px;
        width: 20px;
    }

    .custom-dropdown a:hover {
        background: var(--sena-light-green);
        color: var(--sena-dark-green);
        padding-left: 27px;
    }

    .navbar-actions {
        height: 100%;
        margin-left: 20px;
        padding-left: 20px;
        border-left: 1px solid var(--sena-border);
        display: flex;
        align-items: center;
        gap: 25px;
    }

    .navbar-actions a {
        color: var(--sena-dark);
        text-decoration: none;
        font-size: 21px;
        position: relative;
        transition: 0.2s;
    }

    .navbar-actions a:hover {
        color: var(--sena-green);
    }

    .search-menu {
        position: relative;
    }

    .search-menu summary {
        color: var(--sena-dark);
        cursor: pointer;
        font-size: 21px;
        list-style: none;
    }

    .search-menu summary::-webkit-details-marker {
        display: none;
    }

    .search-menu summary:hover {
        color: var(--sena-green);
    }

    .search-form {
        position: absolute;
        top: 39px;
        right: -8px;
        display: flex;
        align-items: center;
        width: 260px;
        padding: 6px;
        background: var(--sena-white);
        border: 1px solid var(--sena-border);
        border-radius: 6px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        z-index: 1100;
    }

    .search-form input {
        width: 100%;
        border: 0;
        padding: 7px 9px;
        outline: 0;
        font-size: 13px;
    }

    .search-form button {
        border: 0;
        border-left: 1px solid var(--sena-border);
        background: var(--sena-white);
        color: var(--sena-dark);
        padding: 5px 9px;
        cursor: pointer;
        font-size: 18px;
    }

    .search-form button:hover {
        color: var(--sena-green);
    }

    .notification span {
        position: absolute;
        top: -9px;
        right: -10px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--sena-green);
        color: var(--sena-white);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: 700;
    }

    @media (max-width: 1200px) {

        .navbar-container {
            padding: 0 25px;
        }

        .sena-brand {
            min-width: 220px;
        }

        .menu-link {
            padding: 0 10px;
            font-size: 11px;
        }

        .navbar-actions {
            gap: 15px;
        }

    }

    @media (max-width: 900px) {

        .top-navbar {
            padding: 0 20px;
        }

        .top-right {
            display: none;
        }

        .main-navbar {
            height: auto;
        }

        .navbar-container {
            padding: 12px 20px;
            flex-wrap: wrap;
        }

        .main-menu {
            width: 100%;
            height: auto;
            margin-top: 10px;
            flex-wrap: wrap;
            justify-content: center;
            padding-bottom: 10px;
        }

        .menu-link {
            height: 40px;
        }

        .navbar-actions {
            display: none;
        }

        .custom-dropdown {
            top: 40px;
        }
    }
</style>
