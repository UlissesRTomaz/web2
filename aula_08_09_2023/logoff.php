<?php
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['autenticado'])):
        unset($_SESSION['autenticado']);
        unset($_SESSION['usuario']);
    endif;
    header('Location: login.php');
?>