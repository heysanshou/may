<?php

define('ROOT_PATH',realpath('../'));
define('FRAMEWORK_PATH', ROOT_PATH . '/Framework');
define('APP_PATH', ROOT_PATH . '/App');
define('CONFIG_PATH', ROOT_PATH . '/Config');

define('DEBUG',true);

if(DEBUG){
	ini_set('display_error','on');
}else{
	ini_set('display_error','off');
}

require FRAMEWORK_PATH . '/Common/functions.php';

require FRAMEWORK_PATH . '/May.php';

spl_autoload_register('Framework\May::autoload');

\Framework\May::run();

