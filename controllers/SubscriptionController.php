<?php

namespace controllers;

class SubscriptionController
{
   public function index()
   {
      $subscriptionModel = new \models\SubscriptionModel();
      $result = $subscriptionModel->subscribe($_POST['email']);
      header('Content-Type: application/json');
      echo json_encode($result);
      exit;
   }
}
