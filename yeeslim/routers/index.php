<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->get("/", function (Request $request, Response $response, $args) use ($app) {
	return $this->view->render($response, "index.html", ["text" => "你好"]);
});