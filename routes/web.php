<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get(
    '/',
    [TaskController::class, 'index']
)->name('tasks.index');

Route::get(
    '/{id}/edit',
    [TaskController::class, 'edit']
)->name('tasks.edit');

Route::post(
    '/{id}/edit',
    [TaskController::class, 'update']
)->name('tasks.update');

Route::delete(
    '/{id}/destroy',
    [TaskController::class, 'destroy']
)->name('tasks.destroy');

Route::post(
    '/create',
    [TaskController::class, 'create']
)->name('tasks.create');