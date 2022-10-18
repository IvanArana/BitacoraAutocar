<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ruta original
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dash/crud', function () {
    return view('crud.index');
});

Route::get('/dash/crud/create', function () {
    return view('crud.create');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

// Route::get('/', 'App\Http\Controllers\InicioController@index');

// Route::get('/', function () {
//     return view('vista1',['nombre'=>'Ivan']);
// });

// //ejemplo 1 - regresando texto
// Route::get('/texto', function(){
//     return '<h1>Esto es un texto de prueba xd</h1>';
// });

// //ejemplo 2 - con arreglo
// Route::get('/arreglo', function(){
//     $arreglo=['lunes','martes','miercoles'];
//     return $arreglo;
// });

// Route::get('/arreglo2', function(){
//     $arreglo=[
//         'Id' => '1',
//         'Descripcion' => 'Producto 1'
//     ];
//     return $arreglo;
// });

// //ejemplo 3 - parametros
// Route::get('/nombre/{nombre}', function($nombre){
//     return 'El nombre es: '.$nombre;
// });

// //ejemplo 4 - parametros por defecto
// Route::get('/cliente/{cliente?}', function($cliente='cliente general'){
//     return 'El cliente es: '.$cliente;
// });

// //ejemplo 5 - podria servir para redirigir a usuario con diferentes roles
// Route::get('/ruta1', function(){
//     return '<h1>Esta es la vista de la ruta 1</h1>';
// })->name('rutaNro1');

// Route::get('/ruta2', function(){
//     // return '<h1>Esta es la vista de la ruta 2</h1>';
//     return redirect()->route('rutaNro1');
// });

// //ejemplo 6
// //con solo numeros
// Route::get('/usuario/{usuario}', function ($usuario) {
//     return 'El usuario es: ' .$usuario;
// })->where('usuario','[0-9]+');
// //con solo letras
// Route::get('/usuario2/{usuario2}', function ($usuario2) {
//     return 'El usuario es: ' .$usuario2;
// })->where('usuario2','[A-Za-z]+');

// if(View::exists('vista2')){
//     Route::get('/', function () {
//         return view('vista2');
//     });
// }else{
//     Route::get('/', function () {
//         return 'la vista solicitada no existe';
//     });
// }