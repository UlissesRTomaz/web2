<?php

    define("USUARIO", "Ulisses");
    define("SENHA", "123456");
    
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : false;

    if ($usuario  == USUARIO && $senha ==  SENHA):
        session_start();
        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['autenticado'] = true;

        header('Location: arearestrita.php');
    else:
        header('Location: login.php?erro=1');
    endif;
