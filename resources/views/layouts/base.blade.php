<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/CSS/style.css">
        <link rel="stylesheet" href="/CSS/@yield('css').css">

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
                    <div class="connectedUser"><h2 class="monCompte">Mon compte</h2><div id="menu-button" class="close"></div></div>
                    
                    <nav id="two" class="show-menu">
                        <ul>
                            <li><a href="/connectedRoute"> Mon profil </a></li>
                            <li><a href="/logout"> Se deconnecter </a></li>
                        </ul>
                    </nav>
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
            var menuButton = document.querySelector('#menu-button');
            var menu = document.querySelector('#two');
            // show or hide
            menuButton.addEventListener('click',function(){
                menu.classList.toggle('show-menu');
                menuButton.classList.toggle('close');
            });
        </script>

    </body>
</html>

