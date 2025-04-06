<?php

require './src/Router.php';
require './src/Controller.php';
require './src/Controllers/HomeController.php';

use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

$router->dispatch();