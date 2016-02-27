<?php

Route::get('/', function () {
    $title = 'Ecommerce | Index Page';
    $products = Product::all();
    $cart = Cart::contents();
    return View::make('pages.index')->with('title', $title)->with('products', $products)->with('cart', $cart);
});

Route::post('/addtocart', [
    'as'   => 'product.add',
    'uses' => 'StoreController@postAddCart'
])->before('csrf');

Route::get('products/{slug}', [
    'as'    => 'product.view',
    'uses'  => 'StoreController@getViewProduct'
]);

Route::delete('cart/destroy', [
    'as'    => 'cart.destroy',
    'uses'  => 'StoreController@postDestroyCart'
])->before('csrf');

Route::delete('cart/product/{id}', [
    'as'    => 'cart.product.delete',
    'uses'  => 'StoreController@removeProduct'
]);

Route::get('cart', function() {

    $title = 'Ecommerce | Cart Page';
    $products = Product::all();
    $cart = Cart::contents();
    return View::make('pages.cart')->with('title', $title)->with('cart', $cart);
});

Route::get('login', function() {
    $title = 'Ecommerce | Login Page';
    $cart = Cart::contents();
    return View::make('pages.login')->with('title', $title)->with('cart', $cart);
});

Route::get('register', function() {
    $title = 'Ecommerce | Register Page';
    $cart = Cart::contents();
    return View::make('pages.register')->with('title', $title)->with('cart', $cart);
});

Route::get('contact', function() {
    $title = 'Ecommerce | Contact Page';
    $cart = Cart::contents();
    return View::make('pages.contact', compact('title', 'cart'));
});