<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController; // Importa tu controlador de API


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas de recurso para Productos
Route::apiResource('api/products', ProductController::class);


//curl -X POST -H "Content-Type: application/json" -d '{"name": "Laptop Gaming", price": 1200.00}' http://127.0.0.1:8000/api/products"