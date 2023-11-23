<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',[WebController::class,'home'])->name('home');
Route::get('/foods',[WebController::class,'food'])->name('home.food');

Route::get('/register',[CustomerController::class,'registerPage'])->name('customer.register');
Route::post('/do-register',[CustomerController::class,'doregister'])->name('customer.doregister');

Route::get('/login',[CustomerController::class,'loginPage'])->name('customer.login');
Route::post('/do-login',[CustomerController::class,'login'])->name('customer.dologin');
Route::get('/logout',[CustomerController::class,'logout'])->name('customer.logout');

Route::get('/admin/login',[UserController::class,'loginform'])->name('admin.login');
Route::post('/admin/do-login',[UserController::class,'loginpost'])->name('login.post');


   Route::group(['prefix'=> 'amdin'], function () {

  

    Route::group(['middleware'=> 'auth'],function(){

    
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
    Route::get('/',[HomeController::class,'home'])->name('dashboard');
    

    
    Route::get('/users',[UserController::class,'list'])->name('users.list');
    Route::get('/users/create',[UserController::class,'createform'])->name('users.create');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    

    
    Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');


    
    Route::get('/food/list',[FoodController::class,'foodList'])->name('food.list');

    Route::get('/food/create',[FoodController::class,'foodCreate'])->name('food.create');
    
    Route::post('/food/store',[FoodController::class,'foodstore'])->name('food.store');
   
    Route::get('/food/edit/{id}',[FoodController::class,'edit'])->name('food.edit');
   
    Route::post('/food/update/{id}',[FoodController::class,'update'])->name('food.update');

    Route::get('/food/show/{id}', [FoodController::class,'show'])->name('food.show');

    Route::get('/food/delete/{id}',[FoodController::class,'delete'])->name('food.delete');



    
    Route::get('/package/list',[PackageController::class,'List'])->name('package.list');
    Route::get('/package/create',[PackageController::class,'Create'])->name('package.create');
    Route::post('/package/store',[PackageController::class,'store'])->name('package.store');
    
    
    Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
    Route::get('/order/create',[OrderController::class,'create'])->name('order.create');
    Route::post('/order/store',[OrderController::class,'store'])->name('order.store');
    
    Route::get('/customer/list',[CustomerController::class,'customerlist'])->name('customer.list');
    
    
    });

});