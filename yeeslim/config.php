<?php

/**
 * @Filename: config.php
 * @Author: assad
 * @Date:   2017-08-16 09:42:07
 * @Synopsis: 配置文件
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-16 09:42:25
 * @Email: rlk002@gmail.com
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
