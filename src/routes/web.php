<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PurchaseController;
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

Route::get('/', [ItemController::class, 'index']);
Route::get('/item/{item_id}', [ItemController::class, 'detail'])->name('item.detail');

Route::post('/item/comment/{item_id}', [CommentController::class, 'create']);

Route::post('/item/like/{item_id}', [LikeController::class, 'create']);
Route::post('/item/unlike/{item_id}', [LIkeController::class, 'destroy']);

Route::get('/purchase/{item_id}', [PurchaseController::class, 'index']);
Route::post('/purchase/{item_id}', [PurchaseController::class, 'purchase']);
Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'address']);
Route::post('/purchase/address/{item_id}', [PurchaseController::class, 'updateAddress']);

Route::get('/sell', [ItemController::class, 'sellView']);
Route::post('/sell', [ItemController::class, 'sellCreate']);

Route::get('/mypage', [UserController::class, 'mypage']);
Route::get('/mypae/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/mypae/profile', [UserController::class, 'updateProfile']);








require __DIR__.'/auth.php';
