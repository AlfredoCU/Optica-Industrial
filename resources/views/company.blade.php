@extends('layouts.app')

@section('titlepag')
{{ trans('Empresas') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Empresas')
@section('webdescription', 'Revisión visual a todo el personal de tu empresa.')

@section('title', 'Óptica Industrial - Empresas')
@section('description', 'Revisión visual a todo el personal de tu empresa.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Empresas')
@section('twitterdescription', 'Revisión visual a todo el personal de tu empresa.')

@section('wcarouselbanner')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-11">
      <div class="card mb-3">
        <div class="d-flex justify-content-center">
          <img src="{{ asset('img/welcome/Logo.png') }}" class="card-img-top w-25" alt="Imagen de Empresas">
        </div>
        <div class="card-body text-justify">
          <h2 class="card-title font-weight-bolder titcolor"> Seguridad Industrial Visual - Empresas </h2>
          <P class="card-text text-muted"> Óptica Industrial es una empresa confiable, responsable y con un respaldo profesional de 50 años de experiencia en el ramo; nos hemos distinguido por la alta calidad en nuestra atención, en la calidad de nuestros materiales donde garantizamos su satisfacción. </P>
          <P class="card-text text-muted"> Contamos con personal capacitado y titulado para dar el mejor servicio además de tener laboratorio propio de alta tecnología en cristal y CR 39 (micas). </p>
          <a href="{{ url('contactanos') }}" class="btn btn-primary my-2"> Contáctanos </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('wmain')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 d-flex align-items-center">
      <div class="my-4 text-justify">
        <h3 class="font-weight-bold"> Nuestros servicios </h3>
        <p class="text-muted"> Óptica Industrial pone a sus órdenes el servicio de atención personalizada en el área de trabajo. es un placer ofrecer nuestros servicios a instituciones con <strong>cultura organizacional</strong>, que se preocupan por la salud y bienestar de sus empleados como un compromiso para la mejora de su calidad de vida, que a su vez se refleja directamente en beneficio de la <strong>productividad y rentabilidad de la empresa</strong>. </p>
      </div>
    </div>
    <div class="col-md-3 d-flex align-items-center justify-content-center mb-5 ml-4">
      <div class="iconos-e">
        <i class="fas fa-smile-wink"></i>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-9">
      <div class="my-4 text-justify">
        <h3 class="font-weight-bold"> Beneficios para el personal de su empresa </h3>
        <ul class="list-group ml-4">
          <li class="mb-1 text-muted text-justify"><strong> Examen de la vista: </strong> completamente profesional, confiable, sin costo. </li>
          <li class="mb-1 text-muted text-justify"><strong> Consulta y tratamiento: </strong> en infección de sus ojos para sus trabajadores. </li>
          <li class="mb-1 text-muted text-justify"><strong> Ofrecemos apoyo con pláticas e información en: </strong> prevención de salud para su empresa. </li>
          <li class="mb-1 text-muted text-justify"><strong> Precios especiales: </strong> para sus trabajadores y extensivo a familiares. </li>
          <li class="mb-1 text-muted text-justify"><strong> Ver bien y verse bien: </strong> lentes de alta definición elaborados de acuerdo con las necesidades médicas reflejadas en el estudio previo, incluyendo diseños tecnológicamente actuales. </li>
          <li class="mb-1 text-muted text-justify"><strong> Expediente médico: </strong> brindamos la información y diagnostico de la campaña visual de cada trabajador. </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 d-flex align-items-center">
      <div class="my-4 text-justify">
        <h3 class="font-weight-bold"> Requisitos </h3>
        <p class="text-muted"> Para poder llevar a cabo nuestro ofrecimiento le solicitamos lo siguiente: local interior de una longitud de 5 a 6 metros aproximadamente. </p>
        <p class="text-muted"> Le proporcionaremos crédito para el pago de sus lentes mediante descuentos vía nómina, los cuales realizara la empresa. </p>
      </div>
    </div>
    <div class="col-md-3 d-flex align-items-center justify-content-center mb-5 ml-4">
      <div class="iconos-e">
        <i class="fas fa-handshake"></i>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-9">
      <div class="my-4 text-justify">
        <h3 class="font-weight-bold"> Nota </h3>
        <ul class="list-group ml-4">
          <li class="mb-1 text-muted text-justify"><strong> Todo lente tiene un año de garantia. </strong></li>
          <li class="mb-3 text-muted text-justify"><strong> Los precios son más IVA. </strong></li>
        </ul>
        <p class="ml-2 text-muted"> Sin otro particular por el momento, quedo a sus ordenes para cualquier información  adicional que pudiera precisar al respecto, y en espera de darle respuesta en nuestra forma profesional de trabajo. </p>      
        <p class="ml-2 text-muted font-weight-bold"> Quedamos a sus órdenes: </p>
        <div class="d-flex justify-content-center">
          <img src="{{ asset('img/contact/Datos.jpg') }}" class="card-img-top w-75" alt="Imagen de datos de la empresa">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
