<?php

require_once 'UserController.php';
require_once '../app/models/Order.php';
require_once '../app/models/Cart.php';

class OrderController{

    public function create(){

        global $smarty;
        
        $firstname = $_POST['user-firstname'] ?? '';
        $lastname = $_POST['user-lastname'] ?? '';
        $phone = $_POST['user-phone'] ?? '';
        $email = $_POST['user-email'] ?? '';
        $address = $_POST['user-address'] ?? '';
        $notes = $_POST['user-notes'] ?? '';

        $cart = new Cart();
        $totalAmount = $cart->getCartTotalPrice($_SESSION['user']['id'] ?? null);
        $cartItems = $cart->fetchCartItems($_SESSION['user']['id'] ?? null);


        $order = new Order();

        $orderId = $order->createOrder($_SESSION['user']['id'] ?? null, $totalAmount, $firstname, $lastname, $email, $phone, $address, $notes);
        if($orderId !== false){
            foreach ($cartItems as $item) {
                $productId = $item['product'];
                $quantity = (int)$item['quantity'];
                $price = (float)$item['current_price'];
                $subtotal = (float)$item['subtotal'];

                $result = $order->storeOrderItems($orderId, $productId, $quantity, $price, $subtotal);
                if($result === false){
                    echo $result;
                    $error = "ORDER ITEM FAILED - Please try again later";
                    // echo "<script>alert('ORDER FAILED'); //location.href='cart'</script>";
                    return; //exit;
                }
            }
            // clear cart
            $cart->clearCart($_SESSION['user']['id'] ?? null);
            // echo "<script>alert('ORDER SUCCESSFUL - You will Get an order confirmation shortly'); //location.href='orders'</script>";

            $smarty->display('cart.tpl');
        }else{
            $error = "ORDER FAILED - Please try again later";
            // echo "<script>alert('ORDER FAILED'); //location.href='cart'</script>";
        }


        $smarty->assign('error', $error ?? false) ;
        $smarty->display('cart.tpl');

    }

    public function adminDashboard(){
        global $smarty;

        $order = new Order();
        $orders = $order->getAllOrders();
        $smarty->display('admin/index.tpl');
    }

    public function orders(){
        global $smarty;

        $order = new Order();
        $orders = $order->getAllOrders();
        $smarty->assign('orders', $orders);
        $smarty->assign('page_title', 'Order Lists');
        $smarty->display('admin/order-list.tpl');
    }

    public function orderDetails() {
        global $smarty;

        if (!isset($_GET['order']) || !is_numeric($_GET['order'])) {
            echo "<script>alert('Invalid order ID')</script>";
            echo "<script>location.href='orders'</script>";

            return;
        }

        $orderId = (int)$_GET['order'];
        $order = new Order();
        $orderDetails = $order->getOrderDetails($orderId);
        if ($orderDetails === null) {
            echo "<script>alert('Order Not Found')</script>";
            echo "<script>location.href='orders'</script>";
            return;
        }

        $status = $orderDetails['status'];

        if($status === 'pending') {
            $statusColor = 'info';
        } elseif ($status === 'shipped') {
            $statusColor = 'warning';
        } elseif ($status === 'confirmed') {
            $statusColor = 'primary';
        } elseif ($status === 'delivered') {
            $statusColor = 'success';
        } else {
            $statusColor = 'dark'; // Default color for unknown status
        }
        $orderItems = $order->getOrderItems($orderId);
        
        $smarty->assign('status_color', $statusColor);
        $smarty->assign('orderDetails', $orderDetails);
        $smarty->assign('orderItems', $orderItems);
        $smarty->assign('page_title', 'Order Details');
        $smarty->display('admin/order-details.tpl');

    }

    public function orderUpdate() {
        if (!isset($_POST['order_id']) || !isset($_POST['status'])) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
            echo "<script>alert('Invalid request')</script>";

            echo "<script>location.href='orders'</script>";

            return;
        }

        $orderId = (int)$_POST['order_id'];
        $status = $_POST['status'];

        $order = new Order();
        $result = $order->updateOrder($orderId, $status);

        if ($result) {
            // echo json_encode(['status' => 'success', 'message' => 'Order status updated successfully']);
            echo "<script>alert('Order status updated successfully')</script>";

            echo "<script>location.href='order-details?order=$orderId'</script>";
        } else {
            // echo json_encode(['status' => 'error', 'message' => 'Failed to update order status']);
            echo "<script>alert('Failed to update order status')</script>";

            echo "<script>location.href='order-details?order=$orderId'</script>";
        }
    }





}





