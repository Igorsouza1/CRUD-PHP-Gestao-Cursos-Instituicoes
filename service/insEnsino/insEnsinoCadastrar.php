<?php
    include("../..//util/conexao.php");

    $nome = $_POST['Nome'];
    $cnpj = $_POST['cnpj'];

    $sql = "INSERT INTO ins_ensino(Nome, CNPJ) VALUES ('$nome','$cnpj')";
    if(mysqli_query($mysqli, $sql)){
        echo "Area cadastrada com sucesso";
    }else{
        echo "ERRO ao cadastrar" .mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
    header('Location: ../../insEnsino.php')
?>