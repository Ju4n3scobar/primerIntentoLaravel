<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Blade;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Aqui, solo eliminariamos los corchetes que hacen referencia al array y se eliminaria el nombre del metodo ("bienvenido"). Asi: Route::get('/', HomeController::class);
Route::get('/', [HomeController::class, 'pasarVariable']);

// Para pasar variables por medio de las rutas (metodo get)
Route::get('/miNombre{nombre}', [HomeController::class, 'pasarVariable']);
