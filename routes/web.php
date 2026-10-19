<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nim', [PageController::class, 'form'])->name('nim.form');
Route::post('/nim', [PageController::class, 'submit'])->name('nim.submit');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/students', [PageController::class, 'students'])->name('students');
Route::get('/grades', [PageController::class, 'grades'])->name('grades');
Route::get('/assignments', [PageController::class, 'assignments'])->name('assignments');


