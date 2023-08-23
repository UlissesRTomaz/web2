<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    var_dump($_FILES);

    if ($_FILES['arquivo']['error'] == 0):

        $pasta_destino = "imagens/";
        $arquivo_destino = $pasta_destino . basename($_FILES['arquivo']['name']);
        $arquivo_temp = $_FILES['arquivo']['tmp_name'];

        if (move_uploaded_file($arquivo_temp, $arquivo_destino)):
            $msg = $_FILES['arquivo']['error'];
            //echo "<p>Arquivo enviado com sucesso.</p>";
        else:
            echo "<p>Não foi possível fazer o upload do arquivo!</p>";
        endif;
    else:
        echo "<p>O arquivo ultrapassa o limite de tamanho!</p>";
    endif;


    $array_error[] = "Não houve erro, o upload foi bem sucedido.";
    $array_error[] = "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.";
    header("Location: _index.php");
    //echo $array_error[$msg];
?>

</body>
</html>