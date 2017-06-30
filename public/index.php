<?php

/*
入口文件
 */

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__DIR__)) . DS);
define("VENDORDIR", ROOT . "vendor" . DS);
define("YEESLIM", ROOT . "yeeslim" . DS);
define("ROUTERDIR", YEESLIM . "routers" . DS);
require VENDORDIR . 'autoload.php';
use Tracy\Debugger;
Debugger::enable(Debugger::DEVELOPMENT);
Debugger::$showBar = False;
$config = require YEESLIM . 'config.php';
require YEESLIM . 'bootstrap.php';
foreach (glob(ROUTERDIR . '*.php') as $router) {
	require_once $router;
}
$app->run();