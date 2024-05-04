<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlpineController;
use App\Http\Controllers\StarterController;

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
    return view('layout');
})->name('home');

Route::get('starter', [StarterController::class, 'index'])->name('starter.index');
Route::get('starter/lifecycle', [StarterController::class, 'lifecycle'])->name('starter.lifecycle');
Route::get('starter/basic-table', [StarterController::class, 'basicTable'])->name('starter.basic-table');
Route::get('starter/basic-form', [StarterController::class, 'basicForm'])->name('starter.basic-form');
Route::get('starter/basic-form/create', [StarterController::class, 'createBasicForm'])->name('starter.basic-form.create');
Route::get('starter/nesting', [StarterController::class, 'nesting'])->name('starter.nesting');

Route::get('alpine', [AlpineController::class, 'index'])->name('alpine.index');
