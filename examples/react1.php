<?php
require __DIR__ . '/../vendor/autoload.php';

use G\HttpServer\Builder;
use Symfony\Component\HttpFoundation\Request;

Builder::createReactServer(function (Request $request) {
        return "Hello " . $request->get('name');
        //return new Response("Hello");
    })->listen(1337);