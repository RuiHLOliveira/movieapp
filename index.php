<?php

require './vendor/autoload.php';

use MovieApp\Core\Router;

$router = new Router();

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$data = $router->match($method,$uri);

$controller = new $data['controller'];


$response = call_user_func([$controller,$data['action']]);

echo $response;
