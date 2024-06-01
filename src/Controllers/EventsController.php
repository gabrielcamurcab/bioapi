<?php

namespace App\Controllers;

use App\Models\Events;
use DateTime;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class EventsController {
    public function index(Request $request, Response $response, $args): Response {
        $currentDatetime = new DateTime();

        $header_data = Events::where('datetime', '>=', $currentDatetime)->orderBy('datetime', 'desc')->first();
        $payload = json_encode($header_data);
        
        $response->getBody()->write($payload);
        return $response->withHeader('Content-Type', 'application/json');
    }
}
