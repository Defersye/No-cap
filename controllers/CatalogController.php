<?php

namespace controllers;

class CatalogController
{
   public function index()
   {
      $catalogModule = new \models\CatalogModel();
      $catalogView = new \views\CatalogView();
   }
}
