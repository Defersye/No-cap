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

   public function orderSend($country, $postal_code, $adress_1st_line, $adress_2nd_line, $post_service, $payment_method)
   {
      $query = mysqli_query($this->conn, "UPDATE `users` SET `country`='$country',`postal_code`='$postal_code',`adress_1st_line`='$adress_1st_line',`adress_2nd_line`='$adress_2nd_line' WHERE id_user = " . $_SESSION['id_user']);

      $timestamp = date('Y-m-d H:i:s');
      $hash = hexdec(hash('adler32', $timestamp . $_SESSION['id_user']));
      $query = mysqli_query($this->conn, "SELECT * FROM `cart` WHERE user_id = " . $_SESSION['id_user']);
      while ($row = $query->fetch_assoc()) {
         $order = mysqli_query($this->conn, "INSERT INTO `orders`
         (`product_id`, `quantity`, `user_id`, `order_hash_id`, `status`, `date_order`, `post_service`, `payment_method`) VALUES 
         (" . $row['product_id'] . ", " . $row['quantity'] . ", " . $row['user_id'] . ", $hash, 'placed', '$timestamp', '$post_service', '$payment_method')");
      }

      $_POST = [];
      $query = mysqli_query($this->conn, "DELETE FROM `cart` WHERE user_id = " . $_SESSION['id_user']);
      return $hash;
   }
}
