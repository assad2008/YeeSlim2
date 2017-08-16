<?php

/**
 * @Filename: index.php
 * @Author: assad
 * @Date:   2017-08-16 09:42:38
 * @Synopsis: 首页
 * @Version: 1.0
 * @Last Modified by:   assad
 * @Last Modified time: 2017-08-16 09:52:32
 * @Email: rlk002@gmail.com
 */

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->get("/", function (Request $request, Response $response, $args) use ($app) {
    return $this->view->render($response, "index.html", ["text" => "你好"]);
});
