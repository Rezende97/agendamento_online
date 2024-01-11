<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/agendamento', [AgendamentoController::class, 'createAgendamento'])->name('createAgendamento');
