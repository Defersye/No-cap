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
      $pagesModel = new \models\PagesModel();
      $delivery = $pagesModel->delivery();
      $DeliveryView = new \views\DeliveryView($delivery);
   }

   public function return()
   {
      $pagesModel = new \models\PagesModel();
      $return = $pagesModel->return();
      $ReturnView = new \views\ReturnView($return);
   }

   public function terms_conditions()
   {
      $pagesModel = new \models\PagesModel();
      $terms_conditions = $pagesModel->terms_conditions();
      $TermsConditionsView = new \views\TermsConditionsView($terms_conditions);
   }

   public function privacy_policy()
   {
      $pagesModel = new \models\PagesModel();
      $privacy_policy = $pagesModel->privacy_policy();
      $PrivacyPolicyView = new \views\PrivacyPolicyView($privacy_policy);
   }
}
