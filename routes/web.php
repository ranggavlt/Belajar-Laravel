<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


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

Route::get('/', [App\Http\Controllers\IndexController::class, 'dashboard']);
Route::get('/daftar', [App\Http\Controllers\AuthController::class, 'pendaftaran']);
Route::post('/home', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/table', function(){
    return view('list.table');
});

Route::get('/data-table', function(){
    return view('list.data-table');
});