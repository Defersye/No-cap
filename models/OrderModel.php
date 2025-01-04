<?php

namespace models;

class OrderModel
{
   public $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }

   public function GetData()
   {
      $query = mysqli_query($this->conn, "SELECT * FROM users WHERE id_user = " . $_SESSION['id_user']);
      $userData = $query->fetch_assoc();

      $query = mysqli_query($this->conn, "SELECT *, (price - discount) * quantity as sum FROM cart, products WHERE id_product = product_id AND user_id = " . $_SESSION['id_user']);
      while ($row = $query->fetch_assoc()) {
         $cart[] = $row;
      }

      $data = [$userData, $cart];
      return $data;
   }

   public function orderSend()
   {
      $query = mysqli_query($this->conn, "SELECT * FROM orders");
      return $query;
   }
}
