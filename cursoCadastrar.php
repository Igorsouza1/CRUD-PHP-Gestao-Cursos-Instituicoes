

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
          <h1 class="display-3">Cadastrar Curso</h1>
          <form method="POST" action="./service/curso/cursoCadastrar.php">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="dataInicioNaIES">Data Criação</label>
                        <input type="date" class="form-control" name="DataCriacao" id="DataCriacao">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="conceitoENADEID">Nome</label>
                        <input class="form-control" name="Nome" id="Nome">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="area">Área</label>
                        <select name="area" id="area" class="form-control">
                            <?php
                                include("./util/conexao.php");
                                $query = mysqli_query($mysqli, "SELECT * FROM area ORDER BY Nome ASC");
                                foreach($query as $option){
                                  ?>
                                    <option value="<?php echo $option["ID"] ?>"><?php echo $option['Nome'] ?></option>
                                  <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="Descricao">Descrição</label>
                        <textarea class="form-control" name="Descricao" id="Descricao" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
      </div>
      </div>
    </div>
  </section>