<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    body{
        background-color: rgb(37, 37, 71);
    }
</style>
<body>
    <form action="logar.php" method="post" id="login">
        <h1>Login</h1>
        <hr>
        <div>
            <label for="user">Email:</label> <br>
            <input type="email" name="email" id="email" > <br><br>
            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" id="senha"><br> <br>
            <span><a href="">Esqueci a senha</a></span><br><br>
            <input type="submit" value="Enviar" id="btn">
        </div>
    </form>
</body>
</html>