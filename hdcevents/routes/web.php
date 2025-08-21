<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']); // criar dados no banco (controller)
Route::get('/events/{id}', [EventController::class, 'show']); // mostrar um dados especifico do banco (controller)
Route::post('/events', [EventController::class, 'store']); // enviar um dado no banco (controller)
Route::get('/contact', [EventController::class, 'contact']);




