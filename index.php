<?php

require 'bootstrap.php';

use Slim\Factory\AppFactory;
use App\Controllers\HeaderDataController;
use App\Controllers\SocialNetworksController;

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->get('/header', HeaderDataController::class . ':index');
$app->get('/social', SocialNetworksController::class . ':index');

$app->run();