<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'classroom'], function() {
    Route::get('/create', [App\Http\Controllers\ClassroomController::class, 'create'])->name('classroom.create');
    Route::put('/{id}', [App\Http\Controllers\ClassroomController::class, 'update'])->name('classroom.update');
    Route::get('/index', [App\Http\Controllers\ClassroomController::class, 'index'])->name('classroom.index');
    Route::get('/{id}', [App\Http\Controllers\ClassroomController::class, 'edit'])->name('classroom.edit');
    Route::post('/index', [App\Http\Controllers\ClassroomController::class, 'store'])->name('classroom.store');
    Route::delete('/{id}', [App\Http\Controllers\ClassroomController::class, 'destroy'])->name('classroom.destroy');
    
});
Route::get('/search', [App\Http\Controllers\TutorController::class, 'search'])->name('tutor.search');
Route::group(['prefix' => 'tutor'], function() {
    Route::get('/create', [App\Http\Controllers\TutorController::class, 'create'])->name('tutor.create');
    Route::put('/{id}', [App\Http\Controllers\TutorController::class, 'update'])->name('tutor.update');
    Route::get('/index', [App\Http\Controllers\TutorController::class, 'index'])->name('tutor.index');
    Route::get('/{id}', [App\Http\Controllers\TutorController::class, 'edit'])->name('tutor.edit');
    Route::post('/index', [App\Http\Controllers\TutorController::class, 'store'])->name('tutor.store');
    Route::delete('/{id}', [App\Http\Controllers\TutorController::class, 'destroy'])->name('tutor.destroy');
    
});
Route::get('/student', [StudentController::class, 'index'])->name('student.index');




