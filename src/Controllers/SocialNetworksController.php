<?php

namespace App\Controllers;

use App\Models\SocialNetworks;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SocialNetworksController {
    public function index(Request $request, Response $response, $args): Response {
        $social_networks = SocialNetworks::all();
        $payload = json_encode($social_networks);
        
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
