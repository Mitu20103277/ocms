<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontendpackageController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;
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

Route::get('/search-foods',[WebController::class,'search'])->name('food.search');


Route::get('/category',[WebController::class,'category'])->name('home.category');
Route::get('/foods',[WebController::class,'food'])->name('home.food');
Route::get('/singlefoodview/{id}',[WebController::class,'singlefoodview'])->name('single.food');
Route::get('/singlepackages/{id}',[WebController::class,'singlepackage'])->name('single.package');
Route::get('/package',[WebController::class,'package'])->name('home.package');







Route::get('/register',[CustomerController::class,'registerPage'])->name('customer.register');
Route::post('/do-register',[CustomerController::class,'doregister'])->name('customer.doregister');

Route::get('/login',[CustomerController::class,'loginPage'])->name('customer.login');
Route::post('/do-login',[CustomerController::class,'login'])->name('customer.dologin');

Route::get('/cart-view',[CartController::class,'viewCart'])->name('cart.view');
Route::get('/add-to-cart/{food_id}',[CartController::class,'addToCart'])->name('add.toCart');

Route::get('/add-package-to-cart/{package_id}',[CartController::class,'addPackageCartItem'])->name('add.cartItem');

Route::group(['prefix'=>'customer'], function () {
Route::group(['middleware'=> 'customer' ], function () {

Route::get('/profile', [CustomerController::class,'profile'])->name('profile.view');

Route::get('/checkout',[CartController::class,'checkout'])->name('checkout');

Route::get('/logout',[CustomerController::class,'logout'])->name('customer.logout');
Route::post('/order-place',[OrderController::class, 'orderPlace'])->name('order.place');

  // SSLCOMMERZ Start
  Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
  Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
  
  Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
  Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
  
  Route::post('/success', [SslCommerzPaymentController::class, 'success']);
  Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
  Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
  
  Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
  //SSLCOMMERZ END
  
});
});


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
    Route::get('/package/delete/{id}',[PackageController::class,'delete'])->name('package.delete');
    Route::get('/package/create',[PackageController::class,'Create'])->name('package.create');
    Route::post('/package/store',[PackageController::class,'store'])->name('package.store');
    
    
    Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
    Route::get('/order/details/{id}',[OrderController::class,'orderDetails'])->name('order.details');
     

    Route::get('/customer/list',[CustomerController::class,'customerlist'])->name('customer.list');
    
    
    });

});