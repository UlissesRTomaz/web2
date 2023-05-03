<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="valida.php">
        <label for="valor1">Valor 1
            <input type="number" name="valor1" />    
        </label>
            <br />
        <label for="valor2">Valor 2
            <input type="number" name="valor2" />    
        </label>
          <select name="operacao" multiple>
            <option value="+" selected>Soma</option>
          </select>
        <br />
    <input type="submit" name="btn_enviar" value="Enviar" />
    </form>
</body>
</html>