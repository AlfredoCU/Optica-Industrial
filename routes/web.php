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
Route::get('/campannas-y-promociones', function () {
    return view('camprom');
});

// Empresas.
Route::get('/para-las-empresas', function () {
    return view('company');
});

// Contáctanos.
Route::get('/contactanos', function () {
    return view('contact');
});
