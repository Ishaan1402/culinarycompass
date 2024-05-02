<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\RecipeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/signup', [CustomerController::class, 'signup']);
Route::post('/login', [CustomerController::class, 'login']);
Route::post('/create-recipe', [RecipeController::class, 'createRecipe']);
Route::post('/update-recipe', [RecipeController::class, 'updateRecipe']);
