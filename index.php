<?php

require 'bootstrap.php';

use Slim\Factory\AppFactory;
use App\Middleware\CorsMiddleware;
use App\Controllers\HeaderDataController;
use App\Controllers\SocialNetworksController;
use App\Controllers\MinibioController;
use App\Controllers\EventsController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = AppFactory::create();

$app->add(new CorsMiddleware());

$app->get('/header', HeaderDataController::class . ':index');
$app->get('/social', SocialNetworksController::class . ':index');
$app->get('/minibio', MinibioController::class . ':index');
$app->get('/event', EventsController::class . ':index');
$app->get('/', function ($request, $response, $args) {
    $response->getBody()->write(json_encode(['message' => 'API funcionando']));
    return $response->withHeader('Content-Type', 'application/json');
});

// Rota para lidar com rotas não encontradas
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function (Request $request, Response $response) {
    $response->getBody()->write(json_encode(['message' => 'Rota não encontrada', 'code' => 404]));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
});

$app->run();