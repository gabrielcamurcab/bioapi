<?php

namespace App\Controllers;

use App\Models\Minibio;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MinibioController {
    public function index(Request $request, Response $response, $args): Response {
        $minibio = Minibio::all();
        $payload = json_encode($minibio);
        
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
