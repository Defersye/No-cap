<?php

namespace models;

class RegisterModel
{
   protected $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   function getUser($email)
   {
      $query = $this->conn->query("select * from Customers where email='$email'");
      if ($query->num_rows > 0) {
         $id = $query->fetch_assoc();
         return $id;
      } else {
         return  0;
      }
   }
}
