<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class, 'index'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [UserController::class, 'register']);

Route::post('/login/process', [UserController::class, 'process']);
Route::post('/store', [UserController::class, 'store']);


Route::get('/logout', [UserController::class, 'logout']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('delete/{id}', [ProductController::class, 'delete']);
Route::get('addProduct', [ProductController::class, 'addProduct']);
Route::post('saveProduct', [ProductController::class, 'saveProduct']);
Route::get('edit/{id}', [ProductController::class, 'edit']);
Route::post('updateProduct', [ProductController::class, 'updateProduct']);
?> 