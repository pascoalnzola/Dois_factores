<?php
    session_start();
    if(!(isset($_SESSION['code']))){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<body>
    <h1>Ola, Bem vindo ao sistema <?php echo $_SESSION['nome']?></h1>
    <a href="sair.php">Terminar sessão</a>
</body>
</html>