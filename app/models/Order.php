<?php


class Order extends Database {

    public function createOrder($userId, $totalAmount, $firstname, $lastname, $email, $phone, $address, $notes) {
        $firstname = $this->validateInput($firstname);
        $lastname = $this->validateInput($lastname);
        $email = $this->validateInput($email);
        $phone = $this->validateInput($phone);
        $address = $this->validateInput($address);
        $notes = $this->validateInput($notes);

        $result = $this->query("INSERT INTO orders (user_id, total_amount, firstname, lastname, email, phone, address, notes) VALUES ($userId, '$totalAmount', '$firstname', '$lastname', '$email', '$phone', '$address', '$notes')");
        if($result === false) {
            return false; // Return false if the query fails
        }
        return $this->insert_id;
    }

    public function storeOrderItems($orderId, $productId, $quantity, $price, $subtotal) {
        // foreach ($cartItems as $item) {
        //     $productId = $item['product'];
        //     $quantity = (int)$item['quantity'];
        //     $price = (float)$item['current_price'];
        //     $subtotal = (float)$item['subtotal'];

        $result = $this->query("INSERT INTO order_items (order_id, product_id, quantity, item_price, total_price) VALUES ('$orderId', '$productId', '$quantity', '$price', '$subtotal')");
        return $result;
    }
    public function getAllOrders() {
        // $userId = $this->real_escape_string($userId);
        $result = $this->query("SELECT * FROM orders ORDER BY created_at DESC");
        
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        return $data;
    }

    public function getOrderDetails($orderId) {
        $orderId = $this->real_escape_string($orderId);
        $result = $this->query("SELECT * FROM orders WHERE id = '$orderId'");
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        
        return null;
    }

    public function getOrderItems($orderId) {
        $orderId = $this->real_escape_string($orderId);
        $result = $this->query("SELECT oi.*, p.name, p.image from order_items as oi LEFT JOIN products as p on oi.product_id = p.id WHERE oi.order_id = $orderId ");
        
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        return $data;
    }

    public function updateOrder($orderId, $status) {
        return $this->query("UPDATE orders SET status = '$status' WHERE id = '$orderId'");
    }




}


