@extends('layouts.app')

@section('titlepag')
{{ trans('Campañas y promociones') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Campañas y promociones')
@section('webdescription', 'Campaña de salud visual y grandes promociones..')

@section('title', 'Óptica Industrial - Campañas y promociones')
@section('description', 'Campaña de salud visual y grandes promociones.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Campañas y promociones')
@section('twitterdescription', 'Campaña de salud visual y grandes promociones.')

@section('wcarouselbanner')
<section class="jumbotron text-center">
  <div class="container">
    <h2 class="font-weight-bold h1"> Campañas y promociones </h2>
    <h3> Disfruta y aprovecha de nuestras campañas y promociones. </h3>
    <a href="{{ url('contactanos') }}" class="btn btn-primary my-2"> Contáctanos </a>
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
            <div class="col-md-6 mt-2">
              <img src="{{ asset('img/campromo/Promo1.jpg') }}" class="img-fluid" alt="Imagen de campañas y promociones">
            </div>
            <div class="col-md-6 mt-2">
              <img src="{{ asset('img/campromo/Promo.jpg') }}" class="img-fluid" alt="Imagen de campañas y promociones">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card mb-5 border-light mb-3 shadow-sm border-left boder-w">
        <div class="card-body">
          <img src="{{ asset('img/campromo/camp.jpg') }}" class="img-fluid" alt="Imagen de campañas y promociones">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-8">
      <div class="card mb-5 border-light mb-3 shadow-sm border-left boder-w">
        <div class="card-body">
          <img src="{{ asset('img/campromo/Promo2.jpg') }}" class="img-fluid" alt="Imagen de campañas y promociones">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
