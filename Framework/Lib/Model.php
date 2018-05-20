<?php

namespace Framework\Lib;
use Framework\Lib\Config;

class Model extends \PDO
{
	function __construct()
	{
		$config = Config::all('database');

		try{
			parent::__construct($config['dsn'],$config['username'],$config['password']);
		} catch (\PDOException $e) {
			dd($e->getMessage());
		}
	}
}
