<?php

use routes\Router;

define('PATH_SITE', $_SERVER['DOCUMENT_ROOT']);
require_once PATH_SITE . '/config/autoload.php';

$router = new Router;
$route = isset($_GET['route']) ? $_GET['route'] : 'home';
$router->handle($route);
