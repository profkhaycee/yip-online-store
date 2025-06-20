<?php
require_once '../config/config.php';
require_once '../core/Router.php';

$router = new Router();
$router->get('', 'ProductController@index');
$router->get('/product', 'ProductController@index');
$router->get('/shop', 'ProductController@shop');
$router->get('/product-details', 'ProductController@productDetails');
$router->get('/shop-cart', 'CartController@index');
$router->get('/cart', 'CartController@index');
$router->post('/cart-add', 'CartController@addToCart');
$router->post('/cart-update', 'CartController@UpdateQuantity');
$router->post('/cart-remove', 'CartController@removeFromCart');
$router->post('/cart-clear', 'CartController@clearCart');
$router->get('/checkout', 'CartController@checkout');
$router->post('/checkout-pay', 'OrderController@create');
$router->get('/login', 'UserController@loginPage');
$router->get('/register', 'UserController@registerPage');
$router->post('/login-submit', 'UserController@loginUser');
$router->post('/register-submit', 'UserController@registerUser');
$router->get('/logout', 'UserController@logout');
$router->get('/account', 'UserController@profile');

$router->get('/admin-dashboard', 'OrderController@adminDashboard');
$router->get('/orders', 'OrderController@orders');
$router->get('/order-details', 'OrderController@orderDetails');
$router->post('/order-update', 'OrderController@orderUpdate');





$router->dispatch();

