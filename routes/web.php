<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get(
    '/',
    [NoteController::class, 'index']
)->name('notes.index');
