<?php
    $hostname = "localhost";
    $bd = "web2Project";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bd);
    if($mysqli->connect_errno){
        echo "Erro de conexão - " . $mysqli->connect_errno . ")" . $mysqli-connect-errno;
    }
?>