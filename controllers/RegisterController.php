<?php

namespace controllers;

class RegisterController
{
   public function index()
   {
      $RegisterModel = new \models\RegisterModel;
      $user = $RegisterModel->getUser($_POST['register_email']);

      if ($user == 0) {
         echo json_encode(1);
      } else {
         echo json_encode(0);
      }
   }
}
