<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get(
    '/',
    [TaskController::class, 'index']
)->name('tasks.index');

Route::post(
     '/destroy/{id}',
    [TaskController::class, 'destroy']
)->name('tasks.destroy');

Route::delete(
    '/destroy/{id}',
   [TaskController::class, 'delete']
)->name('tasks.delete');

 Route::get(
    'edit/{id}',
    [TaskController::class, 'edit']
)->name('tasks.edit');

Route::post(
    '/update/{id}',
    [TaskController::class, 'update']
)->name('tasks.update');
   
Route::post(
    '/create',
    [TaskController::class, 'create']
)->name('tasks.create');

Route::post(
    '/toggle/{id}',
    [TaskController::class, 'toggle']
)->name('tasks.toggle');
