<?php

use App\Http\Controllers\NilaiController;
use App\Http\Controllers\UserController;
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

//Route::get('/', function () {
//    return view('home');
//});


Route::get('/', [NilaiController::class, 'index']);
Route::get('/input-nilai', [NilaiController::class, 'input']);
Route::post('/grade', [NilaiController::class, 'grade']);
Route::get('/detail/{id}', [NilaiController::class, 'detail']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'detail']);

