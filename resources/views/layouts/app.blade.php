<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Metadatos de escritura y dimensiones pantalla -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Metadatos del sitio web-->
        <meta name="title" content="@yield('webtitle')">
        <meta name="description" content="@yield('webdescription')">
        <meta name="keywords" content="optica, opticas, lentes, anteojos, gafas, armazones, ojo, ojos, lasik, catarata, cataratas, pupilentes, ojos, oftalmologo, oculista, optometrista" />
        
        <!-- Metadatos de og -->
        <meta property="og:site_name" content="Óptica Industrial">
        <meta property="og:title" content="@yield('title')">
        <meta property="og:type" content="website">
        <meta property="og:description" content="@yield('description')">
        <meta property="og:image" content="@yield('image')">
        <meta property="og:url" content="@yield('url')">

        <!-- Metadatos para Twitter -->
        <meta name="twitter:image" content="@yield('twitterimage')">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:title" content="@yield('twittertitle')">
        <meta property="twitter:description" content="@yield('twitterdescription')">

        <title> Óptica Industrial - @yield('titlepag') </title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('font-awesome/css/all.css')}}">
        <link rel="shortcut icon" href="{{ asset('img/welcome/Logo.png') }}">
    </head>
    <body>        
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand mt-1" href="{{ url('/') }}">
                        <img src="{{ asset('img/welcome/Logo.png') }}" width="50" height="50" class="d-inline-block align-top" alt="Logotipo de Óptica Industrial">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="dropdown-item nav-list" href="{{ url('nosotros') }}"> {{ __('Nosotros') }} </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item nav-list" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Óptica </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ url('productos-y-servicios') }}"> {{ __('Productos y servicios') }} </a>
                                    <a class="dropdown-item" href="{{ url('campanna-y-promociones') }}"> {{ __('Campañas y promociones') }} </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item nav-list" href="{{ url('para-las-empresas') }}"> {{ __('Empresas') }} </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item nav-list" href="{{ url('sucursales') }}"> {{ __('Sucursales') }} </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-item nav-list" href="{{ url('contactanos') }}"> {{ __('Contáctanos') }} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <header>
                @yield('wcarouselbanner')
            </header>
            
            <main class="py-4">
                @yield('wmain')
            </main>
            
            <footer class="container py-5">
                <div class="row">
                    <div class="col-12 col-md">
                        <img src="{{ asset('img/welcome/Logo.png') }}" alt="Isotipo de la empresa" width="24" height="24">
                        <small class="d-block mb-3 text-muted">&copy; Óptica Industrial 2019 </small>
                    </div>
                    <div class="col-6 col-md">
                        <h5> Óptica Industrial </h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="{{ url('nosotros') }}"> Nosotros </a></li>
                            <li><a class="text-muted" href="{{ url('nosotros#mi') }}"> Misión </a></li>
                            <li><a class="text-muted" href="{{ url('nosotros#mi') }}"> Visión </a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5> Menú </h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="{{ url('productos-y-servicios') }}"> Productos y servicios </a></li>
                            <li><a class="text-muted" href="{{ url('campanna-y-promociones') }}"> Campañas y promociones </a></li>
                            <li><a class="text-muted" href="{{ url('para-las-empresas') }}"> Empresas  </a></li>
                            <li><a class="text-muted" href="{{ url('sucursales') }}"> Sucursales </a></li>
                            <li><a class="text-muted" href="{{ url('contactanos') }}"> Contáctanos </a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5> Acerca de </h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="{{ url('sucursales') }}"> Ubícanos </a></li>
                            <li><a class="text-muted" target="_blank" href=""> Aviso de Privacidad </a></li>
                            <li><a class="text-muted" target="_blank" href=""> Términos y Condiciones </a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5> Redes Sociales </h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" target="_blank" href="https://www.facebook.com/opticaindustrialmx"> Facebook </a></li>
                            <li><a class="text-muted" target="_blank" href="https://www.instagram.com/opticaindustrial.mx/?hl=es-la"> Instagram </a></li>
                            <li><a class="text-muted" href="mailto:opticaindustrial@hotmail.com"> Email </a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
