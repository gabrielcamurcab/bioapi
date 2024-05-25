<?php

require 'bootstrap.php';

use Slim\Factory\AppFactory;
use App\Controllers\HeaderDataController;
use App\Controllers\SocialNetworksController;
use App\Controllers\MinibioController;

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->get('/header', HeaderDataController::class . ':index');
$app->get('/social', SocialNetworksController::class . ':index');
$app->get('/minibio', MinibioController::class . ':index');

$app->run();