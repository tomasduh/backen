<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', [UserController::class, 'index']);

Route::get('/users/{token}', [UserController::class, 'index']);

Route::get('/users/{token}/transaction/{client_id}', [UserController::class, 'transaction']);

Route::get('/user/{id}', [UserController::class, 'userDetail']);