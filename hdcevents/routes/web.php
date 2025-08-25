<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// ->middleware('auth') verifica se o usuario esta cadastrado para pode cadastrar um evento
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); // criar dados no banco (controller)
Route::get('/events/{id}', [EventController::class, 'show']); // mostrar um dado especifico do banco (controller)
Route::post('/events', [EventController::class, 'store']); // enviar um dado no banco (controller)
Route::get('/contact', [EventController::class, 'contact']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth'); // Editar

Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');

// Rota do cadastro apos a instalação
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
