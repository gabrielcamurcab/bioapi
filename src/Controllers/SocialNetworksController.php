<?php

namespace App\Controllers;

use App\Models\SocialNetworks;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SocialNetworksController {
    public function index(Request $request, Response $response, $args): Response {
        $header_data = SocialNetworks::all();
        $payload = json_encode($header_data);
        
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
