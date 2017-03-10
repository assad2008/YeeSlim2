<?php
/**
 * @file bootstrap.php
 * @synopsis  核心文件
 * @author Yee, <rlk002@gmail.com>
 * @version 1.0
 * @date 2017-03-10 16:14:32
 */
date_default_timezone_set('Asia/Shanghai');

$app = new \Slim\App($config);
$container = $app->getContainer();

$db = new \Illuminate\Database\Capsule\Manager;
$db->addConnection($container->get('settings')['db']);
$db->bootEloquent();
$db->setAsGlobal();

$cache = new \Doctrine\Common\Cache\FilesystemCache($container->get('settings')['cache']['path'], $container->get('settings')['cache']['ext']);
Zend_Registry::set("cache", $cache);

$container['config'] = function ($c) {
	return $c->get('settings');
};

$container['cache'] = function ($c) use ($cache) {
	return $cache;
};
$app->add(new RKA\Middleware\IpAddress());

$container['log'] = function ($c) {
	$logger = new Monolog\Logger($c->get('settings')['logger']['name']);
	$logger->pushProcessor(new Monolog\Processor\UidProcessor());
	$logger->pushHandler(new Monolog\Handler\StreamHandler($c->get('settings')['logger']['path'],
		Monolog\Logger::DEBUG));
	return $logger;
};

$container['view'] = function ($c) {
	$view = new \Slim\Views\Twig($c->get("settings")["templates"]["template_dir"],
		[
			'cache' => $c->get("settings")["templates"]["cache_dir"],
			'auto_reload' => true,
			'charset' => 'utf-8',
		]);
	$basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
	$view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));
	return $view;
};

$container['notFoundHandler'] = function ($c) {
	exit("404");
};