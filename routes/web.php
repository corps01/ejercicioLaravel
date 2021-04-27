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



/*
Un inicio de sesión.
Una entrada de una publicación con fecha, título y contenido.
Una landing page (o página principal) con slider y componentes.
Además de una para la búsqueda.
*/

// Route::get('/', function () {
//     return view('userLoginPage');
// });

// Route::get('/home', function () {
//     return view('home');
// });

function index()
{
    return view('combined');
}
