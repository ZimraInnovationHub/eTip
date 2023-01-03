<?php

use App\Http\Controllers\GeneralController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
});
Route::get('/', [GeneralController::class, 'index']);

Route::middleware(['logged'])->group(function () {
    Route::get('/home', [GeneralController::class, 'home']);
});


Route::get('/myaccount', function(){
    return view('password');
});
Route::get('/tip', function(){
    return view('tip');
});

// Route::get('/home', [GeneralController::class, 'home'])->middleware('logged');
