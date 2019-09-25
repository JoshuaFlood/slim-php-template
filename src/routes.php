
<?php

use Slim\Psr7\Request;
use Slim\Psr7\Response;

$app->get('/', 'HomeController:view');

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
  return $this->get('renderer')->render($response, "hello.phtml", $args);
});

// Route for updating current time
$app->get('/time', function (Request $request, Response $response) {
  // TODO:
  // Add functionality for returning the current date,
  // in addition to the current time.
  $payload = json_encode(array(
    'time' => date('H:i:s')
  ));
  $response->getBody()
           ->write($payload);
  return $response->withHeader('Content-Type', 'application/json');
});
// Route for updating current time
$app->get('/date', function (Request $request, Response $response) {
  // TODO:
  // Add functionality for returning the current date,
  // in addition to the current time.
  $payload = json_encode(array(
    'date' => date('d/m/Y')
  ));
  $response->getBody()
           ->write($payload);
  return $response->withHeader('Content-Type', 'application/json');
});

