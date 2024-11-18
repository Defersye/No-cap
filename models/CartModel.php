<?php

namespace models;

class CartModel
{
   public $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   public function getCartProducts()
   {
      $query = mysqli_query($this->conn, "SELECT *, (price - discount) * quantity as sum FROM cart, products, collections WHERE id_product = product_id AND collection_id = id_collection AND user_id = " . $_SESSION['id_user']);
      $answers = [];
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answers[] = $row;
         }
      }
      return $answers;
   }
   function addToCart($product_id)
   {
      $id_user = $_SESSION['id_user'];
      $query = mysqli_query($this->conn, "SELECT * FROM cart WHERE user_id = $id_user AND product_id = $product_id");
      if ($query->num_rows) {
         $query = mysqli_query($this->conn, "UPDATE cart SET quantity = quantity + 1 WHERE user_id = $id_user AND product_id = $product_id");
      } else {
         $query = mysqli_query($this->conn, "INSERT INTO cart (user_id, product_id, quantity) VALUES ($id_user, $product_id, 1)");
      }
   }
   function checkProductQuantity()
   {
      $id_user = $_SESSION['id_user'];
      $query = mysqli_query($this->conn, "SELECT id_cart FROM cart WHERE user_id = $id_user");
      return $query->num_rows;
   }
   function changeQuantity($action, $id_cart)
   {
      if ($action == 'increment') {
         $this->conn->query("UPDATE cart SET quantity = quantity + 1 WHERE id_cart = $id_cart");
         $count = $this->checkQuantity($id_cart);
         if ($count > 99) {
            $this->conn->query("UPDATE cart SET quantity = 99 WHERE id_cart = $id_cart");
         }
      } elseif ($action == 'decrement') {
         $this->conn->query("UPDATE cart SET quantity = quantity - 1 WHERE id_cart = $id_cart");
         $count = $this->checkQuantity($id_cart);
         if ($count == 0) {
            $this->conn->query("DELETE FROM cart WHERE id_cart = $id_cart");
         }
      } else {
         $this->conn->query("UPDATE cart SET quantity = $action WHERE id_cart = $id_cart");
         $count = $this->checkQuantity($id_cart);
         if ($count == 0) {
            $this->conn->query("DELETE FROM cart WHERE id_cart = $id_cart");
         }
      }

      return $this->checkQuantity($id_cart);
   }
   function checkQuantity($id_cart)
   {
      $query = $this->conn->query("SELECT quantity FROM cart WHERE id_cart = $id_cart");
      return $query->fetch_array()[0];
   }
}
