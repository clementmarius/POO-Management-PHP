<?php
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/Router/Router.php';
require_once __DIR__ . '/Controllers/HomeController.php';
require_once __DIR__ . '/controllers/PostController.php';


use App\Management\Router\Router\Router;

$router = new Router();

//Definir les routes

//User :
$router->get(path: '/register', controllerMethod: 'App\Management\Controllers\UserController@register');
$router->post(path: '/register', controllerMethod: 'App\Management\Controllers\UserController@register');
$router->get(path:'/user', controllerMethod:'App\Management\Controllers\UserController@displayUser');
$router->get(path:'/update_user',controllerMethod:'App\Management\Controllers\UserController@showUserForm');
$router->post(path:'/user', controllerMethod:'App\Management\Controllers\UserController@updateCurrentUser');
$router->post(path:'/', controllerMethod:'App\Management\Controllers\UserController@deleteCurrentUser');

//Auth :
$router->get(path: '/login', controllerMethod: 'App\Management\Controllers\AuthController@showLoginForm');
$router->post(path: '/login', controllerMethod: 'App\Management\Controllers\AuthController@login');

//Home
$router->get(path: '/', controllerMethod: 'App\Management\Controllers\HomeController@home');

//Post
$router->get(path: '/view_posts', controllerMethod: 'App\Management\Controllers\PostController@viewPost');
// Dispatcher la requete 

$uri = trim(str_replace(['/PhpPoo/ManagementPHP', '.php'], '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/');

/* var_dump($uri);
 */$requestMethod = $_SERVER['REQUEST_METHOD'];
$router->dispatch(uri: '/' . $uri, requestMethod: $requestMethod);
