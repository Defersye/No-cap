<?php

namespace models;

class SubscriptionModel
{
   public $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   public function subscribe($email)
   {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         return ['success' => false, 'message' => 'Invalid email format'];
      }

      $email = mysqli_real_escape_string($this->conn, $email);
      $query = $this->conn->query("INSERT IGNORE INTO subscription (email) VALUES ('$email')");

      if ($this->conn->affected_rows > 0) {
         return ['success' => true, 'message' => 'Successfully subscribed!'];
      } else {
         return ['success' => false, 'message' => 'Email already subscribed'];
      }
   }
}
