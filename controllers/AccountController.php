<?php

namespace controllers;

class AccountController
{
   public function index()
   {
      $accountModel = new \models\AccountModel();
      $userData = $accountModel->getFullUser();
      $orders = $accountModel->getOrders();
      $accountView = new \views\AccountView($userData, $orders);
   }
}
