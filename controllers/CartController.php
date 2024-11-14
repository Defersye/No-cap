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

   public function addToCart()
   {
      $product_id = $_POST['product_id'];
      $cartModel = new \models\CartModel();
      $cartModel->addToCart($product_id);
   }

   function refreshQuantity()
   {
      $cartModel = new \models\CartModel();
      $countProducts = $cartModel->checkProductQuantity();
      $_SESSION['quantityChecker'] = $countProducts;
      echo $_SESSION['quantityChecker'];
   }

   public function changeQuantity() {}
}
