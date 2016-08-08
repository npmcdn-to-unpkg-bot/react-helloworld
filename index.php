<?php
  session_start();
  error_reporting(0);
  require_once('./functions.php');
  require_once('./config.php');
  //error_reporting(E_ERROR | E_WARNING | E_PARSE);

  $base_url = getCurrentUri();
  $routes = explode('/', $base_url);
?>
<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>React Tutorial</title>
  <script src="https://npmcdn.com/react@15.3.0/dist/react.js"></script>
  <script src="https://npmcdn.com/react-dom@15.3.0/dist/react-dom.js"></script>
  <script src="https://npmcdn.com/babel-core@5.8.38/browser.min.js"></script>
  <script src="https://npmcdn.com/jquery@3.1.0/dist/jquery.min.js"></script>
  <script src="https://npmcdn.com/remarkable@1.6.2/dist/remarkable.min.js"></script>
</head>
<body>
<?php
  switch($routes[1])
  {
    case 'hello':
    {
      echo 'hello!';
      break;
    }
    default:
    {
      require_once('./test.php');
      //die();
      break;
    }
  }
?>
</body>
</html>
