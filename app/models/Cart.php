<?php


class Cart extends Database {

    public function fetchCartItems($userId) {
        $userId = $this->real_escape_string($userId);
        $query ="SELECT c.*, p.name, p.image, p.current_price, c.quantity * p.current_price as subtotal  FROM `cart` as c join products as p ON c.product = p.id where c.user = $userId ";
        $result = $this->query($query);
        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function addToCart($userId, $productId) {
        $userId = $this->real_escape_string($userId);
        $productId = $this->real_escape_string($productId);

        // Check if the product already exists in the cart
        $result = $this->cartItemExists($userId, $productId);
        if ($result['status'] === true) {
            // If it exists, update the quantity
            $newQuantity = $result['quantity'] + 1;
            return $this->updateCartItem($userId, $productId, $newQuantity);
        }else{
            return $this->query("INSERT INTO cart (user, product, quantity) VALUES ('$userId', '$productId', 1)");
        }
    }

    public function updateCartItem($userId, $cartItemId, $quantity) {
        $cartItemId = (int)$cartItemId;
        $quantity = (int)$quantity;
        return $this->query("UPDATE cart SET quantity = '$quantity' WHERE product = '$cartItemId' and user = $userId ");
    }
    public function removeFromCart($userId, $cartItemId) {
        $cartItemId = (int)$cartItemId;
        return $this->query("DELETE FROM cart WHERE user = $userId and product = '$cartItemId'");
    }

    public function getCartTotalPrice($userId) {
        $userId = $this->real_escape_string($userId);
        $result = $this->query("SELECT SUM(products.current_price * cart.quantity) AS total FROM cart JOIN products ON cart.product = products.id WHERE cart.user = '$userId'");
        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['total'];
        }
        return 0;
    }

    public function clearCart($userId) {
        $userId = $this->real_escape_string($userId);
        return $this->query("DELETE FROM cart WHERE user = '$userId'");
    }

    public function cartItemExists($userId, $productId) {
        $userId = $this->real_escape_string($userId);
        $productId = $this->real_escape_string($productId);
        $result = $this->query("SELECT quantity FROM cart WHERE user = '$userId' AND product = '$productId'");
        $data = [];
        if($result->num_rows > 0) {
            return ['status' => true, 'quantity' => $result->fetch_assoc()['quantity']];
        } else {
            return ['status' => false, 'quantity' => 0];
        }
    }

    public function getCartTotalCount($userId) {
        $userId = $this->real_escape_string($userId);
        $result = $this->query("SELECT sum(quantity) AS total_count FROM cart WHERE user = '$userId'");
        if ($result->num_rows > 0) {
            return $result->fetch_assoc()['total_count'];
        }
        return 0;
    }

}


