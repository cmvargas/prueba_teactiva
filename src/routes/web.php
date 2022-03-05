<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeticionController;
use App\Actions\Fortify\CreateNewUser;


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

Route::get('/', function () {
    return view('home');
});

Route::group(['middleware' => ['personalizada']], function () {
    Route::get('/admin/productos',[ProductoController::class, 'index']);
    Route::get('/admin/productos/create',[ProductoController::class, 'create']);
    Route::post('/admin/productos/create',[ProductoController::class, 'store']);
    Route::patch('/admin/productos/{id}/edit',[ProductoController::class, 'update']);
    Route::get('/admin/productos/{id}/edit',[ProductoController::class, 'edit']);
    Route::delete('/admin/productos/{id}',[ProductoController::class, 'destroy']);

    Route::get('/admin/peticiones',[PeticionController::class, 'index']);
    Route::post('/admin/peticiones',[PeticionController::class, 'store'])->middleware('capturapeticion')->name('peticion.store');
    Route::delete('/admin/peticiones/{id}',[PeticionController::class, 'destroy']);
});



