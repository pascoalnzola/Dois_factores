<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "factores";
    try {
        $conn = new PDO("mysql:dbname=$banco;hostname=$host;", $user, $senha);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        echo "Erro -> ".$ex->getMessage();
    }
?>
