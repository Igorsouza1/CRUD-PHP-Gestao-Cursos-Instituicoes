<?php

    if(!empty($_GET['ID']))
    {
        include_once('../../util/conexao.php');

        $id = $_GET['ID'];

        $sqlSelect = "SELECT *  FROM curso WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM curso WHERE id=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
    header('Location: ../../curso.php');
   
?>