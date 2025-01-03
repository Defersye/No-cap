<?php

namespace routes;

class Router
{

   function __construct()
   {
      // pages
      $this->addRoute('home', 'HomeController@index');
      $this->addRoute('catalog', 'CatalogController@index');
      $this->addRoute('productCard', 'ProductCardController@index');
      $this->addRoute('account', 'AccountController@index');
      $this->addRoute('admin', 'AdminController@index');

      // authorization
      $this->addRoute('register', 'AuthorizationController@renderRegister');
      $this->addRoute('checkRegister', 'AuthorizationController@register');
      $this->addRoute('login', 'AuthorizationController@renderLogin');
      $this->addRoute('checkLogin', 'AuthorizationController@login');
      $this->addRoute('logout', 'AuthorizationController@logout');

      // filters
      $this->addRoute('search', 'ajax\SearchController@searchProducts');
      $this->addRoute('clearSearch', 'ajax\SearchController@clearSearch');
      $this->addRoute('filter', 'ajax\FilterController@filterProducts');
      $this->addRoute('clearFilter', 'ajax\FilterController@clearFilter');

      // cart
      $this->addRoute('cart', 'CartController@index');
      $this->addRoute('addToCart', 'CartController@addToCart');
      $this->addRoute('refreshQuantity', 'CartController@refreshQuantity');
      $this->addRoute('changeQuantity', 'CartController@changeQuantity');

      // pages
      $this->addRoute('contacts', 'PagesController@contacts');
      $this->addRoute('contactsSend', 'PagesController@contactsSend');
      $this->addRoute('delivery', 'PagesController@delivery');
      $this->addRoute('order', 'PagesController@order');
      $this->addRoute('return', 'PagesController@return');
      $this->addRoute('terms_conditions', 'PagesController@terms_conditions');
      $this->addRoute('privacy_policy', 'PagesController@privacy_policy');

      // subscribtion
      $this->addRoute('subscribe', 'SubscriptionController@index');
   }

   private $routes = [];
   public function addRoute($route, $handler)
   {
      $this->routes[$route] = $handler;
   }
   public function handle($route)
   {
      // Проверка, существует ли маршрут в списке
      if (isset($this->routes[$route])) {
         // Вызов обработчика для данного маршрута
         $handler = $this->routes[$route];
         $this->callHandler($handler);
      } else {
         header("HTTP/1.0 404 Not Found");
         header('Location: /404.html');
      }
   }
   private function callHandler($handler)
   {
      // Предполагаем, что обработчик представляет собой строку с именем контроллера и метода
      list($controller, $method) = explode('@', $handler);

      // Создание объекта контроллера
      $className = "\\controllers\\{$controller}";
      $controllerObject = new $className;

      // Вызов метода контроллера
      $controllerObject->$method();
   }
}
