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
          <h2 class="card-title font-weight-bolder titcolor"> Empresas </h2>
          <P class="card-text text-muted"> Por medio de la presente, nos permitimos distraer su fina atención con el agrado de comunicarle, que Óptica Industrial es una empresa confiable, responsable y con un respaldo profesional de 50 años de experiencia en el ramo; nos hemos distinguido por la alta calidad en nuestra atención y excelencia a nuestros amables clientes, en la calidad de nuestros materiales donde garantizamos su satisfacción. </P>
          <P class="card-text text-muted"> Contamos con personal capacitado y titulado para dar el mejor servicio además de tener laboratorio propio de alta tecnología en cristal y CR 39 (micas). </p>
          <a href="{{ url('sucursales') }}" class="btn btn-primary my-2"> Sucursales </a>
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
        <a href="{{ url('contactanos') }}" class="btn btn-primary my-2"> Contáctanos </a>
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
          <li class="mb-1 text-muted text-justify"><strong> Examen de la vista: </strong> completamente profesional, confiable, sin costo y elaborado siempre por optometristas calificados y respaldado por un oftalmólogo. </li>
          <li class="mb-1 text-muted text-justify"><strong> Consulta y tratamiento: </strong> sin costo en infección de sus ojos para sus trabajadores. </li>
          <li class="mb-1 text-muted text-justify"><strong> Contamos con médicos especialistas: </strong> para beneficios de su personal, consultas con un costo de recuperación. </li>
          <li class="mb-1 text-muted text-justify"><strong> Ofrecemos apoyo con pláticas e información en: </strong> prevención de salud para su empresa. </li>
          <li class="mb-1 text-muted text-justify"><strong> Descuento especial del 15%: </strong> a los empleados de su empresa y sus familiares, el descuento que convenimos con ustedes, nunca es aplicable al publico en general, pues es exclusivo de los empleados y familiares directos de las empresas e instituciones que nos favorecen con su preferencia. </li>
          <li class="mb-1 text-muted text-justify"><strong> Ver bien y verse bien: </strong> entes de alta definición elaborados de acuerdo a las necesidades médicas reflejadas en el estudio previo, incluyendo diseños tecnológicamente actuales. </li>
          <li class="mb-1 text-muted text-justify"><strong> Ajuste de armazón: </strong> al recibir el producto, es ajustado para mayor comodidad del cliente, así como mejor aspecto. </li>
          <li class="mb-1 text-muted text-justify"><strong> Asesoría en uso de todos nuestros productos: </strong> en la compra de todos los productos se ofrece asesoría para dar el uso más adecuado. </li>
          <li class="mb-1 text-muted text-justify"><strong> Lentes de contacto: </strong> se entregaran con paquete de iniciación, el cual tendra solucion y estuche. Los cuales se enseña al cliente su correcto manejo y cuidados. Nosotros les damos garantia en su lente de contacto, y en la compra de estos puede adquirir solución para su lente cuando lo necesite, sin ningún costo. </li>
          <li class="mb-1 text-muted text-justify"><strong> Mantenimiento: </strong> ajuste, limpieza y  reparación post-venta, sin costo alguno. </li>
          <li class="mb-1 text-muted text-justify"><strong> En caso de que requiera un lente urgente: </strong> le ofrecemos servicio a domicilio. </li>
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
        <p class="text-muted"> Como apoyo a la economía y productividad de su compañía, nuestra empresa le ofrece las siguientes promociones: </p>
        <p class="text-muted"> Por medio de la presente, nos permitimos proporcionarle a usted, lista de precios de lentes graduados y adaptados los cuales son entregados personalmente a cada trabajador, con su estuche compacto y su micro fibra para limpieza del lente, garantizando su satisfacción, y más de 50 años de experiencia nos respaldan. </p>      
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
  <div class="col-md-12 d-flex justify-content-center">
    <div class="card-deck mb-3">

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h2 class="my-0 font-weight-bold text-center"> Paquete 1 </h2>
        </div>
        <div class="card-body">
          <h3 class="card-title"> MXN desde $600.00 a $800.00 </h3>
          <ul class="text-muted mt-3 mb-4">
            <li> Armazon oftalmico metálico varias marcas y modelos de goma o acetato. </li>
            <li> Prescripción en CR 39 blanco y cristal blanco monofocal (una visión). </li>
            <li> Precio tienda desde $800.00 </li>
            <li> Precio para etzatlán desde $600.00 </li>
          </ul>
        </div>          
        <div class="card-footer">
          <a href="{{ url('sucursales') }}" class="btn btn-lg btn-block btn-outline-primary"> Sucursales </a>
        </div>  
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h2 class="my-0 font-weight-bold text-center"> Paquete 2 </h2>
        </div>
        <div class="card-body">
          <h3 class="card-title"> MXN desde $1,300.00 a $800.00 </h3>
          <ul class="text-muted mt-3 mb-4">
            <li> Armazon oftalmico de línea varias marcas y modelos de goma, acetato y metálicos. </li>
            <li> Prescripción en CR 39 ANTIRREFLEJANTE y/o cristal PHOTO GRAY monofocal. </li>
            <li> Precio tienda desde $1,300.00 </li>
            <li> Precio para etzatlán desde $800.00 </li>
          </ul>
        </div>
        <div class="card-footer">
          <a href="{{ url('contactanos') }}" class="btn btn-lg btn-block btn-primary"> Contáctanos </a>
        </div>
      </div>

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h2 class="my-0 font-weight-bold text-center"> Paquete 3 </h2>
        </div>
        <div class="card-body">
          <h3 class="card-title"> MXN desde $1,600.00 a $1,000.00 </h3>
          <ul class="text-muted mt-3 mb-4">
            <li> Armazon oftalmico de línea varias marcas y modelos de goma, acetato y metálicos. </li>
            <li> Precio en CR 39 ANTIRREFLEJANTE, cristal blanco o PHOTO GRAY y transition bifocal (dos visiones). </li>
            <li> Precio tienda desde $1,600.00 </li>
            <li> Precio para etzatlán desde $1,000.00 </li>
          </ul>
        </div>
        <div class="card-footer">
          <a href="{{ url('contactanos') }}" class="btn btn-lg btn-block btn-primary"> Contáctanos </a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-9">
      <div class="my-4 text-justify">
        <h3 class="font-weight-bold"> Nota: </h3>
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
