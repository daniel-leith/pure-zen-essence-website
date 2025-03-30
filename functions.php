<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function urlIs($url)
// Returns true if the current URL matches the provided URL
{
  return $_SERVER['REQUEST_URI'] === $url;
}
