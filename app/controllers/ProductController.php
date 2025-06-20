<?php

require_once '../app/models/Product.php';
require_once '../app/models/Cart.php';


class ProductController {
    public function index() {
        global $smarty;

        $products = [
            ['id' => 1, 'name' => 'Red Sneakers', 'price' => '4500'],
            ['id' => 2, 'name' => 'Blue Jeans', 'price' => '3000']
        ];

        $products = new Product();
        $all_products = $products->fetchAll();
        // if(!empty())

        $smarty->assign('all_products', $all_products);

        $smarty->assign('products', $products);
        $smarty->display('products.tpl');
    }

    public function shop() {
        global $smarty;

        $user = $_SESSION['user'] ?? null;
        
        $cart = new Cart();
        $smarty->assign('cartTotalCount', $cart->getCartTotalCount($_SESSION['user']['id'] ?? null));
        $cart_items = $cart->fetchCartItems($_SESSION['user']['id'] ?? null);
        $items = [];
        foreach ($cart_items as $cart_item) {
            $items[] = $cart_item['product'];
        }

        // $smarty->assign('itemInCart', $cart );
        $products = new Product();
        // $all_products = $products->fetchAll();
        $smarty->assign('all_products', $products->fetchAll());
        $smarty->assign('page_title', 'All Products');
        $smarty->assign('user', $user);
        $smarty->assign('itemInCart', $items);
        $smarty->display('shop.tpl');
    }

    public function productDetails() {
        global $smarty;

        // $product = [
        //     'id' => 1,
        //     'name' => 'Red Sneakers',
        //     'price' => '4500',
        //     'description' => 'High quality red sneakers for all occasions.'
        // ];

        if (!isset($_GET['p']) || !is_numeric($_GET['p'])) {
            echo "Invalid product ID";
            return;
        }
        $cart = new Cart();
        $smarty->assign('cartTotalCount', $cart->getCartTotalCount($_SESSION['user']['id'] ?? null));
        $smarty->assign('productInCart', $cart->cartItemExists($_SESSION['user']['id'] ?? null, $_GET['p']) );

        $id = (int)$_GET['p'];

        $productModel = new Product();
        $product = $productModel->find($id);

        if (!$product) {
            echo "Product not found.";
            return;
        }

        $cart_items = $cart->fetchCartItems($_SESSION['user']['id'] ?? null);
        $items = [];
        foreach ($cart_items as $cart_item) {
            $items[] = $cart_item['product'];
        }

        $smarty->assign('itemInCart', $items);
        $smarty->assign('page_title', $product['name']);
        $smarty->assign('user', $_SESSION['user'] ?? null);
        $smarty->assign('product', $product);
        $smarty->assign('relatedProducts', $productModel->randomProducts(4));
        $smarty->display('product-details.tpl');
    }




}
