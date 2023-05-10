<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegisterController;                    

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::POST('/register', [RegisterController::class, 'store']);