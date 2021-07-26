<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Seed
|--------------------------------------------------------------------------
|
| $ php artisan db:seed --class=ProductSeeder
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Product
Route::get('/',[ProductController::class,'index']);

//cart
Route::get('/cart',[CartController::class,'showCart']);
Route::post('/add-to-cart',[CartController::class,'addToCart']);
Route::delete('/remove-from-cart',[CartController::class,'removeFromCart']);

//cart
Route::get('/order',[OrderController::class,'index']);
Route::post('/order',[OrderController::class,'store']);
// Route::delete('/remove-from-cart',[CartController::class,'removeFromCart']);