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

use App\Controlers\CreditoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/credito/registrar',[CreditoController::class,'store']);
