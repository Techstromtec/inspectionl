<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MasterController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/state', [MasterController::class, 'state']);
Route::get('/city', [MasterController::class, 'city']);
Route::get('/locality', [MasterController::class, 'locality']);

Route::get('/getuser', [MasterController::class, 'getuser'])->name('getuser');