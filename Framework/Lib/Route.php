<?php

namespace Framework\Lib;

class Route
{
	public $controller;

	public $action;

	function __construct()
	{
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
			$uri = $_SERVER['REQUEST_URI'];
			$uri = substr($uri,1);

			if(strpos($uri,'?')>0){
				$uri = substr($uri,0,strpos($uri,'?'));
			}

			$path_arr = explode('/',$uri);
			
			$this->controller = $path_arr[0];
			unset($path_arr[0]);

			if(isset($path_arr[1])){
				$this->action = $path_arr[1];
				unset($path_arr[1]);
			}

			//pathinfo转换为get
			$count = count($path_arr) + 2;
			$i = 2;
			while($i < $count){
				if(isset($path_arr[$i+1])){
					$_GET[$path_arr[$i]] = $path_arr[$i+1];
				}
				$i += 2;
			}

		}else{
			$this->controller = 'Index';
			$this->action = 'Index';
		}
	}
}