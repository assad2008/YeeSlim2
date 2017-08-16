<?php

/**
 * @Filename: bootstrap.php
 * @Author: assad
 * @Date:   2017-08-16 09:34:52
 * @Synopsis: 核心启动文件
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-16 09:41:58
 * @Email: <Yee> rlk002@gmail.com
 */

date_default_timezone_set('Asia/Shanghai');

$app = new \Slim\App($config);
$container = $app->getContainer();

/**
 * 初始化数据库
 */
$db = new \Illuminate\Database\Capsule\Manager;
$db->addConnection($container->get('settings')['db']);
$db->bootEloquent();
$db->setAsGlobal();

/**
 * 初始化缓存
 */
$cache = new \Doctrine\Common\Cache\FilesystemCache($container->get('settings')['cache']['path'], $container->get('settings')['cache']['ext']);
Zend_Registry::set("cache", $cache);

/**
 * 注入配置信息
 */
$container['config'] = function ($c) {
    return $c->get('settings');
};

/**
 * 注入缓存
 */
$container['cache'] = function ($c) use ($cache) {
    return $cache;
};

/**
 * 加载IP中间件
 */
$app->add(new RKA\Middleware\IpAddress());

/**
 * 注入日志功能
 */
$container['log'] = function ($c) {
    $logger = new Monolog\Logger($c->get('settings')['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($c->get('settings')['logger']['path'],
        Monolog\Logger::DEBUG));
    return $logger;
};

/**
 * 加载视图
 */
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

/**
 * 404
 */
$container['notFoundHandler'] = function ($c) {
    exit("404");
};
