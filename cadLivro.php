<?php require_once('verificarAcesso.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>src = "js/jquery.min.js"</script>
    <script>src = "js/jquery.mask.min.js"</script>
    <script>src = "js/bootstrap.min.js"</script>
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloCad.css">
    <title>Cadastrar Dados do Livro</title>
</head>
<?php require_once('menu.php'); ?>

<body>
    <form method="POST" name="dadosLivro" action="cadLivroAction.php">
    <div class="container-fluid all">
        <h1>Cadastro de Livro</h1>
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <label for="autoSizingInput">Título*</label>
              <input type="text" class="form-control" name="nome" id="nome" maxlenght="80" placeholder="O Meu Pé de Laranja Lima...">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-3">
              <label for="autoSizingInput">ISBN*</label>
              <input type="text" class="form-control" name="isbn" id="isbn" maxlenght="13" placeholder="9788506086896">
            </div>

            <div class="col-md-5">
              <label for="autoSizingInput">Autor*</label>
              <input type="text" class="form-control" name="autor" id="autor" maxlenght="80" placeholder="José Mauro de Vasconcelos...">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-3">
              <label for="autoSizingInput">Editora*</label>
              <input type="text" class="form-control" name="editora" id="editora" maxlenght="20" placeholder="Melhoramentos...">
            </div>

            <div class="col-md-1">
              <label for="autoSizingInput">Edição</label>
              <input type="text" class="form-control" name="numEdicao" id="numEdicao" maxlenght="5" placeholder="2">
            </div>

            <div class="col-md-1">
              <label for="autoSizingInput">Ano*</label>
              <input type="text" class="form-control" name="ano" id="ano_publicacao" maxlenght="10" placeholder="1999">
            </div>

            <div class="col-md-1">
              <label for="autoSizingInput">Páginas</label>
              <input type="text" class="form-control" name="numPag" id="numPag" maxlenght="5" placeholder="144">
            </div>

            <div class="col-md-2">
              <label for="autoSizingInput">Categoria*</label>
              <input type="text" class="form-control" name="categoria" id="categoria" maxlenght="50" placeholder="Romance, Infantojuvenil...">
            </div>
            <div class="col-md-2"></div>
          </div>

          <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4"><h6 style="margin: 10px;">Campos obrigatórios*</h6></div>
            <div class="divBtn col-md-2">
              <input type="submit" name="btnSalvar" value="Salvar">
            </div>

            <div class="divBtn col-md-2">
              <a href="cadLivro.php"><input type="button" value="Cancelar"></a>
            </div>
            <div class="col-md-2"></div>
          </div>
      </div>
    </form>
</body>

</html>