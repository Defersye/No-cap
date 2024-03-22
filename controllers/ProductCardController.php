<?php

namespace controllers;

class ProductCardController
{
   function index()
   {
      $productCardModel = new \models\ProductCardModel();
      $product = $productCardModel->getProduct($_GET['id_product']);
      $productCardView = new \views\ProductCardView($product);
   }
}
