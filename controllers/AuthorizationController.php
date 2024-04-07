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
      /*, $_POST['register_avatar']*/
      $registerProducts = $registerModel->register($_POST['name'], $_POST['login'], $_POST['email'], $_POST['password']);
      echo $registerProducts;
   }

   public function renderLogin()
   {
      $loginView = new \views\LoginView();
   }

   public function login()
   {
      $loginModel = new \models\AuthorizationModel();
      $loginProducts = $loginModel->login($_POST['email'], $_POST['password']);
      echo $loginProducts;
   }
   function logout()
   {
      unset($_SESSION['user']);
      header('Location: /home');
   }
}
