<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CircleController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[CircleController::class,'index'])->name('index');
Route::get('/circles/create',[CircleController::class,'create'])->name('create');
Route::get('/circles/{circle}',[CircleController::class,'show']);
Route::post('/circles',[CircleController::class,'store']);
Route::get('/circles/{circle}/edit',[CircleController::class,'edit']);
Route::put('circles/{circle}',[CircleController::class,'update']);
Route::delete('/circles/{circle}',[CircleController::class,'delete']);

Route::get('/students/index',[StudentController::class,'index']);
Route::get('/students/create',[StudentController::class,'create']);
Route::post('/students',[StudentController::class,'store']);

