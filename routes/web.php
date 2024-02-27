<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);

    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);

    Route::get('/category/home-care', [ProductController::class, 'homeCare']);

    Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.profile');
Route::get('/penjualan', [PenjualanController::class,'index']);