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
Tiggo 5x	    11,5	            R$ 3,90
Versa	        12,7	            R$ 4,80

*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Carros - Formulário: Devolução do Carro</title>
</head>
<body>
    <form method="get" action="valida.php">
        <label for="nome">Nome:
            <input type="text" name="nome" id="nome" size="40" />
        </label><br />
        <label for="carro">Carro Alugado:
        <select name="carro">
            <option selected>Selecione o automóvel</option>
            <option value="corolla">Corolla Cross</option>
            <option value="creta">Creta</option>
            <option value="tcross">T-Cross</option>
            <option value="tiggo">Tiggo 5x</option>
            <option value="versa">Versa</option>
        </select><br />
        </label>
        <label for="km">Quilometragem rodada:
            <input type="number" name="km" id="km" min="0" />
        </label><br />
        <input type="submit" name="btn_enviar" value="Enviar" />
    </form>
    
</body>
</html>