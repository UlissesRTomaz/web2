<?php

/*
4.	Uma determinada locadora de veículos aluga cinco modelos de carros. E, informa 
o consumo desses veículos aos clientes e o valor por quilômetros percorridos, no ato 
do aluguel. Na devolução do automóvel, o cliente preenche um formulário informando 
o seu nome, o carro alugado e a quilometragem percorrida.

Escreva o código referente ao formulário para a recepção dos dados “devolucao.php” 
e o código “dados.php” que receberá as informações do formulário de devolução de 
veículos, através do método get. Após o preenchimento e envio do formulário, deverá
ser calculado o valor que o cliente irá pagar. Exiba uma saída amigável dos dados
para o cliente. 
Indicando:
    o nome do cliente; 
    a quantidade de litros consumidos; 
    o consumo e o custo por quilometros rodados; e, 
    o total = custo * quilometragem + quantidade de litros consumidos * preço do litro de combustível.
Sabendo que o litro do combustível custa R$ 7,89.

Veículo	    Consumo (Km/l)	    Custo por Km
Corolla Cross   16,8	            R$ 6,00
Creta	        14,8	            R$ 5,50
T-Cross	        14,0	            R$ 5,70
Tiggo 2x	    11,5	            R$ 3,90
Versa	        12,7	            R$ 4,80

*/

?>

<?php
define("PRECO_COMBUSTIVEL", 7.89);
$litro_combustivel = 7.89;

$auto = array(
    "corolla"=> array(
        "nome" => "Corolla Cross",
        "consumo" => 14.8,
        "custo" => 6.00
    ),
    "creta" => array(
        "nome" => "Creta 2.0",
        "consumo" => 14.8,
        "custo" => 5.50
    ),
    "tcross" => array(
        "nome" => "T-Cross",
        "consumo" => 14,
        "custo" => 5.70 
    ),
    "tiggo" => array(
        "nome" => "Tiggo 5x",
        "consumo" => 11.5,
        "custo" => 3.90
    ),
    "versa" => array(
        "nome" => "Versa",
        "consumo" => 12.7,
        "custo" => 4.80
    )
);

if (isset($_COOKIE['nome']) and isset($_COOKIE['veiculo']) and isset($_COOKIE['km'])):
    $nome = $_COOKIE['nome'];
    $veiculo = $_COOKIE['veiculo'];
    $km = $_COOKIE['km'];
else:
    unset($_COOKIE['nome']); // $_COOKIE = array();
    unset($_COOKIE['veiculo']);
    unset($_COOKIE['km']);
    header('Location: devolucao.php');
endif;

$custo_rodagem = $km * $auto[$veiculo]["custo"];
$qtd_litros  = $km / $auto[$veiculo]["consumo"];
$total =  $qtd_litros * PRECO_COMBUSTIVEL + $custo_rodagem;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Carros - Pagamento</title>
</head>
<body>
    <h1>Ficha de Pagamento<?php print($nome); ?></h1>
    
</body>
</html>