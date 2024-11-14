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
      $answers = "";
      $query = $this->conn->query("SELECT * FROM users WHERE email='$email'");
      while ($row = $query->fetch_assoc()) {
         if (gettype($row) == 'object') {
            foreach ($row as $key => $value) {
               $answers[$key] = $value;
            }
         } else {
            $answers = $row;
         }
      }
      return $answers;
   }
   function register($name, $login, $email, $password)/*, $avatar*/
   {
      $user = $this->getUser($email);
      if ($user != "") {
         return 'Данная почта уже используется!';
      } else {
         $md5_password = md5($password);
         $this->conn->query("INSERT INTO users (full_name, login, email, password) VALUES ('$name', '$login', '$email', '$md5_password')");/*(avatar), '$avatar'*/

         return 'Регистрация прошла успешно!';
      }
   }

   function login($email, $password)
   {
      $user = $this->getUser($email);
      if ($user != "") {
         $md5_password = md5($password);
         if ($user['password'] == $md5_password) {
            $this->conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$md5_password'");

            $user = $this->getUser($email);
            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['user_login'] = $user['login'];
            return 'Okay!';
         } else {
            return 'Неверный пароль!';
         }
      } else {
         return 'Неверная почта или пароль!';
      }
   }
}
