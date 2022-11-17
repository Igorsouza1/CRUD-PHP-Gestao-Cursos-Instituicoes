<?php
    include_once('./util/conexao.php');

      if(!empty($_GET['ID']))
      {
        $id = $_GET['ID'];
        $sqlSelect = "SELECT * FROM curso WHERE id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($curso = mysqli_fetch_assoc($result))
            {
                $id = $curso['ID'];
                $dataCriacao = $curso['DataCriacao'];
                $nome = $curso['Nome'];
                $area = $curso['Area_ID'];
                $descricao = $curso['Descricao'];
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
          <form method="POST" action="./service/curso/cursoSalvarEdit.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nomeArea">Nome</label>
                    <input type="hidden" value=<?php echo $id;?> type="text" class="form-control m-2" name="ID" id="ID" >
                    <input value=<?php echo $dataCriacao;?> type="date" class="form-control m-2" name="DataCriacao" id="DataCriacao" >
                    <input value=<?php echo $nome;?> type="text" class="form-control m-2" name="Nome" id="Nome" >
                    <select name="area" id="area" class="form-control">
                    <?php
                    $query = mysqli_query($mysqli, "SELECT * FROM area");
                                foreach($query as $option){
                                  ?>
                                    <option value="<?php echo $option["ID"] ?>"><?php echo $option['Nome'] ?></option>
                                  <?php
                                }
                    ?>
                    </select>
                    <input value=<?php echo $descricao;?> type="text" class="form-control m-2" name="Descricao" id="Descricao" ></input>
                </div>
            </div>          
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="./curso.php" class="btn btn-primary">Voltar</a>
        </form>
        </div>
      </div>
      </div>
    </div>
  </section>