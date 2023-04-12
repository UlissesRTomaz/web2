<?php
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];

    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    print("<br />");
    print($soma);
    print("<br />");
    print($sub);

    print("<br />");
    print($mult);
?>