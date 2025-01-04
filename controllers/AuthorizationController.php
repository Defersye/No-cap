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
      $avatar = isset($_FILES['avatar']) ? $_FILES['avatar'] : "default";
      $registerProducts = $registerModel->register($_POST['name'], $_POST['login'], $_POST['email'], $_POST['password'], $avatar);
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
      $data = json_decode(file_get_contents(__DIR__ . "/../templates/data.json"), true);
      if ($_POST['email'] == $data['Admin_login'] && $_POST['password'] == $data['Admin_password']) {
         echo '<a href="/templates/admin/admin_index.php">Click to go to admin panel</a>';
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
      header('Location: /login');
   }
}
