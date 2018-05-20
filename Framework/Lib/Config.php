<?php

namespace Framework\Lib;

class Config
{
	static public $conf = [];

	public function __construct()
	{
		
	}

	static public function get($name , $filename = '')
	{
		if($filename === '')
		{
			$filename = 'app';
		}

		$file = CONFIG_PATH . '/' . $filename . '.php';

		if(isset(self::$conf[$file]))
		{
			return self::$conf[$file][$name];
		}

		if(is_file($file))
		{
			$config = include $file;

			if(isset($config[$name])){

				self::$conf[$file] = $config;

				return $config[$name];

			} else {
				throw new \Exception("Error Processing Request", $name);
			}
		} else {
				throw new \Exception("Error Processing Request", $filename);
		}
	}

	static public function all($filename)
	{
		if($filename === '')
		{
			$filename = 'app';
		}

		$file = CONFIG_PATH . '/' . $filename . '.php';

		if(isset(self::$conf[$file]))
		{
			return self::$conf[$file][$name];
		}

		if(is_file($file))
		{
			$config = include $file;

			self::$conf[$file] = $config;

			return $config;

		} else {
				throw new \Exception("Error Processing Request", $filename);
		}
	}
}