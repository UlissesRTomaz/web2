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
      <fieldset>
        <label for="esporte">Escolha seu(s) esporte(s) preferido(s):
            <br />Natação<input type="checkbox" name="esporte[]" value="natacao" />    
            <br />Futebol<input type="checkbox" name="esporte[]"  value="futebol"/>
            <br />Handbol<input type="checkbox" name="esporte[]"  value="handbol"/>
        </label>
        
            <br />
    <input type="submit" name="btn_enviar" value="Enviar" />
    </fieldset>
    </form>
</body>
</html>