<?php

use App\Http\Controllers\PlatosController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/platos', [PlatosController::class, 'listPlatos']);
Route::post('/platos', [PlatosController::class, 'guardarPlato']);
Route::get('/platos/{id}', [PlatosController::class, 'buscarPlato']);
Route::put('/platos/{id}', [PlatosController::class, 'actualizarPlato']);
Route::delete('/platos/{id}', [PlatosController::class, 'eliminarPlato']);

