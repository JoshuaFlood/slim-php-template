<?php
namespace App\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;

class HomeController
{
  protected $renderer;

  public function __construct($renderer)
  {
    $this->renderer = $renderer;
  }

  public function view(Request $request, Response $response, array $args)
  {
    return $this->renderer->render($response, 'index.phtml', $args);
  }
}
