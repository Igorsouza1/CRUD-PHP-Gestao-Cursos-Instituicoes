<?php
    include("../..//util/conexao.php");

    $nome = $_POST['nomeArea'];

    $sql = "INSERT INTO area(nome) VALUES ('$nome')";
    if(mysqli_query($mysqli, $sql)){
        echo "Area cadastrada com sucesso";
    }else{
        echo "ERRO ao cadastrar" .mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
    header('Location: ../../area.php')
?>