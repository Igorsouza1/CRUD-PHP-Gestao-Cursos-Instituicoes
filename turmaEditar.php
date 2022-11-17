<?php
    include_once('./util/conexao.php');

      if(!empty($_GET['ID']))
      {
        $id = $_GET['ID'];
        $sqlSelect = "SELECT * FROM turma WHERE id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($turma = mysqli_fetch_assoc($result))
            {
                $id = $turma['ID'];
                $cursoID = $turma['curso_ID'];
                $nAlunos = $turma['N_Alunos'];

            }
        }
        else
        {
            header('Location: curso.php');
        }
    }
    else
    {
        header('Location: curso.php');
    }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/remixicons/fonts/remixicon.css">
  <link rel="stylesheet" href="./assets/css/style.css">

 <!-- JQUERY -->
 <script src="./assets/jquery/jquery-3.3.1.slim.min.js"></script>

  <title>School | Desenvolvimento Web 2</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" id="home">


  <!-- NAV -->
  <?php include("./layout/nav.php") ?>

  <!-- SERVICES -->
  <section id="services">
    <div class="container">
      <div class="row">
      <div class="col-12 section-services">
          <h1 class="display-3">Editar Área</h1>
          <form method="POST" action="./service/turma/turmaSalvarEdit.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nomeArea">Curso</label>
                    <input type="hidden" value=<?php echo $id;?> type="text" class="form-control m-2" name="ID" id="ID" >
                    <input value=<?php echo $nAlunos;?> type="number" class="form-control m-2" name="N_Alunos" id="N_Alunos " >
                    <select name="curso_ID" id="curso_ID" class="form-control">
                    <?php
                    $query = mysqli_query($mysqli, "SELECT * FROM curso");
                                foreach($query as $option){
                                  ?>
                                    <option value="<?php echo $option["ID"] ?>"><?php echo $option['Nome'] ?></option>
                                  <?php
                                }
                    ?>
                    </select>
                </div>
            </div>          
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="./turma.php" class="btn btn-primary">Voltar</a>
        </form>
        </div>
      </div>
      </div>
    </div>
  </section>