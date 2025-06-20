<?php
require_once 'UserController.php';
require_once '../app/models/Cart.php';
require_once '../app/models/Product.php';


class CartController {
    public function index() {
        global $smarty;
        $user_c = new UserController();
        $user_c->userLoggedIn($_SESSION['user'] ?? null);

        $smarty->assign('user', $_SESSION['user'] ?? null);

        $smarty->assign('page_title', 'Cart Page');

        $cart= new Cart();
        $cartItems = $cart->fetchCartItems($_SESSION['user']['id'] ?? null);
        if(!empty($cartItems)){
            $smarty->assign('cartItems', $cartItems);
            $smarty->assign('total_price', $cart->getCartTotalPrice($_SESSION['user']['id'] ?? null)) ;  
        }else{
            $smarty->assign('cartItems', []);
            $smarty->assign('total_price', 0);
        }
        $smarty->assign('cartTotalCount', $cart->getCartTotalCount($_SESSION['user']['id'] ?? 0));
        $smarty->display('cart.tpl');

    }


    public function checkout() {
        global $smarty;

        $user_c = new UserController();
        $user_c->userLoggedIn($_SESSION['user'] ?? null);

        $cart = new Cart();

        $smarty->assign('user', $_SESSION['user'] ?? null);

        $smarty->assign('page_title', 'Checkout Page');

        // $smarty->assign('checkoutDetails', $checkoutDetails);
        $smarty->assign('cartTotalCount', $cart->getCartTotalCount($_SESSION['user']['id'] ?? null));
        $smarty->assign('cartItems', $cart->fetchCartItems($_SESSION['user']['id'] ?? null));
        $smarty->assign('total_price', $cart->getCartTotalPrice($_SESSION['user']['id'] ?? null)) ;  

        $smarty->display('checkout.tpl');
    }

    public function addToCart() {
        // global $smarty;

        $user_c = new UserController();
        $user_c->userLoggedIn($_SESSION['user'] ?? null);

        $cart = new Cart();
        $result = $cart->addToCart($_SESSION['user']['id'] ?? null, $_POST['product_id']);
        if($result === false){
            echo json_encode(['status' => 'error', 'message' => 'Failed to add item to cart.']);
            return; 
        }else {
            $productModel = new Product();
            $product = $productModel->find($_POST['product_id']);
            echo json_encode([
                'status' => 'success', 
                'message' => 'Item added to cart successfully.'
                // 'cartCount' => $cart->getCartTotalCount($_SESSION['user']['id'] ?? null),
                // 'cartTotalPrice' => $cart->getCartTotalPrice($_SESSION['user']['id'] ?? null),
            ]);
            return;
        }
        


        // $smarty->display('cart.tpl');
    }

    public function updateQuantity(){
        $user_c = new UserController();
        $user_c->userLoggedIn($_SESSION['user'] ?? null);

        $cart = new Cart();
        $result = $cart->updateCartItem($_SESSION['user']['id'] ?? null, $_POST['product_id'], $_POST['quantity']);
        if($result === false){
            echo json_encode(['status' => 'error', 'message' => 'Failed to update cart.']);
            return; 
        }else {
             $productModel = new Product();
            $product = $productModel->find($_POST['product_id']);
            echo json_encode([
                'status' => 'success', 
                'message' => 'cart updated successfully.', 
                'cartCount' => $cart->getCartTotalCount($_SESSION['user']['id'] ?? null),
                'cartTotalPrice' => number_format($cart->getCartTotalPrice($_SESSION['user']['id'] ?? null)),
                'subtotal' => number_format($product['current_price'] * $_POST['quantity'])
            ]);
            return;
        }
    }

    public function itemInCart(){
        $user_c = new UserController();
        $user_c->userLoggedIn($_SESSION['user'] ?? null);

        $cart = new Cart();
        $result = $cart->cartItemExists($_SESSION['user']['id'] ?? null, $_POST['product_id']);
        
        $smarty = $GLOBALS['smarty'];
        $smarty->assign('itemInCart', $result);

    }

    public function payment() {
        $user_c = new UserController();
        $user_c->userLoggedIn($_SESSION['user'] ?? null);

        $cart = new Cart();
        $cartItems = $cart->fetchCartItems($_SESSION['user']['id'] ?? null);
        $cartTotalPrice = $cart->getCartTotalPrice($_SESSION['user']['id'] ?? null);



        $cart->clearCart($_SESSION['user']['id'] ?? null);
        echo json_encode(['status' => 'success', 'message' => 'Payment successful, cart cleared.']);
    }



}



