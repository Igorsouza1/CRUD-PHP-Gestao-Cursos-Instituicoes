<?php
    include("../..//util/conexao.php");

    $curso = $_POST['Curso'];
    $alunos = $_POST['N_alunos'];

    $sql = "INSERT INTO turma(Curso_ID, N_Alunos) VALUES ('$curso','$alunos')";
    if(mysqli_query($mysqli, $sql)){
        echo "Area cadastrada com sucesso";
    }else{
        echo "ERRO ao cadastrar" .mysqli_connect_error($mysqli);
    }

    mysqli_close($mysqli);
    header('Location: ../../turma.php')
?>