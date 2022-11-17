<?php
    include("../..//util/conexao.php");

    $dataCriacao = $_POST['DataCriacao'];
    $nome = $_POST['Nome'];
    $area_ID = $_POST['area'];
    $descricao = $_POST['Descricao'];

    $sql = "INSERT INTO curso(DataCriacao, Nome, Area_ID, Descricao) VALUES ('$dataCriacao','$nome', '$area_ID', '$descricao')";
    if(mysqli_query($mysqli, $sql)){
        echo "Area cadastrada com sucesso";
    }else{
        echo "ERRO ao cadastrar" .mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
    header('Location: ../../curso.php')
?>