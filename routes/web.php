<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/register', [UserController::class, 'goToRegisterPage']);

Route::post('/UserRegistration', [UserController::class, 'RegisterAccount']);

Route::get('/products', [ProductController::class, 'goToProductPage']);

Route::get('/LivingRoomProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/BedroomProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/KitchenProducts/{id}', [ProductController::class, 'CategorizedProducts']);

Route::get('/BathroomProducts/{id}', [ProductController::class, 'CategorizedProducts']);

