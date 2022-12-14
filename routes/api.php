<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PermitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::get('/home', [GeneralController::class, 'home']);

    Route::post('/tip', [PermitController::class, 'store']);
    Route::post('/tip/{permit}', [PermitController::class, 'update']);

    Route::post('/change-password/{id}', [AuthController::class, 'changePassword']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
