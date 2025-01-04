<?php

namespace controllers;

class HomeController
{
   public function index()
   {
      $homeModel = new \models\HomeModel();
      $products = $homeModel->getProducts();
      $collections = $homeModel->getCollection();
      $homeView = new \views\HomeView($products, $collections);
   }
}
