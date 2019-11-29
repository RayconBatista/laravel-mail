<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>

        </style>

    </head>
    <body>
        <div id="app">

            <a class="navbar-brand"  href="#">
                <img src="http://www.afline.com.br/afline_logo_2017.jpeg"
                     width="50" height="50"
                     style="align-content: center; display: inline; float: left; margin-right: 25px;" alt="" srcset="">
            </a>
            <h1>AFLine</h1>

            <main class="py-4">
                @yield('content')
            </main>

            <footer>
                <p style="align-self: center">
                    <img src="http://aflinemao.fs.ngestor.com/assets/imagens/logo/logox150.png"
                         width="60" height="60"
                         style="display: inline; float: left" alt="" srcset=""
                    >
                </p>

                <h1>Soluções em Sistemas de Gestão</h1>
            </footer>
        </div>
    </body>
</html>
