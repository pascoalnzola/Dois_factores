<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login">
        <h1>Cadastre-se</h1>
        <hr>
        <div>
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome"><br> <br>
            <label for="email">Email:</label> <br>
            <input type="email" name="email" id="email" > <br><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br> <br>
            <input type="submit" value="Enviar" id="btn">
            <div>
                <a href="login.php">Fazer login</a>
            </div>
        </div>
    </form>
    <?php
         include("Banco_dados/config.php");
         if(isset($_POST['email']) && isset($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['senha']) && isset($_POST['nome']) && !empty($_POST['email'])){   
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $cosult = "SELECT * FROM usuario";
                $verif = $conn->query($cosult)->fetchAll();
                foreach($verif as $ve){
                    if($ve['email'] == $email){
                        echo "<script>alert('Email já Cadastrado!')</script>";
                        return;
                    }
                }
                $insert = "INSERT INTO usuario Values(DEFAULT, '$nome', '$email', '$senha')";
                $executar = $conn->query($insert);
                $_SESSION['nome'] = $nome;
                echo "<script>alert('Cadastrado com sucesso!\nFaça o seu login!')</script>";
                header("Location: login.php");
            }else {
                echo "<script>
                        alert('Email Inválido!');
                    </script>";
            }
        }
    ?>
</body>
</html>