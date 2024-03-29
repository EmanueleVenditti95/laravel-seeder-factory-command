<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('products.home');
});

Route::controller(ProductController::class)
->prefix('produtcs')
->name('products.')
->group(function () {
    Route::get('/','index')->name('home');
    Route::get('/{product}','show')->name('show');
});

