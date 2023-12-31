<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user/json', [\App\Http\Controllers\UserController::class, 'data'])->name('user.data');
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/export_excel', [\App\Http\Controllers\UserController::class, 'export_excel']);
