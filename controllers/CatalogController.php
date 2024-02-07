<?php

namespace controllers;

class CatalogController
{
   public function index()
   {
      $catalogModel = new \models\CatalogModel();
      $products = $catalogModel->getProducts();
      $catalogView = new \views\CatalogView($products);
   }
}
