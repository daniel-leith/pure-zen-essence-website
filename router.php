<?php

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
  "/" => "controllers/index.php",
  "/signup" => "controllers/signup.php",
  "/login" => "controllers/login.php",
  "/add-product" => "controllers/add-product.php",
];

function routeToController($url, $routes)
{
  if (array_key_exists($url, $routes)) {
    require $routes[$url];
  } else {
    abort(404);
  }
}

function abort($code = 404)
{
  http_response_code($code);

  require "controllers/{$code}.php";

  die();
}

routeToController($url, $routes);
