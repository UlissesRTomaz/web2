<?php
    $nome = $_POST['nome'];
    $cor = $_POST['cor'];
    $idioma = $_POST['idioma'];
    
    if($nome and $cor and $idioma):
        setcookie('nome', $nome, time()+60*60*24*30);
        setcookie('cor', $cor, time()+60*60*24*30);
        setcookie('idioma', $idioma, time()+60*60*24*30);
        header('location:site.php');
    else:
        unset($_COOKIE['nome']);
        unset($_COOKIE['cor']);
        unset($_COOKIE['idioma']);
        header('location:index.php');
    endif;
?>