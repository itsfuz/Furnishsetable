<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/register', [UserController::class, 'goToRegisterPage']);

Route::post('/UserRegistration', [UserController::class, 'RegisterAccount']);

Route::get('/login', [UserController::class, 'goToLoginPage']);

Route::get('/logout', [UserController::class, 'Logout']);

Route::post('/userlogin', [UserController::class, 'UserLogin']);

Route::get('/products', [ProductController::class, 'goToProductPage']);

Route::get('/LivingRoomProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/BedroomProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/KitchenProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/BathroomProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/addToCart/{id}', [CartController::class, 'addToCart']);

Route::get('/cart/{id}', [CartController::class, 'viewCart']);

Route::get('/addQuantity/{id}', [CartController::class, 'addQuantity']);

Route::get('/minusQuantity/{id}', [CartController::class, 'minusQuantity']);

Route::get('/productDetail/{id}', [ProductController::class, 'productDetails']);

Route::get('/checkout/{id}', [CartController::class, 'goToCheckoutPage']);

Route::get('/contactus', [ContactusController::class, 'contact']);
