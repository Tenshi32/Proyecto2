<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Holamundo', function () {
    return view('Holamundo');
});

Route::get('/about', function () {
    return view('about');
});

// Rutas de recurso para Productos
Route::apiResource('products', ProductoController::class);