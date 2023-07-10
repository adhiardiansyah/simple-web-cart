<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [ProductController::class, 'index']);
Route::post('/', [ProductController::class, 'index']);
Route::get('/detail/{product_id}', [ProductController::class, 'detail']);
Route::get('/brand/{brand_id}', [ProductController::class, 'brand']);

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->middleware('auth');
Route::post('/buy', [CartController::class, 'buy'])->middleware('auth');
Route::get('/cart', [CartController::class, 'cart'])->middleware('auth');
Route::post('/update-cart', [CartController::class, 'updateCart'])->middleware('auth');
Route::delete('/deleteCart/{cart_id}', [CartController::class, 'deleteCart'])->middleware('auth');

Route::post('/checkout', [OrderController::class, 'checkout'])->middleware('auth');
Route::get('/history', [OrderController::class, 'history'])->middleware('auth');

Auth::routes();

