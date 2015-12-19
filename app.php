<?php
require 'vendor/autoload.php';

/*
 * A simple Slim based sample application
 *
 * For more examples please see Slim documentation:
 * http://www.slimframework.com/docs/
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// compute a random integer between min and max
$app->post('/randomInt', function (Request $request, Response $response) {
    // parse min and max from request body
    $body = $request->getBody();
    $json = json_decode($body, true);
    // or simply
    // $json = $request->getParsedBody();

    $val    = rand($json["min"], $json["max"]);
    $result = array(
        "value"       => $val,
        "currentTime" => date(DATE_ATOM),
    );
    
    // PSR-7 response is immutable
    $newResponse = $response->withHeader("Content-Type", "application/json");
    $newResponse->getBody()->write(json_encode($result));
    return $newResponse;
});

$app->run();

