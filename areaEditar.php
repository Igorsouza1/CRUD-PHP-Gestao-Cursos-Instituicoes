<?php
    include_once('./util/conexao.php');

    if(!empty($_GET['ID']))
    {
        $id = $_GET['ID'];
        $sqlSelect = "SELECT * FROM area WHERE id=$id";
        $result = $mysqli->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($area = mysqli_fetch_assoc($result))
            {
                $id = $area['ID'];
                $nome = $area['Nome'];
            }
        }
        else
        {
            header('Location: area.php');
        }
    }
    else
    {
        header('Location: area.php');
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
 <script src="/assets/jquery/jquery-3.3.1.slim.min.js"></script>

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
          <form method="POST" action="./service/area/areaSalvarEdit.php">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="nomeArea">Nome</label>
                    <input type="hidden" value=<?php echo $id;?> type="text" class="form-control m-2" name="ID" id="ID" >
                    <input value=<?php echo $nome;?> type="text" class="form-control m-2" name="Nome" id="Nome" placeholder="Exatas">
                </div>
            </div>          
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="../../area.php" class="btn btn-primary">Voltar</a>
        </form>
        </div>
      </div>
      </div>
    </div>
  </section>