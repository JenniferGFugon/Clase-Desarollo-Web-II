<?php

use Illuminate\Support\Facades\Route;

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
/*Route::get('/', function () {
    return "Saludos".$nombre;
}); */
/*
Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos".$nombre;
});*/
/*
Route::get('saludo/{nombre?}', function ($nombre = "invitado") {
    return "Saludos".$nombre;
});*/

/*
Route::get('/contacto', function () {
    return "Seccion de Contacto";
});
Route::get('/', function () {
    echo"<a href ='contacto'> Contacto 1 </a><br>";
    echo"<a href ='contacto'> Contacto 2 </a><br>";
    echo"<a href ='contacto'> Contacto 3 </a><br>";

});
*/

/*
Route::get('/contacto', function () {
    return "Seccion de Contacto";
})->name('contacto');

Route::get('/', function () {
    echo"<a href = ".route('contacto')."> Contacto 1 </a><br>";
    echo"<a href =".route('contacto')."> Contacto 2 </a><br>";
    echo"<a href =".route('contacto')."> Contacto 3 </a><br>";

});
*/
/*
Route::get('/', function () {
    return view('home');
})->name('home');
*/
/*
Route::get('/', function () {
    return view('home');
});*/
/*
Route::get('/', function () {
    $nombre="Jennifer";
    return view('home')->with('nombre',$nombre);
});*/
/*
route::view('/','home');
*/


Route::view('/','home')->name('home');
Route::view('/acerca','acerca')->name('acerca');
Route::get('portafolio','portafolioController@index')->name('portafolio');
Route::view('contacto','contacto')->name('contacto');
Route::post('contacto',('messController@store'))->name('contacto');


