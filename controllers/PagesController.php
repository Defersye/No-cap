<?php

namespace controllers;

class PagesController
{
   public function contacts()
   {
      $ContactsView = new \views\ContactsView('No');
   }
   public function contactsSend()
   {
      $pagesModel = new \models\PagesModel();
      $message = $pagesModel->contactsSend($_POST["name"], $_POST["email"], $_POST["message"]);
      $ContactsView = new \views\ContactsView($message);
   }

   public function delivery()
   {
      $DeliveryView = new \views\DeliveryView();
   }

   public function order()
   {
      $pagesModel = new \models\PagesModel();
      $order = $pagesModel->order();
      // $OrderView = new \views\OrderView($order);
   }

   public function return()
   {
      $ReturnView = new \views\ReturnView();
   }

   public function terms_conditions()
   {
      $TermsConditionsView = new \views\TermsConditionsView();
   }

   public function privacy_policy()
   {
      $PrivacyPolicyView = new \views\PrivacyPolicyView();
   }
}
