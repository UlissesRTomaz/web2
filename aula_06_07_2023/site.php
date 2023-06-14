<?php
    if (isset($_COOKIE['nome']) and isset($_COOKIE['cor']) and isset($_COOKIE['idioma'])):
        $cad = $_COOKIE['nome'];
        $color = $_COOKIE['cor'];
        $idioma = $_COOKIE['idioma'];
    else:
        unset($_COOKIE['nome']);
        unset($_COOKIE['cor']);
        unset($_COOKIE['idioma']);
        header('Location: index.php');
    endif;
?>
<!DOCTYPE html>
<html lang="<?php print($idioma); ?>">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/w3.css" />
    <style>
        body{
        background-color: <?php echo $color; ?>
        }
    </style>
</head>
<body>
    <?php if ($idioma == "pt-br"):?>
        <h1><?php echo"Bem vindo $cad!"; ?></h1>
    <?php elseif ($idioma == "es"):?>
        <h1><?php echo"¡Bienvenidos a $cad!"; ?></h1>
    <?php else:?>
        <h1><?php echo"Welcome $cad!"; ?></h1>
    <?php endif;?>
</body>
</html>