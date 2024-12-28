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
   function register($name, $login, $email, $password, $avatar)
   {
      $user = $this->getUser($email);
      if ($user != "") {
         return 'This email is already in use!';
      } else {
         $md5_password = md5($password);

         // Handle avatar upload
         $avatar_path = '';
         if (isset($avatar['name'])) {;
            $avatar_name = $avatar['name'];
            $avatar_path = 'assets/img/database/avatars/' . $avatar_name;

            if (!move_uploaded_file($avatar['tmp_name'], $avatar_path)) {
               return 'Error uploading avatar!';
            }
         } else {
            $avatar_name = 'default_avatar.png';
         }

         $this->conn->query("INSERT INTO users (full_name, login, email, password, avatar) VALUES ('$name', '$login', '$email', '$md5_password', '$avatar_name')");
         $this->conn->query("INSERT IGNORE INTO subscription (email) VALUES ('$email')");

         return 'Registration completed successfully!';
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
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['user_login'] = $user['login'];
            return 'Okay!';
         } else {
            return 'Incorrect password!';
         }
      } else {
         return 'Incorrect email or password!';
      }
   }
}
