<?php
    $nome   = base64_decode($_COOKIE['nome']);
    $cor    = $_COOKIE['cor'];
    $idioma = $_COOKIE['idioma'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Desenvolvimento de Aplicações Web II</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../aula_include/css/w3.css" />
        <style>
            body{
            background-color: <?php echo $cor; ?>
            }
        </style>
    </head>
<body>
    <?php if ($idioma == "pt-br"):?>
        <h1><?php echo"Bem vindo $nome!"; ?></h1>
    <?php elseif ($idioma == "es"):?>
        <h1><?php echo"¡Bienvenidos a $nome!"; ?></h1>
    <?php else:?>
        <h1><?php echo"Welcome $nome!"; ?></h1>
    <?php endif;?>
</body>
</html>