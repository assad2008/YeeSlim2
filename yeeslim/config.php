<?php
/**
 * @file settings.php
 * @synopsis  配置文件
 * @author Yee, <rlk002@gmail.com>
 * @version 1.0
 * @date 2016-05-09 11:51:24
 */

return [
	'settings' =>
	[
		'displayErrorDetails' => true,
		'addContentLengthHeader' => false,
		'logger' => [
			'name' => 'yeeslim',
			'path' => ROOT . 'data/logs' . DS . date("Y-m-d") . '_app.log',
		],
		'cache' => [
			'path' => ROOT . 'data/cache',
			'ext' => '.cache',
		],
		'db' => [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'newyeeslim',
			'username' => 'newyeeslim',
			'password' => 'newyeeslim',
			'charset' => 'utf8',
			'collation' => 'utf8_general_ci',
			'prefix' => '',
		],
		'templates' => [
			'cache_dir' => YEESLIM . 'views' . DS . 'cache',
			'template_dir' => YEESLIM . 'views' . DS . 'templates',
		],
	],
];
