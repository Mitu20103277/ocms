<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\OrderController;
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
Route::get('/admin/login',[UserController::class,'loginform'])->name('admin.login');
Route::post('/admin/login-form-post',[UserController::class,'loginpost'])->name('login.post');



Route::group(['middleware'=> 'auth'],function(){

Route::get('/',[HomeController::class,'home'])->name('dashboard');



Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('/food/list',[FoodController::class,'foodList'])->name('food.list');
Route::get('/food/create',[FoodController::class,'foodCreate'])->name('food.create');
Route::post('/food/store',[FoodController::class,'foodstore'])->name('food.store');

Route::get('/package/list',[PackageController::class,'List'])->name('package.list');
Route::get('/package/create',[PackageController::class,'Create'])->name('package.create');
Route::post('/package/store',[PackageController::class,'store'])->name('package.store');


Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
Route::post('/order/store',[OrderController::class,'store'])->name('order.store');



});