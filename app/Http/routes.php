<?php
//todas las rutas de la aplicación van aquí
// "/" es la url amigable
// "function" es una función anónima, sin nombre
Route::get('/', function () {
    //return view('welcome');
    return view('home');
    //return "usando Git";
});

Route::post('/form', 'ambientesController@show');

//controlador
Route::get('/controller', 'ambientesController@index');


//acepta solo letras, no numeros
Route::get('/nombre/{nombre}', function($nombre){
if(preg_match("/^[A-Z a-z]+$/", $nombre)){
	return "Mi nombre es: ".$nombre;

}
else{
	return "no valido";
}
});