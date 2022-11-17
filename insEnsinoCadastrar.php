

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
          <h1 class="display-3">Cadastrar instituição de Ensino</h1>
          <form method="POST" action="./service/insEnsino/insEnsinoCadastrar.php">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="dataInicioNaIES">Nome</label>
                        <input class="form-control" name="Nome" id="Nome" type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="conceitoENADEID">CNPJ</label>
                        <input class="form-control" name="cnpj" id="cnpj" type="number">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
      </div>
      </div>
    </div>
  </section>