<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\AdminShopController;
use App\Http\Controllers\AdminProductController;





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*---- User Home ----*/
Route::get('/redirect', [HomeController::class, 'redirect']); 


/*---- Login & Logout----*/
Route::get('/', [HomeController::class, 'index']); 


/*---- Shop ----*/
Route::get('/shop', [AdminShopController::class, 'shop']); 

Route::post('/uploadshop', [AdminShopController::class, 'uploadshop']); 

Route::get('/showshop', [AdminShopController::class, 'showshop']); 

Route::get('/deleteshop/{id}', [AdminShopController::class, 'deleteshop']);

Route::get('/updateviewshop/{id}', [AdminShopController::class, 'updateviewshop']);

Route::post('/updateshop/{id}', [AdminShopController::class, 'updateshop']); 


/*---- Product ----*/
Route::get('/product', [AdminProductController::class, 'product']); 

Route::post('/uploadproduct', [AdminProductController::class, 'uploadproduct']); 

Route::get('/showproduct', [AdminProductController::class, 'showproduct']); 

Route::get('/deleteproduct/{id}', [AdminProductController::class, 'deleteproduct']); 

Route::get('/updateview/{id}', [AdminProductController::class, 'updateview']); 

Route::post('/updateproduct/{id}', [AdminProductController::class, 'updateproduct']); 

/*---- Catalog ----*/
Route::get('/catalog', [CatalogController::class, 'showcatalog']); 

/*---- Search Catalog ----*/
Route::get('/search', [CatalogController::class, 'search']); 


/*---- Shop Catalog ----*/
Route::get('/viewshop/{id}', [ShopController::class, 'viewshop']); 


/*---- Orders ----*/
Route::get('/order', [OrderController::class, 'vieworder']); 

Route::get('/orderstatus/{id}', [OrderController::class, 'updatestatus']); 

/*---- Customer Orders ----*/
Route::middleware(['auth'])->group(function() {
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::get('/my-orders', [UserController::class, 'index']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
 

});
/*---- Orders ----*/
Route::get('/order', [OrderController::class, 'vieworder']); 

Route::get('/orderstatus/{id}', [OrderController::class, 'updatestatus']); 

/*---- Cart ----*/


Route::get('/show', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart1', [ProductController::class, 'cartList'])->name('cart.list');
Route::post('cart2', [ProductController::class, 'addToCart'])->name('cart.store');

/*---- cart ----*/
Route::get('cart', [ProductController::class, 'cartList'])->name('cart.list');
Route::post('cart', [ProductController::class, 'addToCart'])->name('cart.store');


