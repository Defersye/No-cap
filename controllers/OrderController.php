<?php

namespace controllers;

class OrderController
{
   public function checkOut()
   {
      $checkOutModel = new \models\OrderModel();
      $userData = $checkOutModel->getData();
      $HomeView = new \views\CheckOutView($userData);
   }
   public function orderSend()
   {
      // $HomeView = new \views\HomeView();
   }
}
