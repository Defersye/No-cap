<?php

namespace controllers;

class PagesController
{
   public function contacts()
   {
      $contactsView = new \views\ContactsView('No');
   }
   public function contactsSend()
   {
      $pagesModel = new \models\PagesModel();
      $message = $pagesModel->contactsSend($_POST["name"], $_POST["email"], $_POST["message"]);
      $contactsView = new \views\ContactsView($message);
   }

   public function delivery()
   {
      $deliveryView = new \views\DeliveryView();
   }

   public function orderCheck()
   {
      $hash = isset($_POST["order_hash_id"]) ? $_POST["order_hash_id"] : "No";
      $email = isset($_POST["email"]) ? $_POST["email"] : "No";

      $orderCheckModel = new \models\PagesModel();
      $orderData = $orderCheckModel->orderCheck($hash, $email);
      $orderCheckView = new \views\OrderCheckView($orderData);
   }

   public function return()
   {
      $returnView = new \views\ReturnView();
   }

   public function terms_conditions()
   {
      $termsConditionsView = new \views\TermsConditionsView();
   }

   public function privacy_policy()
   {
      $privacyPolicyView = new \views\PrivacyPolicyView();
   }
}
