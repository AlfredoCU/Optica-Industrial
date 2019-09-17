<?php

// Bienvenida.
Route::get('/', function() {
    return view('welcome');
});

// Nosotros.
Route::get('/nosotros', function() {
    return view('about');
});

// Productos y servicios.
Route::get('/productos-y-servicios', function () {
    return view('prodserv');
});

// Campañas y promociones.
Route::get('/campanna-y-promociones', function () {
    return view('camprom');
});

// Empresas.
Route::get('/para-las-empresas', function () {
    return view('company');
});

// Sucursales.
Route::get('/sucursales', function() {
    return view('clinic');
});

// Contáctanos.
Route::get('/contactanos', function () {
    return view('contact');
});
