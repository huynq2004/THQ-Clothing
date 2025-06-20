<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/search', function () {
    return view('search.index');
})->name('search');

Route::get('/products', function () {
    return view('home'); // Chuyển về trang chủ vì products.index giống như trang chủ
})->name('products.index');

Route::get('/products/{id}', function () {
    return view('products.show');
})->name('products.show');

Route::get('/cart', function () {
    return view('cart.index');
})->name('cart.index');

Route::get('/checkout/shipping', function () {
    return view('checkout.shipping');
})->name('checkout.shipping');

Route::get('/checkout/confirm', function () {
    return view('checkout.confirm');
})->name('checkout.confirm');

Route::get('/checkout/success', function () {
    return view('checkout.success');
})->name('checkout.success');

Route::get('/orders/track', function () {
    return view('orders.track');
})->name('orders.track');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/categories/{category}', function ($category) {
    return view('categories.show', compact('category'));
})->name('categories.show');

// Thêm các route còn thiếu
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/products/category/{category}', function ($category) {
    return view('categories.show', compact('category'));
})->name('products.category');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');
    Route::get('/products', function () {
        return view('admin.products.index');
    })->name('products.index');
    Route::get('/orders', function () {
        return view('admin.orders.index');
    })->name('orders.index');
    Route::get('/discounts', function () {
        return view('admin.discounts.index');
    })->name('discounts.index');
    // Thêm các route khác cho admin ở đây sau
});
