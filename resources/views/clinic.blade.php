@extends('layouts.app')

@section('titlepag')
{{ trans('Sucursales') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Sucursales')
@section('webdescription', 'Vístanos en cualquiera de nuestras sucursales, estamos a sus órdenes.')

@section('title', 'Óptica Industrial - Sucursales')
@section('description', 'Vístanos en cualquiera de nuestras sucursales, estamos a sus órdenes.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Sucursales')
@section('twitterdescription', 'Vístanos en cualquiera de nuestras sucursales, estamos a sus órdenes.')

@section('wcarouselbanner')
<section class="jumbotron text-center">
<div class="container">
  <img src="{{ asset('img/welcome/Logo.png') }}" class="card-img-top imgLogo" alt="Logotipo de Óptica Industrial">
  <p class="h2 m-3"> Vístanos en cualquiera de nuestras sucursales, estamos a sus órdenes. </p>
  <p><a href="{{ url('contactanos') }}" class="btn btn-primary my-2"> Contáctanos </a></p>
</div>
</section>
@endsection

@section('wmain')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card mb-5 border-light mb-3 shadow-sm border-left boder-w">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mapico mb-3"> 
                <i class="fas fa-map-marked-alt"></i>
              </div>
              <h2 class="h2"> Óptica Industrial Av. de la Paz </h2>
              <p class="text-muted"><strong> Dirección: </strong> Av. de la Paz 2308-5, Col Americana, Americana, 44130 Guadalajara, Jal. </p>
              <ul class="list-group text-muted">
                <li class="list-unstyled"><strong> Horario: </strong></li>
                <li class="ml-4"> Lunes a Viernes: 9:00-14:00, 16:00-20:00 </li>
                <li class="ml-4"> Sábados: 9:00-14:00 </li>
                <li class="ml-4"> Domingo: Cerrado </li>
              </ul>
              <p class="text-muted mt-3"><strong> Teléfono: </strong> 33 3616 4795 </p>
            </div>
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.9336548393107!2d-103.37797168466695!3d20.6722780052272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0e7e1889e9%3A0x4119a41aa0e7fc69!2s%C3%93ptica%20Industrial!5e0!3m2!1ses!2smx!4v1568669042830!5m2!1ses!2smx" class="img-fluid map" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-5 border-light mb-3 shadow-sm border-left boder-w">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mapico mb-3"> 
                <i class="fas fa-map-marked-alt"></i>
              </div>
              <h2 class="h2"> Óptica Industrial López Cotilla </h2>
              <p class="text-muted"><strong> Dirección: </strong> Calle Manuel López Cotilla 569, Zona Centro, 44100 Guadalajara, Jal. </p>
              <ul class="list-group text-muted">
                <li class="list-unstyled"><strong> Horario: </strong></li>
                <li class="ml-4"> Lunes a Viernes: 10:00-14:00, 16:30-19:30 </li>
                <li class="ml-4"> Sábados: 10:00-14:00 </li>
                <li class="ml-4"> Domingo: Cerrado </li>
              </ul>
              <p class="text-muted mt-3"><strong> Teléfono: </strong> 33 3614 2007 </p>
            </div>
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.887092854474!2d-103.35409968466693!3d20.67417200516342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1fb760e57c5%3A0xdf261b274e23a3ac!2s%C3%93ptica%20Industrial!5e0!3m2!1ses!2smx!4v1568671710145!5m2!1ses!2smx" class="img-fluid map" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-5 border-light mb-3 shadow-sm border-left boder-w">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mapico mb-3"> 
                <i class="fas fa-map-marked-alt"></i>
              </div>
              <h2 class="h2"> Óptica Industrial Mezquitán </h2>
              <p class="text-muted"><strong> Dirección: </strong> Calle Mezquitán 13, Zona Centro, 44100 Guadalajara, Jal. </p>
              <ul class="list-group text-muted">
                <li class="list-unstyled"><strong> Horario: </strong></li>
                <li class="ml-4"> Lunes a Viernes: 04:30-20:00 </li>
                <li class="ml-4"> Sábados: 10:00-14:00 </li>
                <li class="ml-4"> Domingo: Cerrado </li>
              </ul>
              <p class="text-muted mt-3"><strong> Teléfono: </strong> 33 3614 9590 </p>
            </div>
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.8255628272314!2d-103.35567268466687!3d20.676674605079327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b1e4aba0116d%3A0x5077a43dbac6faa6!2s%C3%93ptica%20Industrial!5e0!3m2!1ses!2smx!4v1568672280536!5m2!1ses!2smx" class="img-fluid map" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
@endsection
