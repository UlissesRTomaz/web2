<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="valida.php" enctype="multipart/form-data">
      <fieldset>
        <label for="arquivo">Selecione um arquivo:
            <br />Selecione<input type="file" name="arquivo" />    
        </label>
        <br />
    <input type="submit" name="btn_enviar" value="Enviar" />
    </fieldset>
    </form>

    <p>Exibir listagem dos arquivos <a href="report.php">enviados.</a></p>
</body>
</html>