<?php

namespace routes;

class Router
{

   function __construct()
   {
      $this->addRoute('home', 'HomeController@index');
      $this->addRoute('catalog', 'CatalogController@index');
      $this->addRoute('productCard', 'ProductCardController@index');
      $this->addRoute('cart', 'CartController@index');
      $this->addRoute('register', 'RegisterController@index');
      $this->addRoute('login', 'LoginController@index');

      // filters
      $this->addRoute('search', 'ajax\SearchController@searchProducts');
      $this->addRoute('clearSearch', 'ajax\SearchController@clearSearch');
      $this->addRoute('filter', 'ajax\FilterController@filterProducts');
      $this->addRoute('clearFilter', 'ajax\FilterController@clearFilter');
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
         echo "Страница не найдена!";
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
