<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SlideBarController;
use App\Http\Controllers\CutomersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TakedController;
use App\Http\Controllers\ProductsFixController;


Route::get('search/{key}', [ProductsFixController::class, 'search']);


Route::get('/product', [ProductsFixController::class, 'index']);
Route::post('/product/add', [ProductsFixController::class, 'store']);
Route::post('/product/update', [ProductsFixController::class, 'update']);
Route::delete('/product/delete/{id}', [ProductsFixController::class, 'delete']);

Route::get('/check', [TakedController::class, 'index']);
Route::post('/check/add', [TakedController::class, 'store']);
Route::post('/check/update', [TakedController::class, 'update']);
Route::delete('/check/delete/{id}', [TakedController::class, 'delete']);

Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add', [CartController::class, 'store']);
Route::post('/cart/update', [CartController::class, 'update']);
Route::delete('/cart/delete/{id}', [CartController::class, 'delete']);

Route::get('/like', [LikeController::class, 'index']);
Route::post('/like/add', [LikeController::class, 'store']);
Route::post('/like/login', [LikeController::class, 'login']);
Route::delete('/like/delete/{id}', [LikeController::class, 'delete']);

Route::get('/newletter', [NewController::class, 'index']);
Route::post('/newletter/add', [NewController::class, 'store']);
Route::post('/newletter/update{id}', [NewController::class, 'update']);
Route::delete('/newletter/delete/{id}', [NewController::class, 'delete']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/users/register', [UserController::class, 'store']);
Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/update{id}', [UserController::class, 'update']);
Route::delete('/users/delete/{id}', [UserController::class, 'delete']);


Route::get('/customers', [CutomersController::class, 'index']);
Route::post('/customers/add', [CutomersController::class, 'store']);
Route::post('/customers/update/{id}', [CutomersController::class, 'update']);
Route::delete('/customers/delete/{id}', [CutomersController::class, 'delete']);


Route::get('/slide', [SlideBarController::class, 'index']);
Route::post('/slide/add', [SlideBarController::class, 'store']);
Route::post('/slide/update/{id}', [SlideBarController::class, 'update']);
Route::delete('/slide/delete/{id}', [SlideBarController::class, 'delete']);



Route::get('category', [CategoryController::class, 'index']);
Route::post('category/add', [CategoryController::class, 'store']);
Route::post('category/update/{id}', [CategoryController::class, 'update']);
Route::delete('category/delete/{id}', [CategoryController::class, 'delete']);




