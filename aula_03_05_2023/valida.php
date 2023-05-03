<?php
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $operacao = $_GET['operacao']
    function calculo_basico($x, $y, $ope){
        //TO DO;
    }
    $res = calculo_basico(4, 3, "+");
    function soma($x, $y){
        return $x + $y;
    }

    function subtracao($x, $y){
        return $x - $y;
    }

    function multiplicacao($x, $y){
        return $x * $y;
    }
    
    function potencia($base, $expoente = 2){
        return $base ** $expoente;
    }

    function pot2($base){
        return $base ** 2;
    }


    $soma = soma($valor1, $valor2);
    $sub = subtracao($valor1, $valor2);
    $mult = multiplicacao($valor1, $valor2);
    $pot = pot2($valor1);
    $potencia = potencia($valor1, $valor);

    print("<br />");
    print($soma);
    print("<br />");
    print($sub);

    print("<br />");
    print($mult);

    print("<br />");
    print($pot);

    print("<br />");
    print($potencia);
?>