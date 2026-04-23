<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

// Agora a página inicial (/) chama o seu Controller, não a 'welcome'
Route::get('/', [CalculadoraController::class, 'index']);
Route::post('/calcular', [CalculadoraController::class, 'calcular']);