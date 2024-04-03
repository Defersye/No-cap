<?php

namespace controllers;

class AuthorizationController
{
   public function register()
   {
      $registerModel = new \models\AuthorizationModel;
      $registerView = new \views\RegisterView();
      // $RegisterModel->register($_POST['register_name'], $_POST['register_email'], $_POST['register_password'], $_FILES['register_photo']);
      // $user = $RegisterModel->getUser($_POST['register_email']);
   }
}
