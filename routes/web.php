<?php
// routes/web.php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Rota inicial - redireciona para login se não autenticado, para produtos se autenticado
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('products.index');
    }
    return redirect()->route('login');
})->name('home');

// Incluir rotas de autenticação
require __DIR__ . '/auth.php';

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return redirect()->route('products.index');
    })->name('dashboard');

    // Rotas de produtos protegidas
    Route::resource('products', ProductController::class);
});