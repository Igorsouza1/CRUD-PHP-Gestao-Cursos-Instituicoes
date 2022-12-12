<?php
    include('../../util/conexao.php');
    
        $id = $_POST['ID'];
        $vagas = $_POST['vagas'];
        $curso = $_POST['curso_ID'];
        $turma = $_POST['turma_ID'];
        
        $sqlInsert = "UPDATE sala SET Vagas='$vagas', curso_ID='$curso', turma_ID='$turma' WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);

    header('Location: ../../sala.php');

?>