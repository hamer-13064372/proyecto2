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

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});
                   // RUTAS CLIENTE
 Route::get('/api/cliente', [CreditoController::class,'index']);
Route::post('/api/cliente/registrar',[CreditoController::class,'store']);



                 // RUTAS PRODUCTO

Route::get('/api/cliente', [ClienteController::class,'index']);
Route::post('/api/cliente/registrar',[ClienteController::class,'store']);

