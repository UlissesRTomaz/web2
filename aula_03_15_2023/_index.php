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
        <br />
    <input type="submit" name="btn_enviar" value="Enviar" />
    </form>



    <form>
  <fieldset>
    <legend>Fruit juice size</legend>
    <p>
      <input type="radio" name="size" id="size_1" value="small" />
      <label for="size_1">Small</label>
    </p>
    <p>
        
    <input type="number" placeholder="multiple of 10" step="0.1" min="0" max="10" />
      <input type="radio" name="size" id="size_2" value="medium" />
      <label for="size_2">Medium</label>
    </p>
    <p>
      <input type="radio" name="size" id="size_3" value="large" />
      <label for="size_3">Large</label>
    </p>
  </fieldset>
</form>
</body>
</html>