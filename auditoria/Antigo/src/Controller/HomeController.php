<?php

namespace Talita;

class HomeController
{

    public static function index()
    {
        require "../src/views/index.php";
    }

    public static function resultado()
    {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        echo "Resultado da soma: ".($valor1+$valor2);
    }

}