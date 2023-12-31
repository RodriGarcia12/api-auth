<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('v1')->group(function ()
{
    Route::post('/register',[UserController::class,"Register"]);
    Route::get('/validate',[UserController::class,"MakeValidate"])->middleware('auth:api');
    Route::get('/logout',[UserController::class,"Logout"])->middleware('auth:api');
    Route::get('/users',[UserController::class,"ListUsers"]); 
});