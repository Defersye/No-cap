<?php

namespace controllers;

class AuthorizationController
{
   public function renderRegister()
   {
      $registerView = new \views\RegisterView();
   }

   public function register()
   {
      $registerModel = new \models\AuthorizationModel();
      $registerProducts = $registerModel->register($_POST['name'], $_POST['login'], $_POST['email'], $_POST['password'], $_FILES['avatar']);
      echo $registerProducts;
   }

   public function renderLogin()
   {
      if (isset($_SESSION['user_login'])) {
         header('Location: /account');
      } else {
         $loginView = new \views\LoginView();
      }
   }

   public function login()
   {
      if ($_POST['email'] == "admin" && $_POST['password'] == "admin") {
         echo '<a href="/templates/admin/index.php">To admin panel</a>';
      } else {
         $loginModel = new \models\AuthorizationModel();
         $loginProducts = $loginModel->login($_POST['email'], $_POST['password']);
         echo $loginProducts;
      }
   }
   function logout()
   {
      unset($_SESSION['user_id']);
      unset($_SESSION['user_login']);
      header('Location: /home');
   }
}
