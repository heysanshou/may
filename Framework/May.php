<?php

namespace Framework;

class May
{
	public static $classes = [];

	static public function run()
	{
		$route = new Lib\Route();
		$controller = $route->controller;
		$action = $route->action;
		$action = 'action' . $action;

		$controller_class_str = 'App\\Controllers\\' . $controller . 'Controller';

		$ctrl = new $controller_class_str();
		$ctrl->$action();
	}

	static public function autoload($classname)
	{
		$classname = str_replace('\\', '/', $classname);

		if(isset($classes[$classname])){
			return true;
		}

		$file = ROOT_PATH . '/' . $classname . '.php';

		if(is_file($file)){
			include $file;
			self::$classes[$classname] = $classname;
		}else{
			return false;
		}
	}
}