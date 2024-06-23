<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\MateriController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('materi', MateriController::class);
Route::post('/quiz/store', [QuizController::class, 'store'])->name('quiz.store');
Route::get('/quizzes', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/quizzes/create', [QuizController::class, 'create'])->name('quiz.create');
Route::post('/quizzes', [QuizController::class, 'store'])->name('quiz.store');
Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quiz.edit');
Route::put('/quizzes/{quiz}', [QuizController::class, 'update'])->name('quiz.update');
Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quiz.destroy');