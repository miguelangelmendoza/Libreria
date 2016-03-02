<?php
//todas las rutas de la aplicación van aquí
// "/" es la url amigable
// "function" es una función anónima, sin nombre
Route::get('/', function () {
    //return view('welcome');
    //return view('home');
    return "usando Git";
});

Route::post('/form', 'ambientesController@show');

//controlador
Route::get('/controller', 'ambientesController@index');