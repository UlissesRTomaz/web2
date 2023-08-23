<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .erro{
            color: red;
        }
    </style>
</head>
<body>
    <p class="erro">
        <?php 
            $erro = isset($_GET['erro']) ? $_GET['erro'] : false;
            if ($erro == 1):
                print("Login e/ou senha inválidos!");
            endif;
                
            if ($erro == 2):
                print("Efetue o login para obter acesso a essa página!");
            endif;
        ?>
    </p>
    
    <form method="post" action="validalogin.php">
            <label for="usuario">Usuario:
                <input type="text" name="usuario" />    
            </label>
                <br />
            <label for="senha">Senha
                <input type="password" name="senha" />    
            </label>
                <br />

        <input type="submit" name="btn_enviar" value="Login" />
        </form>

</body>
</html>