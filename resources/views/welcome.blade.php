@extends('layouts.app')

@section('titlepag')
{{ trans('Inicio') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Inicio')
@section('webdescription', 'Más de 50 años de formar parte de la salud de sus ojos.')

@section('title', 'Óptica Industrial - Inicio')
@section('description', 'Más de 50 años de formar parte de la salud de sus ojos.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Inicio')
@section('twitterdescription', 'Más de 50 años de formar parte de la salud de sus ojos.')

@section('wcarouselbanner')
<div class="d-flex justify-content-center">
    <div id="carouselExampleIndicators" class="carousel slide imgCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/welcome/Bienvenido.jpg') }}" class="d-block w-100" alt="Imagen de un negocio concretado">
                <div class="carousel-caption d-md-block textcarousel">
                    <h1 class="titulo h1 font-weight-bold"> Bienvenido a Óptica Industrial </h1>
                    <p class="di-none mt-3"> Más de 50 años de formar parte de la salud de sus ojos </p>
                    <a class="di-none1 btn btn-primary" href="{{ url('productos-y-servicios') }}" > ¡Quiero saber más! </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/welcome/Lentes.jpg') }}" class="d-block w-100" alt="Imagen de planeación de proyectos">
                <div class="carousel-caption d-md-block textcarousel">
                    <div class="container col-md-8">
                        <h2 class="titulo1 h2 font-weight-bold">  Óptica especializada para solucionar problemas de la vista </h2>
                        <a class="di-none btn btn-primary" href="{{ url('nosotros') }}" > Nosotros </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/welcome/Somos.png') }}" class="d-block w-100" alt="Imagen de equipo">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection

@section('wmain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-deck">
                <div class="card">
                    <img src="{{ asset('img/welcome/Nosotros.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1" alt="Imagen de nosotros">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"> Nosotros </h5>
                        <p class="card-text"> Buscamos el bienestar y la salud de nuestros clientes. </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ url('nosotros') }}"> Más información </a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/welcome/Logo.png') }}" class="card-img-top mx-auto d-block w-50 mt-1" alt="Imagen de Óptica Industrial">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"> Óptica Industrial </h5>
                        <p class="card-text"> Óptica Industrial es una empresa profesional, confiable, responsable... </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ url('productos-y-servicios') }}"> Más información </a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/welcome/Empresa.png') }}" class="card-img-top mx-auto d-block w-50 mt-1" alt="Imagen de visitamos tu empresa">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"> Empresas </h5>
                        <p class="card-text"> Beneficios para el personal de su empresa.  </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ url('para-las-empresas') }}"> Más información </a>
                    </div>
                </div>
            </div>
            <div class="card-deck mt-4">
                <div class="card">
                    <img src="{{ asset('img/welcome/Productos.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1" alt="Imagen de productos y servicios">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"> Productos y servicios </h5>
                        <p class="card-text"> Encontraras micas, armazones, lentes de sol, exámenes de la vista y mucho más. </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ url('productos-y-servicios') }}"> Más información </a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/welcome/Promo.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1" alt="Imagen de productos y servicios">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"> Campañas y promociones </h5>
                        <p class="card-text"> Disfruta y aprovecha de nuestras campañas y promociones. </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ url('campannas-y-promociones') }}"> Más información </a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/welcome/Contactanos.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1" alt="Imagen de Contáctanos">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold"> Contáctanos </h5>
                        <p class="card-text"> Estamos en espera de darle respuesta en nuestra forma profesional de trabajo.  </p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="{{ url('contactanos') }}" > Más información </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <h2 class="text-center mt-5 p-3 font-weight-bold h1 border-bottom"> Conozca a nuestros clientes </h2>
    <div class="row justify-content-center iconos text-center">
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/welcome/Pepsi.png') }}" class="card-img-top mx-auto d-block w-25 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/welcome/Atletica.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/welcome/Nissan.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/welcome/Hersheys.png') }}" class="card-img-top mx-auto d-block w-75 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/welcome/Honda.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/3.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/2.jpg') }}" class="card-img-top mx-auto d-block w-75 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/1.jpg') }}" class="card-img-top mx-auto d-block w-75 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/4.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/12.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/7.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/8.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/9.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/10.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>        
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/11.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/5.jpg') }}" class="card-img-top mx-auto d-block w-75 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/13.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/14.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/15.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/16.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/17.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/18.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/19.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/20.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/21.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/22.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/24.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/25.jpg') }}" class="card-img-top mx-auto d-block w-25 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/47.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/27.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/28.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/29.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/30.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/31.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/32.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/33.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/34.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/35.jpg') }}" class="card-img-top mx-auto d-block w-25 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/36.jpg') }}" class="card-img-top mx-auto d-block w-25 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/37.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/38.jpg') }}" class="card-img-top mx-auto d-block w-75 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/39.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/40.jpg') }}" class="card-img-top mx-auto d-block w-25 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/41.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/42.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/43.png') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/44.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/45.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/46.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/26.gif') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <div class="col-12 col-md-2">
            <img src="{{ asset('img/marcas/48.jpg') }}" class="card-img-top mx-auto d-block w-50 mt-1 imglogo" alt="Imagen de marcas">
        </div>
        <img src="{{ asset('img/welcome/Marcas.png') }}" class="card-img-top img-mostrar" alt="Imagen de todas las marcas">
    </div>
</div>
@endsection
