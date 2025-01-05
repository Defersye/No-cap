<?php

namespace models;

class AccountModel
{
   public $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   public function getFullUser()
   {
      $query = mysqli_query($this->conn, "SELECT * FROM users WHERE id_user =" . $_SESSION['id_user']);
      $user = $query->fetch_assoc();
      return $user;
   }
   public function getOrders()
   {
      $query = mysqli_query($this->conn, "SELECT * FROM orders, products WHERE product_id = id_product AND user_id =" . $_SESSION['id_user']);
      if ($query->num_rows) {
         $hash = [];
         while ($row = $query->fetch_assoc()) {
            $answers[$row['order_hash_id']]['order_hash_id'] = $row['order_hash_id'];
            $answers[$row['order_hash_id']]['status'] = $row['status'];
            $answers[$row['order_hash_id']]['date_order'] = $row['date_order'];
            $answers[$row['order_hash_id']]['post_service'] = $row['post_service'];
            $answers[$row['order_hash_id']]['payment_method'] = $row['payment_method'];
            $answers[$row['order_hash_id']][] = $row;
         }
      } else {
         return "No";
      }
      return $answers;
   }
}
