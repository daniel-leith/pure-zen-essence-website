<?php

$url = $_SERVER["REQUEST_URI"];

switch ($url) {
  case "/":
    require "controllers/index.php";
    break;
  case "/login":
    require "controllers/login.php";
    break;
  case "/signup":
    require "controllers/signup.php";
    break;
  default:
    require "controllers/404.php";
}
