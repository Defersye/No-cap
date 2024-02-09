<?php

namespace controllers;

class CartController
{
   public function index()
   {
      $cartModel = new \models\CartModel();
      $cartProducts = $cartModel->getCartProducts();
      $cartView = new \views\CartView($cartProducts);
   }
}
