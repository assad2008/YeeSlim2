<?php

/**
 * @Filename: index.php
 * @Author: assad
 * @Date:   2017-08-16 09:31:17
 * @Synopsis: 入口文件
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-16 09:38:22
 * @Email: rlk002@gmail.com
 */

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__DIR__)) . DS);
define("VENDORDIR", ROOT . "vendor" . DS);
define("YEESLIM", ROOT . "yeeslim" . DS);
define("ROUTERDIR", YEESLIM . "routers" . DS);
require VENDORDIR . 'autoload.php';
use Tracy\Debugger;
Debugger::enable(Debugger::DEVELOPMENT);
Debugger::$showBar = false;
$config = require YEESLIM . 'config.php';
require YEESLIM . 'bootstrap.php';
foreach (glob(ROUTERDIR . '*.php') as $router) {
    require_once $router;
}
$app->run();
