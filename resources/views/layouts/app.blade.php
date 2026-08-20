<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    @include('includes.dependencias')

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }
    </style>

</head>

<body>

    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

    @include('includes.dependenciasbody')

</body>

</html>