<?php

namespace controllers;

class AccountController
{
   public function index()
   {
      $accountModel = new \models\AccountModel();
      $accountUser = $accountModel->getFullUser();
      $accountView = new \views\AccountView($accountUser);
   }
}
