<?php

define('ROOT_DIR', __DIR__.'/..');

require '../framework/Autoloader.php';

May\Framework\Autoloader::init();

$controllerName = isset($_GET['c']) ? $_GET['c'] : 'index';
$actionName = isset($_GET['a']) ? $_GET['a'] : 'index';

$ucController = ucfirst($controllerName);
$controllerName = 'controllers\\' . $ucController . 'Controller';
$controller = new $controllerName();

return call_user_func_array([$controller, 'action' . ucfirst($actionName)],[]);