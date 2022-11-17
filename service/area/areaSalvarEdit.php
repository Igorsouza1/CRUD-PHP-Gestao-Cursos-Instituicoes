<?php
    include('../../util/conexao.php');
    
        $id = $_POST['ID'];
        $nome = $_POST['Nome'];
        
        $sqlInsert = "UPDATE area SET nome='$nome' WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);

    header('Location: ../../area.php');

?>