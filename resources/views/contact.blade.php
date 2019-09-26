@extends('layouts.app')

@section('titlepag')
{{ trans('Contáctanos') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Contáctanos')
@section('webdescription', 'Es un placer ofrecer nuestros servicios.')

@section('title', 'Óptica Industrial - Contáctanos')
@section('description', 'Es un placer ofrecer nuestros servicios.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Contáctanos')
@section('twitterdescription', 'Es un placer ofrecer nuestros servicios.')

@section('wcarouselbanner')
<section class="jumbotron text-center">
  <div class="container">
    <h2 class="font-weight-bold h1"> Contáctanos </h2>
    <h3> Es un placer ofrecer nuestros servicios. </h3>
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
              <h2 class="h2"> Óptica Industrial López Cotilla </h2>
              <p class="text-muted"><strong> Dirección: </strong> Calle Manuel López Cotilla 569, Zona Centro, 44100 Guadalajara, Jal. </p>
              <ul class="list-group text-muted">
                <li class="list-unstyled"><strong> Horario: </strong></li>
                <li class="ml-4"> Lunes a Viernes: 10:00-14:00, 16:00-18:00 </li>
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
    </div>
  </div>
</div>  

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card mb-5 border-light mb-3 shadow-sm border-left boder-w">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="mapico"> 
                <i class="fas fa-phone-alt"></i>
              </div>
              <h2 class="h2"> Previa cita </h2>
              <ul>
                <li class="text-muted lead"> 33 3614 2007 </li>
              </ul>
              <div class="mapico"> 
                <i class="fas fa-envelope"></i>
              </div>
              <h2 class="h2"> Email </h2>
              <ul>
                <li class="text-muted lead"> opticaindustrial@hotmail.com </li>
                <li class="text-muted lead"> optica569@hotmail.com </li>
              </ul>
              <a class="btn btn-primary" href="mailto:opticaindustrial@hotmail.com"> Envíanos un correo electrónico </a>
            </div>
            <div class="col-md-6">
              <img src="{{ asset('img/welcome/Logo.png') }}" class="img-fluid" alt="Imagen logo de la empresa">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <h2 class="text-center p-3 font-weight-bold border-bottom titcolor"> Búscanos en nuestras redes sociales </h2>
      <div class="social d-flex justify-content-center">
        <ul class="list-group list-group-horizontal">
          <li class="m-5 list-unstyled"> <a target="_blank" href="" class="fab fa-facebook"> </a></li>
          <li class="m-5 list-unstyled"> <a target="_blank" href="" class="fab fa-instagram"> </a></li>
          <li class="m-5 list-unstyled"> <a href="mailto:opticaindustrial@hotmail.com" class="fas fa-envelope"> </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection