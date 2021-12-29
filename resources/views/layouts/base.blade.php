<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/@yield('css').css">

        <title>@yield('title') </title>
    </head>

    <body>
        <header> 
            <nav class="parent">
                <div >
                    <a class="logo" href="/"> Auto Voiture </a>
                </div>

                <div class="middle">
                    <a href="/faq">  FAQ  </a>
                    <a href="/search">  - Trouver votre voiture -  </a>
                    <a href="/services">  Services  </a>
                </div>

                <div class="connexion">
                    @if (Auth::check()) 
                    <a href="/profile"> Profil </a>
                    @else
                    <a href="/connexion"> Se connecter</a> 
                    @endif
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
        <script>
        </script>
    </body>
</html>