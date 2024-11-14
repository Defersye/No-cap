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
      $query = mysqli_query($this->conn, "SELECT * FROM cart WHERE user_id = $id_user and product_id = $product_id");
      if ($query->num_rows) {
         $query = mysqli_query($this->conn, "UPDATE cart SET quantity = quantity + 1 WHERE user_id = $id_user and product_id = $product_id");
      } else {
         $query = mysqli_query($this->conn, "INSERT INTO cart (user_id, product_id, quantity) VALUES ($id_user, $product_id, 1)");
      }
   }
   function checkProductQuantity()
   {
      $id_user = $_SESSION['id_user'];
      $quantityChecker = 0;
      $query = mysqli_query($this->conn, "SELECT id_cart FROM cart WHERE user_id = $id_user");
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answers[] = $row;
            $quantityChecker += 1;
         }
      }
      return $quantityChecker;
   }
}
