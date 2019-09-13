@extends('layouts.app')

@section('titlepag')
{{ trans('Inicio') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Nosotros')
@section('webdescription', 'Buscamos el bienestar y la salud de nuestros clientes.')

@section('title', 'Óptica Industrial - Nosotros')
@section('description', 'Buscamos el bienestar y la salud de nuestros clientes.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Nosotros')
@section('twitterdescription', 'Buscamos el bienestar y la salud de nuestros clientes.')

@section('wcarouselbanner')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card mb-3">
        <img src="{{ asset('img/about/Nosotros.png') }}" class="card-img-top" alt="Imagen de Nosotros">
        <div class="card-body">
          <h2 class="card-title font-weight-bolder titcolor"> Nosotros </h2>
          <P class="card-text text-muted">  
            Óptica Industrial es una empresa profesional, confiable, responsable y orgullosamente tapatía, dedicada a la prestación de servicio integral. </P>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('wmain')
<div class="container">
  <div class="row justify-content-center text-center">
    <div class="col-12 col-md-5">
      <div class="iconos mb-3"> 
        <i class="fas fa-chart-line"></i>
      </div>
      <h3> Misión </h3>
      <p class="text-muted"> Ofrecer soluciones integrales en el cuidado y conservación de la vista, con un alto sentido de profesionalismo y ética comercial. </p>
    </div>
    <div class="col-12 col-md-5">
      <div class="iconos mb-3"> 
        <i class="fas fa-eye"></i>
      </div>
      <h3> Visión </h3>
      <p class="text-muted"> Posicionarnos como el principal referente en el cuidado y prevención de la salud visual, resaltando la calidad y vanguardia en nuestros productos y servicios. </p>
    </div>
    <div class="col-12 col-md-6">
      <div class="iconos mb-3"> 
        <i class="fas fa-building"></i>
      </div>
      <h3> Para las empresas </h3>
      <p class="text-muted"> Es un placer ofrecer nuestro servicio a instituciones con cultura organizacional, que se preocupa por la salud y bienestar de sus empleados como un compromiso para la mejora de su calidad de vida, que a su vez se refleja directamente en beneficio de la productividad y rentabilidad de la empresa. </p>
    </div>
  </div>
</div>
@endsection
