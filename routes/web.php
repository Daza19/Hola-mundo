<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrerController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/registrer', [RegistrerController::class, 'create'])
        ->middleware('guest')
        ->name('registrer.index');

Route::post('/registrer', [RegistrerController::class, 'store'])->name('registrer.store');


Route::get('/login', [SessionsController::class, 'create'])
        ->middleware('guest')                
        ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
        ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
        ->middleware('auth')
        ->name('login.destroy');