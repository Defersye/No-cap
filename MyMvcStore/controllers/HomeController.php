<?php
namespace controllers;
class HomeController {
     public function index() {
         $homeModel= new \models\HomeModel();
         $products = $homeModel->getProducts();
         $filters = $homeModel->getGenre();
         $homeView= new \views\HomeView($products);

     }
}