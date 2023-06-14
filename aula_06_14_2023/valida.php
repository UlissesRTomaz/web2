<?php
    $nome = $_GET['nome'];
    $veiculo = $_GET['carro'];
    $km = $_GET['km'];


    if($nome and $veiculo and $km):
        setcookie('nome', $nome, time()+60*60*24*30);
        setcookie('veiculo', $veiculo, time()+60*60*24*30);
        setcookie('km', $km, time()+60*60*24*30);
        header('location:resumo.php');
    else:
        unset($_COOKIE['nome']);
        unset($_COOKIE['veiculo']);
        unset($_COOKIE['km']);
        header('location:devolucao.php');
    endif;
?>