<?php

use App\Http\Controllers\backend\productController;
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

//Backend Routes 
Route::group(['prefix' => '/admin'], function (){
    Route::get('/', [productController::class, 'index1'])->name('index');
    Route::get('products/', [productController::class, 'productView'])->name('product.view');
    Route::get('addProducts/', [productController::class, 'inserProduct'])->name('insert.product');
    Route::post('insertProducts/', [productController::class, 'addProduct'])->name('add.product');
    Route::get('productDelete/{id}', [productController::class, 'deleteProduct'])->name('delete.product');
    Route::get('updateProduct/{id}', [productController::class, 'updateProduct'])->name('update.product');

});

Route::group([''], function (){
    Route::get('/', [productController::class, 'homePage'])->name('home.index');
    Route::get('/contact', [productController::class, 'contactPage'])->name('view.contact');
    Route::get('/product', [productController::class, 'index'])->name('index');
    Route::get('cart/', [productController::class, 'viewShoppingCart'])->name('view.shopping.cart');
    Route::get('cart/{id}', [productController::class, 'addShoppingCart'])->name('add.shopping.cart');
    Route::get('removecart/{id}', [productController::class, 'removeCartItem'])->name('remove.cart.item');
    Route::get('login/', [productController::class, 'viewLogin'])->name('view.login');
    Route::post('login/', [productController::class, 'userLogin'])->name('user.login');
    Route::get('signup/', [productController::class, 'viewSignUp'])->name('view.signup');
    Route::post('adduser/', [productController::class, 'addNewUser'])->name('add.new.user');
    Route::get('checkout/', [productController::class, 'viewCheckOut'])->name('view.checkout');
    Route::post('checkout/', [productController::class, 'insertOrder'])->name('insert.order');
    //Backend
    Route::get('orders/', [productController::class, 'viewOrders'])->name('view.orders');
    Route::get('deleteorders/{id}', [productController::class, 'deleteOrders'])->name('delete.order');

    //After
    Route::get('detail/', [productController::class, 'productDetail'])->name('view.product.detail');
});
