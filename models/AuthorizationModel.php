<?php

namespace models;

class AuthorizationModel
{
   protected $conn;
   function __construct()
   {
      $this->conn = \config\DBConnect::getInstance()->getConnect();
   }
   function getUser($email)
   {
      $query = $this->conn->query("SELECT * FROM users WHERE email='$email'");
      if ($query->num_rows) {
         while ($row = $query->fetch_assoc()) {
            $answers[] = $row;
         }
      }
      return $answers;
   }
   function register($name, $email, $password, $confirm)
   {
      if ($password == $confirm) {
         $hash_password = password_hash($password, PASSWORD_DEFAULT);

         $query = $this->conn->query("INSERT INTO users (full_name , email, password, avatar) VALUES ('$name', '$email', '$hash_password', '1.png')");

         $user = $this->getUser($email);
         $_SESSION['auth'] = $user['id'];
      } else {
         return "Wrong confirm password!";
      }
   }
}
