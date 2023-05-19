<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/list', [ExerciseController::class, 'index'])->name('list');
Route::get('/exercise', [ExerciseController::class, 'create']);
Route::post('/exercise', [ExerciseController::class, 'store'])->name('exercise.store');
Route::get('/exercise/edit/{exercise}', [ExerciseController::class, 'edit'])->name('exercise.edit');
Route::put('/exercise/edit/{exercise}', [ExerciseController::class, 'update']);
Route::get('/exercise/{exercise}', [ExerciseController::class, 'show'])->name('exercise.show');
Route::delete('/exercise/{exercise}', [ExerciseController::class, 'destroy'])->name('exercise.destroy');
