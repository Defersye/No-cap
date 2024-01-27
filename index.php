<?php

use routes\Router;

define('PATH_SITE', $_SERVER['DOCUMENT_ROOT']);

require_once PATH_SITE . '/config/autoload.php';

// Инициализация роутера
$router = new Router;

// Определение текущего маршрута
$route = isset($_GET['route']) ? $_GET['route'] : 'home';
$router->handle($route);
