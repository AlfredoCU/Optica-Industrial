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
    <a href="{{ url('sucursales') }}" class="btn btn-primary my-2"> Sucursales </a>
  </div>
</section>
@endsection

@section('wmain')
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
                <li class="text-muted"><strong> Óptica Industrial López Cotilla: </strong> (33) 3614 2007 </li>
                <li class="text-muted"><strong> Óptica Industrial Av. de la Paz: </strong> (33) 3616 4795 </li>
                <li class="text-muted"><strong> Óptica Industrial Mezquitán: </strong> (33) 3614 9590 </li>
              </ul>
              <div class="mapico"> 
                <i class="fas fa-envelope"></i>
              </div>
              <ul>
                <li class="text-muted"><strong> Email 1: </strong> opticaindustrial@hotmail.com </li>
                <li class="text-muted"><strong> Email 2: </strong> optica569@hotmail.com </li>
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
          <li class="m-5 list-unstyled"> <a target="_blank" href="https://www.facebook.com/opticaindustrialmx" class="fab fa-facebook"> </a></li>
          <li class="m-5 list-unstyled"> <a target="_blank" href="https://www.instagram.com/opticaindustrial.mx/?hl=es-la" class="fab fa-instagram"> </a></li>
          <li class="m-5 list-unstyled"> <a href="mailto:opticaindustrial@hotmail.com" class="fas fa-envelope"> </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection