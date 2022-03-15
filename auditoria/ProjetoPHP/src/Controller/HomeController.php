<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Config\Logger;

class HomeController
{

    public static function index()
    {
        require "../src/Views/index.php";
    }

    public static function login()
    {
        require "../src/Views/login.php";
    }

    public static function autenticacao()
    {
        $user = $_POST['user'];
        $password = $_POST['password'];

        if ($user == "admin" && password == "admin") {

        }
    }

    public static function resultado(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da soma: ".($valor1+$valor2);
        Logger::logger("Foi realizada a operação de soma!", "info");

    }
    public static function resultadoSubtracao(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da divisão: ".($valor1-$valor2);
        Logger::logger("Foi realizada a operação de divisão!", "info");

    }
    public static function resultadoDivisao(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da divisão: ".($valor1/$valor2);
        Logger::logger("Foi realizada a operação de divisão!", "info");

    }

    public static function resultadoMultiplicacao(){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da divisão: ".($valor1*$valor2);
        Logger::logger("Foi realizada a operação de divisão!", "info");

    }
    //php -S localhost:8000 -t public
}