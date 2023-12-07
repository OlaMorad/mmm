<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('user/login', [UserController::class, 'login'])->name('user.login');
Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::post('login', [UserController::class, 'log'])->name('login');
Route::post('register', [UserController::class, 'reg'])->name('register');

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'CreateProduct')->name('create');
    Route::post('product/insert', 'InsertProduct');
    Route::get('product/show', 'ShowProduct')->name('product.show');
    Route::get('product/edit/{id}', 'EditProduct')->name('product.edit');
    Route::post('product/update/{id}', 'updateProduct')->name('product.update');
    Route::delete('product/delete/{id}', 'deleteProduct')->name('product.delete');
});
