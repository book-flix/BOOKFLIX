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
    <title>Consultar Livro</title>
</head>
<?php require_once('menu.php'); ?>

<body>

    <form method="POST" name="consultaLivro" action="">
        <div class="container-fluid all">
        <h1>Consulta de Livro</h1>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <label for="autoSizingInput">ISBN*</label>
                    <input type="text" class="form-control" required name="isbn" id="isbn" maxlenght="13" placeholder="1234567891234">
                </div>

                <div class="col-md-2 divBtn">
                    <input type="submit" class="form-control" name="btnPesquisar" value="Pesquisar"></input>
                </div>
                <div class="col-md-3"><h6 style="margin-top: 30px; text-align: right;">Campos obrigatórios*</h6></div>
                <div class="col-md-2"></div>
            </div>

            <div class="row"> 
                <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <label for="autoSizingInput">Título*</label>
                        <input type="text" class="form-control" disabled required name="nome" id="nome" maxlenght="80">
                    </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <label for="autoSizingInput">Autor*</label>
                    <input type="text" class="form-control" disabled required name="autor" id="autor" maxlenght="80">
                </div>
                <div class="col-md-2">
                    <label for="autoSizingInput">Editora*</label>
                    <input type="text" class="form-control" disabled required name="editora" id="editora" maxlenght="50">
                </div>
                <div class="col-md-2"></div>               
            </div>

            <div class="row">
                <div class="col-md-2"></div>               
                <div class="col-md-1">
                    <label for="autoSizingInput">Páginas</label>
                    <input type="text" class="form-control" disabled name="numPag" id="numPag" maxlenght="5">
                </div>

                <div class="col-md-1">
                    <label for="autoSizingInput">Edição</label>
                    <input type="text" class="form-control" disabled name="numEdicao" id="numEdicao" maxlenght="5">
                </div>

                <div class="col-md-1">
                    <label for="autoSizingInput">Ano*</label>
                    <input type="text" class="form-control" disabled required name="ano" id="ano" maxlenght="4">
                </div>

                <div class="col-md-3">
                    <label for="autoSizingInput">Categoria*</label>
                    <input type="text" class="form-control" disabled required name="categoria" id="categoria" maxlenght="50">
                </div>
                <div class="col-md-2">
                    <label for="autoSizingInput">Quantidade Disponível</label>
                    <input type="text" class="form-control" disabled required name="qtdDisponivel" id="qtdDisponivel" maxlenght="50">
                </div>
                <div class="col-md-2"></div>
            </div>


            <div class="row divBtn">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <input type="submit" name="btnDeletar" id="btnDeletar" disabled onclick="return confirm('Deseja realmente excluir este livro?');" value="Deletar">
                </div>

                <div class="col-md-2">
                    <input type="button" onclick="habilitaCampos()" disabled id="btnEditar" name="btnEditar" value="Editar">
                </div>

                <div class="col-md-2">
                    <input type="submit" name="btnSalvar" id="btnSalvar" disabled value="Salvar">
                </div>

                <div class="col-md-2">
                    <a href="consultaLivro.php"><input type="button" value="Cancelar"></a>
                </div>
                <div class="col-md-2"></div>
            </div>
            
        </div>
    </form>

    <?php

    if (isset($_POST['btnPesquisar'])) {
        $isbn = addslashes($_POST['isbn']);

        /* verificar se esta preenchido */

        /* Conecta o BD */
        require_once 'conexaoBD.php';

        /* verifica se o livro ja está cadastrado no BD */
        $sql = $conexao->prepare("SELECT isbn FROM livro WHERE isbn = :i");
        $sql->bindParam(":i", $isbn);
        $sql->execute();
        if ($sql->rowCount() != 0) {
            /* Se não está cadastrada no BD (=0), efetua o cadastro */
            $sql2 = $conexao->prepare("SELECT * FROM livro WHERE isbn = :i");
            $sql2->bindParam(":i", $isbn);
            $sql2->execute();
            $linha = $sql2->fetchAll(PDO::FETCH_ASSOC);
            foreach ($linha as $dado) {
                echo '<script>document.getElementById("isbn").value="' . $dado['isbn'] . '";</script>';
                echo '<script>document.getElementById("nome").value="' . $dado['nome'] . '";</script>';
                echo '<script>document.getElementById("numPag").value="' . $dado['numPag'] . '";</script>';
                echo '<script>document.getElementById("autor").value="' . $dado['autor'] . '";</script>';
                echo '<script>document.getElementById("categoria").value="' . $dado['categoria'] . '";</script>';
                echo '<script>document.getElementById("numEdicao").value="' . $dado['numEdicao'] . '";</script>';
                echo '<script>document.getElementById("ano").value="' . $dado['ano'] . '";</script>';
                echo '<script>document.getElementById("editora").value="' . $dado['editora'] . '";</script>';
                echo '<script>document.getElementById("qtdDisponivel").value="' . $dado['qtd_copias'] . '";</script>';
                echo '<script>document.getElementById("btnEditar").disabled = false;</script>';
                echo '<script>document.getElementById("btnDeletar").disabled = false;
                </script>';
            }
        } else {
            echo "<script>alert('Livro não encontrado.');</script>";
        }
    }

    if (isset($_POST['btnSalvar'])) {
        $isbn = addslashes($_POST['isbn']);
        $nome = addslashes($_POST['nome']);
        $autor = addslashes($_POST['autor']);
        $categoria = addslashes($_POST['categoria']);
        $ano = addslashes($_POST['ano']);
        $editora = addslashes($_POST['editora']);
        $qtdCopias = addslashes($_POST['qtdDisponivel']);

        if (!empty($_POST['numPag'])) {
            $numPag = addslashes($_POST['numPag']);
        } else {
            $numPag = NULL;
        }

        if (!empty($_POST['numEdicao'])) {
            $numEdicao = addslashes($_POST['numEdicao']);
        } else {
            $numEdicao = NULL;
        }

        /* Conecta o BD */
        require_once 'conexaoBD.php';

        $sql_up = $conexao->prepare("UPDATE livro SET nome = :n, numPag = :nmp, autor = :a, categoria = :c, numEdicao = :nme, ano = :y, editora = :e, qtd_copias = :q WHERE isbn = :i");
        $sql_up->bindParam(":n", $nome);
        $sql_up->bindParam(":nmp", $numPag);
        $sql_up->bindParam(":a", $autor);
        $sql_up->bindParam(":c", $categoria);
        $sql_up->bindParam(":nme", $numEdicao);
        $sql_up->bindParam(":y", $ano);
        $sql_up->bindParam(":e", $editora);
        $sql_up->bindParam(":q", $qtdCopias);
        $sql_up->bindParam(":i", $isbn);
        $retorno = $sql_up->execute();
        /* $retorno = $sql_up->fetchAll(PDO::FETCH_ASSOC); */

        if ($retorno != null) {
            echo "<script>alert('Alterações realizadas com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro.'); history.back();</script>";
        }
    }

    if (isset($_POST['btnDeletar'])) {
        $isbn = addslashes($_POST['isbn']);

        /* Conecta o BD */
        require_once 'conexaoBD.php';

        $sql_del = $conexao->prepare("DELETE FROM livro WHERE isbn = :i");

        $sql_del->bindParam(":i", $isbn);
        $retorno = $sql_del->execute();

        if ($retorno != null) {
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
            echo "<script>location.href='consultaLivro.php'</script>";
        } else {
            echo "<script>alert('Erro.'); history.back();</script>";
        }
    }

    ?>

    <script>
        function habilitaCampos() {
            /* document.getElementById("isbn").disabled = true; */
            document.getElementById("nome").disabled = false;
            document.getElementById("numPag").disabled = false;
            document.getElementById("autor").disabled = false;
            document.getElementById("categoria").disabled = false;
            document.getElementById("numEdicao").disabled = false;
            document.getElementById("ano").disabled = false;
            document.getElementById("editora").disabled = false;
            document.getElementById("qtdDisponivel").disabled = false;
            document.getElementById("btnSalvar").disabled = false;
        }
    </script>
</body>

</html>