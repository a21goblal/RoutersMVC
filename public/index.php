<?php
require_once '../vendor/autoload.php';
require('../app/Config/config.php');
// use App\Core\Router;
require('../app/Controllers/IndexController.php');
use App\Controllers\IndexController;
use App\Core\Router;

$router = new Router();

// Routes
$router->add(array(
    'name'=>'home',
    'path'=>'/^\/index.php$/',
    'action'=>[IndexController::class, 'IndexAction']
));

$router->add(array(
    'name'=>'saludo',
    'path'=>'/\/saludo\/\w+$/',
    'action'=>[IndexController::class, 'SaludoAction']
));

$router->add(array(
    'name'=>'numeros',
    'path'=>'/\/numeros$/',
    'action'=>[IndexController::class, 'NumerosAction']
));

$router->add(array(
    'name'=>'numeros',
    'path'=>'/\/numeros\/\d+$/',
    'action'=>[IndexController::class, 'NumerosAction1']
));

$request=str_replace(DIRPUBLIC,'',$_SERVER['REQUEST_URI']);
$route = $router->match($request);

if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}