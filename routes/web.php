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
