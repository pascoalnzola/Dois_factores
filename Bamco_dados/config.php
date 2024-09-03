<?php
    $host = "localhost";
    $user = "root";
    $senha = "";
    $banco = "factores";

    try{
        $conn = new PDO("mysql:dbmane='$banco';host='$host';",$user,$senha);
    }
    catch (PDOException $ex){
        echo "Erro -> ".$ex->getMessage();
    }
?>