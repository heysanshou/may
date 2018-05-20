<?php

namespace App\Cores;

class BaseController
{
	public $assign = [];

    public function __construct()
    {
    }

    public function assign($name , $value)
    {
    	$this->assign[$name] = $value;
    }

    public function display($file)
    {
    	$file = APP_PATH . '/Views/' . $file;

    	if(is_file($file)){
    		extract($this->assign);

    		include $file;
    	}
    }
}