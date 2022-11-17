<?php
    include('../../util/conexao.php');
    
        $id = $_POST['ID'];
        $dataCriacao = $_POST['DataCriacao'];
        $nome = $_POST['Nome'];
        $areaID = $_POST['area'];
        $descricao = $_POST['Descricao'];
        
        $sqlInsert = "UPDATE curso SET  DataCriacao='$dataCriacao',nome='$nome', Area_ID='$areaID', Descricao='$descricao' WHERE id=$id";
        $result = $mysqli->query($sqlInsert);
        print_r($result);

    header('Location: ../../curso.php');

?>