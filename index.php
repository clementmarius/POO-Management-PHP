<?php

/* require_once '../ManagementPHP/controllers/UserController.php';
require_once '../ManagementPHP/Router/Router.php'; */

require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/Router/Router.php';


use App\Management\Router\Router\Router;

$router = new Router();

//Definir les routes
$router->get('/register', 'App\Management\Controllers\UserController@register');
$router->post('/register', 'App\Management\Controllers\UserController@register');
$router->get('/user/profile', 'App\Management\Controllers\UserController@showUserProfile');
$router->get('/user/(\d+)', 'App\Management\Controllers\UserController@findUserId');
$router->get('/test', function () {
    echo 'Test route works!';
});

// Dispatcher la requete 
/* $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 */
$uri = str_replace('/PhpPoo/ManagementPHP', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
var_dump($uri);
$requestMethod = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $requestMethod);
