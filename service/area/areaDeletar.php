<?php

    if(!empty($_GET['ID']))
    {
        include_once('../../util/conexao.php');

        $id = $_GET['ID'];

        $sqlSelect = "SELECT *  FROM area WHERE id=$id";

        $result = $mysqli->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM area WHERE id=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
    header('Location: ../../area.php');
   
?>