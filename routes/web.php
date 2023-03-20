<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;
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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [ProductsController::class, 'index2'])->name('home');

Route::post('createProduct', [ProductsController::class, 'store'])->name('pantallas.createProduct');
Route::get('createProduct', [ProductsController::class, 'create']);
Route::get('listProducts', [ProductsController::class, 'index'])->name('pantallas.listProducts');
Route::delete('listProducts/{id}', [ProductsController::class, 'destroy'])->name('pantallas.listProducts.destroy');
Route::get('editProduct/{id}', [ProductsController::class, 'edit'])->name('pantallas.editProduct');
Route::patch('editProduct/{id}', [ProductsController::class, 'update'])->name('pantallas.editProduct');


Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
//Route::post('/list', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
