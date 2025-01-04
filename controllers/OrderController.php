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
      $checkOutModel = new \models\OrderModel();
      $hash = $checkOutModel->orderSend($_POST['country'], $_POST['postal_code'], $_POST['adress_1st_line'], $_POST['adress_2nd_line'], $_POST['post_service'], $_POST['payment_method']);
      $OrderInfoView = new \views\OrderInfoView($hash);
   }
}
