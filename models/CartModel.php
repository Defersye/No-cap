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
      // users?
      $query = mysqli_query($this->conn, "SELECT `name`, `price`, `first_img`,  `name_collection` FROM products, collections WHERE collection_id = id_collection");
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answers[] = $row;
         }
      }
      return $answers;
   }
}
