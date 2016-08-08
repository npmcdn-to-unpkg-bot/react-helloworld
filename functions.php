<?php

function getCurrentUri()
{
  $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
  $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
  if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
  $uri = '/' . trim($uri, '/');
  return $uri;
}

function redirect($url, $statusCode = 302)
{
    $path = BASEPATH;
    header('Location:'.BASEPATH.$url, true, $statusCode);
    require_once('.index.php');
    die();
}


?>
