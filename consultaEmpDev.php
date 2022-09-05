<?php require_once('verificarAcesso.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script> src = "js/jquery.min.js"</script>
    <script> src = "js/jquery.mask.min.js"</script>
    <script> src = "js/bootstrap.min.js" </script>
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloCad.css">

    <title>Empréstimos</title>
</head>

<?php include "menu.php"; ?>

<body>
    <form method="POST" name="consultaEmpDev" action="">

        <div class="container-fluid tbl">
            <h1>Consulta de Empréstimos</h1>
            <div class="row"> <!-- consult-->
                <div class="col-md-3">
                    <label for="autoSizingInput">Consulta por: CPF </label>
                    <input type="text" class="form-control" name="cpf" id="cpf" maxlenght="13" placeholder="12345678912">
                </div>

                <div class="col-md-1 divBtn">
                    <input type="submit" class="form-control" name="btnConsultarCPF" id="btnConsultarCPF" value="Consultar"></input>
                </div>

                <div class="col-md-3">
                    <label for="autoSizingInput">ISBN</label>
                    <input type="text" class="form-control" name="isbn" id="isbn" maxlenght="13" placeholder="1234567891234">
                </div>

                <div class="col-md-1 divBtn">
                    <input type="submit" class="form-control" name="btnConsultarISBN" id="btnConsultarISBN" value="Consultar"></input>
                </div>

                <div class="col-md-2">
                    <label class="" for="autoSizingInput">Situação</label>
                    <select class="form-select EmpSel" name="situacao" id="situacao">
                        <option value="" selected>Selecione</option>
                        <option value="Devolvido">Devolvido</option>
                        <option value="Pendente">Pendente</option>
                    </select>
                </div>

                <div class="col-md-1 divBtn">
                    <input type="submit" class="form-control" name="btnConsultarSitu" id="btnConsultarISBN" value="Consultar"></input>
                </div>

                <div class="col-md-1 divBtn btnRefresh">
                    <a class="refresh" href="consultaEmpDev.php"><i class="fa fa-refresh w3-xlarge"></i></a>
                </div>
            </div>

                <?php
                require_once 'conexaoBD.php';

                if (isset($_POST['btnConsultarISBN'])) {
                    $isbn = addslashes($_POST['isbn']);

                    /* verifica se ISBN digitado está cadastrado no sistema */
                    $sql = $conexao->prepare("SELECT isbn FROM livro WHERE isbn = :i");
                    $sql->bindParam(":i", $isbn);
                    $sql->execute();
                    if ($sql->rowCount() != 0) {
                        $sql = $conexao->prepare("SELECT e.operacao, e.cpf_cliente_operacao, e.data_emprestimo, e.data_devolucao, e.isbn_livro_operacao, e.situacao, c.nome nome_cliente, l.nome nome_livro, l.autor, l.editora, l.numEdicao, l.numPag, l.categoria, l.ano FROM emprestimo e INNER JOIN cliente c ON e.cpf_cliente_operacao = c.cpf INNER JOIN livro l ON e.isbn_livro_operacao = l.isbn  WHERE isbn_livro_operacao = :isbn ORDER BY e.operacao;");
                        $sql->bindParam(":isbn", $_POST['isbn']);
                    } else {
                        echo "<script>alert('ISBN não encontrado!'); location.href='consultaEmpDev.php'</script>";
                        return;
                    }
                } else if (isset($_POST['btnConsultarCPF'])) {
                    $cpf = addslashes($_POST['cpf']);

                    /* verifica se CPF digitado está cadastrado no sistema */
                    $sql = $conexao->prepare("SELECT cpf FROM cliente WHERE cpf = :c");
                    $sql->bindParam(":c", $cpf);
                    $sql->execute();
                    if ($sql->rowCount() != 0) {

                        $sql = $conexao->prepare("SELECT e.operacao, e.cpf_cliente_operacao, e.data_emprestimo, e.data_devolucao, e.isbn_livro_operacao, e.situacao, c.nome nome_cliente, l.nome nome_livro, l.autor, l.editora, l.numEdicao, l.numPag, l.categoria, l.ano FROM emprestimo e INNER JOIN cliente c ON e.cpf_cliente_operacao = c.cpf INNER JOIN livro l ON e.isbn_livro_operacao = l.isbn  WHERE cpf_cliente_operacao = :cpf ORDER BY e.operacao;");
                        $sql->bindParam(":cpf", $_POST['cpf']);
                    } else {
                        echo "<script>alert('CPF não encontrado!'); location.href='consultaEmpDev.php'</script>";
                        return;
                    }
                } else if (isset($_POST['btnConsultarSitu'])) {
                    $situacao = addslashes($_POST['situacao']);
                    /* verifica se CPF digitado está cadastrado no sistema */
                    $sql = $conexao->prepare("SELECT * FROM emprestimo WHERE situacao = :s");
                    $sql->bindParam(":s", $situacao);
                    $sql->execute();
                    if ($sql->rowCount() != 0) {

                        $sql = $conexao->prepare("SELECT e.operacao, e.cpf_cliente_operacao, e.data_emprestimo, e.data_devolucao, e.isbn_livro_operacao, e.situacao, c.nome nome_cliente, l.nome nome_livro, l.autor, l.editora, l.numEdicao, l.numPag, l.categoria, l.ano FROM emprestimo e INNER JOIN cliente c ON e.cpf_cliente_operacao = c.cpf INNER JOIN livro l ON e.isbn_livro_operacao = l.isbn  WHERE situacao = :s ORDER BY e.operacao;");
                        $sql->bindParam(":s", $situacao);
                    } else {
                        echo "<script>alert('Selecione uma opção!'); location.href='consultaEmpDev.php'</script>";
                        return;
                    }
                } else {

                    $sql = $conexao->prepare("SELECT e.operacao, e.cpf_cliente_operacao, e.data_emprestimo, e.data_devolucao, e.isbn_livro_operacao, e.situacao, c.nome nome_cliente, l.nome nome_livro, l.autor, l.editora, l.numEdicao, l.numPag, l.categoria, l.ano FROM emprestimo e INNER JOIN cliente c ON e.cpf_cliente_operacao = c.cpf INNER JOIN livro l ON e.isbn_livro_operacao = l.isbn ORDER BY e.operacao;");
                }

                $sql->execute();

                if ($sql->rowCount() != 0) {
                    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

                    echo '
                    <div class="table table-responsive table-sm">
                    <table class="table">
                            <thead class="columns">
                                <tr>
                                    <th>Operação</th>
                                    <th>CPF</th>
                                    <th>Cliente</th>
                                    <th>ISBN</th>
                                    <th>Titulo</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Editora</th>
                                    <th scope="col">Edição</th>
                                    <th scope="col">Páginas</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Data de Empréstimo</th>
                                    <th scope="col">Data de Devolução</th>
                                    <th scope="col">Situação</th>
                                </tr>
                            </thead>';
                    echo '<tbody>';
                    foreach ($resultado as $linha) {
                        echo '<tr scope="row" >';
                        echo '<td>' . $linha['operacao'] . '</td>';
                        echo '<td>' . $linha['cpf_cliente_operacao'] . '</td>';
                        echo '<td>' . $linha['nome_cliente'] . '</td>';
                        echo '<td>' . $linha['isbn_livro_operacao'] . '</td>';
                        echo '<td>' . $linha['nome_livro'] . '</td>';
                        echo '<td>' . $linha['autor'] . '</td>';
                        echo '<td>' . $linha['editora'] . '</td>';
                        echo '<td>' . $linha['numEdicao'] . '</td>';
                        echo '<td>' . $linha['numPag'] . '</td>';
                        echo '<td>' . $linha['categoria'] . '</td>';
                        echo '<td>' . $linha['ano'] . '</td>';
                        echo '<td>' . $linha['data_emprestimo'] . '</td>';
                        echo '<td>' . $linha['data_devolucao'] . '</td>';
                        echo '<td>' . $linha['situacao'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody>
                    </table>
                    </div>';
                } else {
                    echo "<script>alert('Nenhum registro foi encontrado!'); location.href='consultaEmpDev.php'</script>";
                }
                ?>

        </div>
    </form>
</body>

</html>