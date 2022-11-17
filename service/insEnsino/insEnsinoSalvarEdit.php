<?php
    include('../../util/conexao.php');
    
        $id = $_POST['ID'];
        $nome = $_POST['Nome'];
        $cnpj = $_POST['CNPJ'];
        
        $sqlInsert = "UPDATE ins_ensino SET Nome='$nome', CNPJ='$cnpj' WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);

    header('Location: ../../insEnsino.php');

?>