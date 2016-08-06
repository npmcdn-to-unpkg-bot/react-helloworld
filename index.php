<?php

session_start();
error_reporting(0);
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

$base_url = getCurrentUri();
$routes = array();

$routes = explode('/', $base_url);
$_SESSION['routes'] = $routes;

switch($_SESSION['routes'])
{
  case 'hello':
  {
    echo 'hello!';
    break;
  }
  default:
  {
    require_once('./test.php');
    die();
    break;
  }
}

function getCurrentUri()
{
  $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
  $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
  if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
  $uri = '/' . trim($uri, '/');
  return $uri;
}


?>
