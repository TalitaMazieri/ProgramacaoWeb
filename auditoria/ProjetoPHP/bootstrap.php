<?php

require __DIR__."/vendor/autoload.php";

$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'] ?? "/";

$route = new \Aluno\ProjetoPhp\Router($method, $path);

$route->get("/", function(){
    return "Hello Wold!";
});

$route->get("/Calculadora",
    "Aluno\ProjetoPhp\Controller\HomeController::index");

$route->post("/Resultado",
    "Aluno\ProjetoPhp\Controller\HomeController::resultado");

$route->post("/ResultadoSubtracao",
    "Aluno\ProjetoPhp\Controller\HomeController::resultadoDivisao");

$route->post("/ResultadoDivisao",
    "Aluno\ProjetoPhp\Controller\HomeController::resultadoDivisao");

$route->post("/ResultadoMultiplicacao",
    "Aluno\ProjetoPhp\Controller\HomeController::resultadoDivisao");

$route->get("/login",
    "Aluno\ProjetoPhp\Controller\HomeController::login");

$route->post("/autenticacao",
    "Aluno\ProjetoPhp\Controller\HomeController::autenticacao");

$result = $route->handler();
if (!$result){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

echo $result($route->getParams());

//php -S localhost:8000 -t public/
