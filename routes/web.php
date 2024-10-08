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

Route::delete(
     '/destroy/{id}',
    [TaskController::class, 'destroy']
)->name('tasks.destroy');

Route::post(
    '/{id}/edit',
    [TaskController::class, 'update']
)->name('tasks.update');
   
Route::post(
    '/create',
    [TaskController::class, 'create']
)->name('tasks.create');