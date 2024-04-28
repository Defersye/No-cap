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
      $query = mysqli_query($this->conn, "SELECT * FROM users WHERE id_user =" . $_SESSION['user_id']);
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            foreach ($row as $key => $value) {
               $answers[$key] = $value;
            }
         }
      }
      return $answers;
   }
}
