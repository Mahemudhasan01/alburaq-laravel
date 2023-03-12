<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


//Products Routes
Route::controller(productController::class)->group(function () {
    Route::get('/', 'homePage')->name('home.index');
    Route::get('/contact', 'contactPage')->name('view.contact');
    Route::get('/product', 'showProducts')->name('index');
    Route::get('detail/', [productController::class, 'productDetail'])->name('view.product.detail');

    //Backend Routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('products/', 'productView')->name('product.view');
        Route::get('addProducts/', 'inserProduct')->name('insert.product');
        Route::post('insertProducts/', 'addProduct')->name('add.product');
        Route::get('productDelete/{id}', 'deleteProduct')->name('delete.product');
        Route::get('updateProduct/{id}', 'updateProduct')->name('update.product');
    });
    Route::get('admin/', 'adminLogin')->name('admin.index');
});

// Add to Cart's Routes
Route::controller(CartController::class)->group(function () {
    Route::get('cart/',  'viewShoppingCart')->name('view.shopping.cart');
    Route::get('cart/{id}',  'addShoppingCart')->name('add.shopping.cart');
    Route::get('removecart/{id}',  'removeCartItem')->name('remove.cart.item');
});

// User's Routes
Route::controller(UserController::class)->group(function () {
    Route::get('login/', 'viewLogin')->name('view.login');
    Route::post('login/', 'userLogin')->name('user.login');
    Route::get('signup/', 'viewSignUp')->name('view.signup');
    Route::post('adduser/', 'addNewUser')->name('add.new.user');

    //Backend Routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('users/', 'showUsers')->name('view.users');
        Route::post('users/', 'checkLogin')->name('admin.check.login');
        Route::get('logout/', 'adminLogout')->name('admin.logout');
    });
});

// Order Routes AT Frontend Side
Route::controller(OrderController::class)->group(function () {
    Route::get('checkout/', 'viewCheckOut')->name('view.checkout');
    Route::post('checkout/', 'insertOrder')->name('insert.order');

    //Backend Routes
    Route::group(['prefix' => 'admin'], function () {
        Route::get('orders/',  'viewOrders')->name('view.orders');
        Route::get('deleteorders/{id}',  'deleteOrders')->name('delete.order');
    });
});


Route::get('session/', function () {
    $session = session()->get('user');

    return dd($session);
});

//For Admin
Route::get('adminsession/', function () {
    $session = session()->get('adminUser');

    return dd($session);
});

Route::get('distroy/', function () {
    Session::flush();

    return redirect('session');
});
