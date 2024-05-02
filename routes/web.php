<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/login', [FrontController::class, 'login']);
Route::get('/signup', [FrontController::class, 'signup']);

Route::get('/home', [FrontController::class, 'home']);
Route::get('/create', [FrontController::class, 'create']);
Route::get('/ingredients/{id}', [FrontController::class, 'ingredients']);
