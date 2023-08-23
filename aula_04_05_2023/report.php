<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Envia Foto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <img src="imagens/avatar.jpg" alt="Foto do Avatar" />
    <?php
        $path = "imagens/";
        $diretorio = scandir($path);

    ?>
    <p>Página <a href="_index.php">inicial.</a></p>
    <p>Lista de Arquivos do diretório <strong><?php print($path);?></strong>:</p>
        <ul>
        <?php
            foreach ( $diretorio as $valor ):
                if ($valor != '.' and $valor != '..'):
        ?>
            <li><a href="<?php print($path.$valor);?>"><?php print(ucwords($valor));?></a></li>
        <?php
                endif;
            endforeach;
        ?>
        </ul>
</body>
</html>