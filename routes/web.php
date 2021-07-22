<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

// user controller

Route::post('/login', [UserController::class, 'loginUsers'])->name('login.acc');
// main controller
Route::post('/buy.trade', [MainController::class, 'buyTrade'])->name('buy.trade');
Route::post('/sell.trade', [MainController::class, 'sellTrade'])->name('sell.trade');

Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('/',[UserController::class, 'login'])->name('login');
    Route::get('/logout', [UserController::class, 'Logout'])->name('logout.acc');

    Route::get('/dashboard', [MainController::class, 'dashboard']);
    Route::get('/trade', [MainController::class, 'trade']);
});
