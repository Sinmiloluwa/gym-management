<?php

require_once __DIR__.'../../vendor/autoload.php';
use app\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function(){
    return "Hello world";
});

$app->run();