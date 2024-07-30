<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class,'redirect']);

route::get('/view_category', [AdminController::class, 'category']);

route::post('/add_category', [AdminController::class, 'add_category']);

route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/view_products', [AdminController::class, 'view_products']);

route::get('/add_products', [AdminController::class, 'add_products']);

route::post('/add_product', [AdminController::class, 'add_product']);

route::get('/delete_product/{product}', [AdminController::class, 'delete_product'])->name('delete_product');

route::get('/update_product/{product}', [AdminController::class, 'update_product'])->name('update-product');

route::post('/update_product_data/{product}', [AdminController::class, 'update_product_data'])->name('update-product-data');

route::get('/product_details/{product}', [HomeController::class, 'product_details'])->name('product-details');

route::post('/addCart/{product}', [HomeController::class, 'add_cart'])->name('add-cart');