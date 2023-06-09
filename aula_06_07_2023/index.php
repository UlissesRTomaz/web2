<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/w3.css" />
    <style>
        form{
            margin:auto;
            width: 720px;
            padding: 50px;
            }
        fieldset{
            border: 1x solid green;
            }
        .color{
            width:130px;
            height: 60px;
            margin: 20px;
            }
       </style>
    </head>
    <body>
        <form class="w3-container" method="post" action="valida.php" id="color" name="color">
            <fieldset id="fie">
            <legend>Cor favorita</legend><br>
                <label>NOME : </label>
                    <input class="w3-input" name="nome" id="nome" type="text"><br>
                <label>Idioma:</label>
                    <select class="w3-input" name="idioma" id="idioma">
                        <option disabled selected>Selecione um idioma</option>
                        <option value="pt-br">Brazilian Portuguese</option>
                        <option value="es">Spanish</option>
                        <option value="usa">English</option>
                    </select>
                <label>Escolha uma cor :</label>
                    <input class="w3-input color" name="cor" id="cor" type="color"><br>
                    <input class="w3-input" value="Enviar " type="submit">
            </fieldset>
        </form>
    </body>
</html>