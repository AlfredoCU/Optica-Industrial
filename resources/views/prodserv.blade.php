@extends('layouts.app')

@section('titlepag')
{{ trans('Productos y servicios') }}    
@endsection

@section('webtitle', 'Óptica Industrial - Productos y servicios')
@section('webdescription', 'Tenemos los mejores productos y servicios para usted.')

@section('title', 'Óptica Industrial - Productos y servicios')
@section('description', 'Tenemos los mejores productos y servicios para usted.')
@section('image', '')
@section('url', '')

@section('twitterimage', '')
@section('twittertitle', 'Óptica Industrial - Productos y servicios')
@section('twitterdescription', 'Tenemos los mejores productos y servicios para usted.')

@section('wcarouselbanner')
<section class="jumbotron text-center">
  <div class="container">
    <h2 class="font-weight-bold h1"> Productos y servicios </h2>
    <h3> Tenemos los mejores productos y servicios para usted. </h3>
    <a href="{{ url('contactanos') }}" class="btn btn-primary my-2"> Contáctanos </a>
  </div>
</section>
@endsection

@section('wmain')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <ul class="nav nav-pills mb-3" id="list" id="pills-tab" role="tablist">
        <li class="nav-item mr-2 mb-2">
          <a class="nav-list btn-info active text-white" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab" aria-controls="pills-productos" aria-selected="true"> Productos </a>
        </li>
        <li class="nav-item mr-2 mb-2">
          <a class="nav-list btn-info text-white" id="pills-servicios-tab" data-toggle="pill" href="#pills-servicios" role="tab" aria-controls="pills-servicios" aria-selected="false"> Servicios </a>
        </li>
      </ul>
      <div class="tab-content border-top" id="pills-tabContent-c">
        <div class="tab-pane fade show active mt-5" id="pills-productos" role="tabpanel" aria-labelledby="pills-productos-tab">
          @include('partials.productos')
        </div>
        <div class="tab-pane fade mt-5" id="pills-servicios" role="tabpanel" aria-labelledby="pills-servicios-tab">
          @include('partials.services')
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
