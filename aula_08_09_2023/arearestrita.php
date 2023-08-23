<?php 
    session_start();
    if (!isset($_SESSION['usuario']) || !isset($_SESSION['autenticado'])):
        header('Location: login.php?erro=2');
    endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvimento de Aplicações II - Sessões em PHP</title>
</head>
<body>
    <h1>Olá, <?php print($_SESSION['usuario']); ?>! Seja bem-vindo!</h1>
    <a href="perfil.php">Perfil</a>
    <a href="logoff.php">Sair</a>

</body>
</html>