<?php

use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lessons', [LessonController::class, 'index']);
Route::get('/lessons/create', [LessonController::class, 'create']);
Route::get('/lessons/update', [LessonController::class, 'update']);
Route::get('/lessons/delete', [LessonController::class, 'delete']);