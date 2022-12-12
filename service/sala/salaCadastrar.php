<?php
    include("../..//util/conexao.php");

    $vagas = $_POST['Vagas'];
    $curso = $_POST['Curso'];
    $turma = $_POST['Turma'];

    $sql = "INSERT INTO sala(Vagas, curso_ID, turma_ID) VALUES ('$vagas','$curso','$turma')";
    if(mysqli_query($mysqli, $sql)){
        echo "Area cadastrada com sucesso";
    }else{
        echo "ERRO ao cadastrar" .mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
    header('Location: ../../sala.php')
?>