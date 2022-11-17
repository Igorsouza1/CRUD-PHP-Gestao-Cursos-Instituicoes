<?php
    include('../../util/conexao.php');
    
        $id = $_POST['ID'];
        $cursoID = $_POST['curso_ID'];
        $nAlunos = $_POST['N_Alunos'];
        
        $sqlInsert = "UPDATE turma SET curso_ID='$cursoID', N_ALunos='$nAlunos' WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);

    header('Location: ../../turma.php');

?>