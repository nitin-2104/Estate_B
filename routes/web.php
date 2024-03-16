<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ContactController;
use App\Models\Customer;

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

Route::get('/inquiry', [ContactController::class,'index']);
Route::post('/inquiry', [ContactController::class,'submit']);
Route::get('/customer', [ContactController::class,'index']);
Route::post('/customer', [ContactController::class,'submit']);

