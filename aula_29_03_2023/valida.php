<?php
    var_dump($_GET);

    foreach($_GET["esporte"] as $valor):
        print("<br /> $valor");
    endforeach;

?>