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
          <h1 class="display-3">Sala</h1>
          <div class="col-1">
              <a href="./salaCadastrar.php" class="btn btn-primary">Cadastrar</a>
            </div>
          <div class="table-container">
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th >Vagas</th>
                  <th >Curso_ID</th>
                  <th >Turma_ID</th>
                </tr>
              </thead>
              <tbody>
              <?php
                   include("./util/conexao.php");
                   $query = mysqli_query($mysqli, "SELECT * FROM sala ");
                   foreach($query as $option){
                   ?>
                  <tr> 
                    <td><?php echo $option['ID'] ?></td>  
                    <td><?php echo $option['Vagas'] ?></td>  
                    <td><?php echo $option['curso_ID'] ?></td>  
                    <td><?php echo $option['turma_ID'] ?></td>  
                    <td><a href="./salaEditar.php?ID=<?php echo $option['ID'] ?>" class="btn btn-primary">Editar</a></td>
                    <td><a href="./service/sala/salaDeletar.php?ID=<?php echo $option['ID'] ?>" class="btn btn-danger">Excluir</a></td>
                  </tr>
              <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
          </ul>
        </form>
        </div>
      </div>
      </div>
    </div>
  </section>