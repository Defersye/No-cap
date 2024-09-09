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
      $query = mysqli_query($this->conn, "SELECT *, (price-discount)*quantity as sum FROM cart, products, collections WHERE id_product = product_id AND collection_id = id_collection AND user_id = " . $_SESSION['user_id']);
      $answers = [];
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answers[] = $row;
         }
      }
      return $answers;
   }
}
