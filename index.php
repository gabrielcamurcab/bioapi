<?php

require 'bootstrap.php';

use Slim\Factory\AppFactory;
use App\Controllers\HeaderDataController;

$app = AppFactory::create();

$app->addBodyParsingMiddleware();

$app->get('/header', App\Controllers\HeaderDataController::class . ':index');

$app->run();