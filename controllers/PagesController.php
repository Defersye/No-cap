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
      $orderCheckModel = new \models\PagesModel();
      $orderCheck = $orderCheckModel->orderCheck();
      $orderCheckView = new \views\OrderCheckView($orderCheck);
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
