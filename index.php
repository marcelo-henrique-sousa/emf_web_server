<?php
  require './router.php'; //as Router;

  //get REQUESTS data
  //$requestData = $_SERVER;
  // permit only this data...
  $requestData = [ 'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'], 'REQUEST_TIME' => $_SERVER['REQUEST_TIME'], 'REQUEST_PARAMS' => $_GET ];

  //var_dump($requestData);
  
  //initialize router
  $router = new Router();

  //call router function
  $router->requestRouter( $requestData );

?>