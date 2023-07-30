<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\backEndController;

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

// for Admin
Route::prefix('/admin')->group(function(){
    Route::get('/', [backEndController::class, 'login']);
    Route::get('/dashboard', [backEndController::class, 'dashboard']);
    Route::get('/all-products', [backEndController::class, 'AllProduct']);
    Route::get('/add-product', [backEndController::class, 'AddProduct']);
    Route::post('/add-product', [backEndController::class, 'WpAddProduct']);
    Route::get('/delete/{id}',[backEndController::class, 'DeleteProduct']);
    Route::get('/edit/{id}',[backEndController::class, 'EditProduct']);
    Route::post('/edit',[backEndController::class, 'UpdateProduct']);
    Route::get('/add-category', [backEndController::class, 'AddCategory']);
    Route::post('/add-category', [backEndController::class, 'WpAddCategory']);
    
    Route::post('/admin', [backEndController::class, 'admin']);
});

Route::prefix('/')->group(function(){
    Route::get('/', [frontEndController::class, 'Home'])->name('hello');
    Route::get('/home2', [frontEndController::class, 'Home2']);
    Route::get('home', [frontEndController::class, 'Home']);
    Route::get('about', [frontEndController::class, 'about']);
    Route::get('shop', [frontEndController::class, 'shop']);
    Route::get('contact', [frontEndController::class, 'contact']);
    Route::get('faq', [frontEndController::class, 'faq']);
});

Route::prefix('blog')->group(function(){
    Route::get('/', [frontEndController::class, 'blog']);
    Route::get('/first', [frontEndController::class, 'Home']);
});

