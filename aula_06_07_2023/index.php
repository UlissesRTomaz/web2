<?php
    $nome = "Fulano de Tal";
    $cor  = "#fffabc";
    $idioma = "pt-br";

    setcookie("nome", base64_encode($nome), time() + 120);
    setcookie("cor", $cor, time() + 120);
    setcookie("idioma", $idioma, time() + 120);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="testa_cookie.php">Testa Cookie</a>
</body>
</html>