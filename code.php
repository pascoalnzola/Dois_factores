<?php
    session_start();
    if(!(isset($_SESSION['code']))){
        header("Location: login.php");
    }
    if(isset($_POST['code'])){
        if($_POST['code'] == $_SESSION['code']){
            header("Location: index.php");
        }
        else{
            echo "<script>alert('Código incorreto')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <script>
        alert('Enviamos um código no su email\nSenão verifique os eu email e tente novamente!\nVerifique o código');
    </script>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login">
        <h1>Código Verificação</h1>
        <hr>
        <div>
            <label for="code">Code:</label><br>
            <input type="number" name="code" id="code"><br> <br>
            <input type="submit" value="Veriicar" id="btn">
            <div>
                <a href="login.php">Fazer o login novamente</a>
            </div>
        </div>
    </form>
</body>
</html>