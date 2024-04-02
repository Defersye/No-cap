<?php

namespace controllers;

class CatalogController
{
   public function index()
   {
      $catalogModel = new \models\CatalogModel();
      $products = $catalogModel->getProducts();
      $categories = $catalogModel->getCategory();
      $collections = $catalogModel->getCollection();
      $catalogView = new \views\CatalogView($products, $categories, $collections);
   }
}
