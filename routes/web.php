<?php

use App\Http\Controllers\GuardianController;
use App\Http\Controllers\LoginController;
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



Route::middleware('auth')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('home');
    Route::resource('students', StudentController::class)->except(['index', 'show']);
    Route::resource('parents', GuardianController::class)->except(['show']);
});

Route::get('login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'store'])->middleware('guest');
Route::post('logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

// Students
// Route::get('students', [StudentController::class, 'index'])->name('students.index');
// Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
// Route::post('students', [StudentController::class, 'store'])->name('students.store');
// Route::get('students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
// Route::patch('students/{student}', [StudentController::class, 'update'])->name('students.update');
// Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');