<?php

require __DIR__ . "/vendor/autoload.php";

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? "/";

$route = new Talita\Router($method, $path);

$route->get("/", function (){
    return "Hello World!!";
});

$route->get("/Calculadora", "Talita/Controller/HomeController::index");
$route->get("/resultado", "Talita/Controller/HomeController::result");

$result = $route->handler();
if (!$result) {
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($route->getParams());