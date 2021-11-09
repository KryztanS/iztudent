<?php

use App\Http\Controllers\GuardianController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [StudentController::class, 'index'])->name('home');

// Students
Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::patch('students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// Parents
Route::get('parents', [GuardianController::class, 'index'])->name('parents.index');
Route::get('parents/create', [GuardianController::class, 'create'])->name('parents.create');
Route::post('parents', [GuardianController::class, 'store'])->name('parents.store');
Route::get('parents/{parent}/edit', [GuardianController::class, 'edit'])->name('parents.edit');
Route::patch('parents/{parent}', [GuardianController::class, 'update'])->name('parents.update');
Route::delete('parents/{parent}', [GuardianController::class, 'destroy'])->name('parents.destroy');
