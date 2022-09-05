<?php require_once('verificarAcesso.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        src = "js/jquery.min.js"
    </script>
    <script>
        src = "js/jquery.mask.min.js"
    </script>
    <script>
        src = "js/bootstrap.min.js"
    </script>
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloCad.css">
    <title>Devolução</title>
</head>

<?php require_once('menu.php'); ?>

<body>

    <form method="POST" name="devolucao" action="">
        <div class="container-fluid">
            <h1>Efetuar Devolução</h1>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-1">
                    <label for="autoSizingInput">Operação*</label>
                    <input type="text" class="form-control" required name="operacao_emprestimo" id="operacao_emprestimo" placeholder="1">
                </div>

                <div class="col-md-1 divBtn">
                    <input type="submit" name="btnBuscar" id="btnBuscar" value="Buscar">
                </div>
                <div class="col-md-2">
                    <h6 style="margin-top: 30px; text-align: right;">Campos obrigatórios*</h6>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <label for="autoSizingInput">Cliente</label>
                    <input type="text" class="form-control" disabled required name="nome_cliente" id="nome_cliente" maxlenght="80">
                </div>
                <div class="col-md-2">
                    <label for="autoSizingInput">CPF</label>
                    <input type="text" class="form-control" disabled required name="cpf_cliente_operacao" id="cpf_cliente_operacao" maxlenght="11">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-4">
                    <label for="autoSizingInput">Livro</label>
                    <input type="text" class="form-control" disabled required name="titulo" id="titulo" maxlenght="80">
                </div>
                <div class="col-md-2">
                    <label for="autoSizingInput">ISBN</label>
                    <input type="text" class="form-control" disabled required name="isbn" id="isbn" maxlenght="11">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <label for="autoSizingInput">Data de Empréstimo</label>
                    <input type="date" class="form-control" required disabled name="dataEmp" id="dataEmp">
                </div>
                <div class="col-md-3">
                    <label for="autoSizingInput">Data da Devolução</label>
                    <input type="date" class="form-control" required disabled name="dataDev" id="dataDev">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <label class="selection" for="autoSizingInput">Motivo **</label>
                    <select class="form-select selectMot" name="motivo" required disabled aria-label="motivo" id="motivo">
                        <option value="" selected>Selecione</option>
                        <option value="Atraso até 30 dias">Atraso até 30 dias</option>
                        <option value="Atraso +30 dias">Atraso acima de 30 dias</option>
                        <option value="Danificado">Livro danificado</option>
                    </select>
                </div>

                <div class="col-md-1">
                    <label for="autoSizingInput">Valor R$ **</label>
                    <input type="text" class="form-control" disabled name="valor" id="valor">
                </div>
                <div class="col-md-2 divBtn">
                    <input type="button" onclick="habilitaCampos()" name="btnMulta" id="btnMulta" disabled value="Cobrar multa">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3"></div>
            </div>

            <div class="row divBtn">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <h6 style="margin: 0px 0px 10px 5px; text-align: justify">Campos Obrigatórios** em caso de cobrança de multa</h6>
                </div>
                <div class="col-md-2">
                    <input type="submit" name="btnSalvar" id="btnSalvar" disabled value="Salvar">
                </div>

                <div class="col-md-2">
                    <a href="devolucao.php"><input type="button" value="Cancelar"></a>
                </div>
                <div class="col-md-2"></div>

                <div class="col-md-3"></div>
            </div>

    </form>

    <?php
    if (isset($_POST['btnBuscar'])) {
        require_once('conexaoBD.php');

        $codOp = addslashes($_POST['operacao_emprestimo']);

        $sql = $conexao->prepare("SELECT e.operacao, e.data_emprestimo, e.data_devolucao, e.situacao, e.cpf_cliente_operacao, isbn_livro_operacao, l.nome AS titulo, c.nome AS nome_cliente FROM emprestimo e INNER JOIN cliente c ON e.cpf_cliente_operacao = c.cpf INNER JOIN livro l ON e.isbn_livro_operacao = l.isbn WHERE e.operacao = :c");

        $sql->bindParam(":c", $codOp);
        $sql->execute();
        if ($sql->rowCount() != 0) {
            $linha = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($linha as $dado) {

                echo '<script>document.getElementById("operacao_emprestimo").value="' . $dado['operacao'] . '";</script>';
                echo '<script>document.getElementById("dataDev").value="' . $dado['data_devolucao'] . '";</script>';
                echo '<script>document.getElementById("nome_cliente").value="' . $dado['nome_cliente'] . '";</script>';
                echo '<script>document.getElementById("cpf_cliente_operacao").value="' . $dado['cpf_cliente_operacao'] . '";</script>';
                echo '<script>document.getElementById("titulo").value="' . $dado['titulo'] . '";</script>';
                echo '<script>document.getElementById("isbn").value="' . $dado['isbn_livro_operacao'] . '";</script>';
                echo '<script>document.getElementById("dataEmp").value="' . $dado['data_emprestimo'] . '";</script>';

                echo '<script>document.getElementById("btnMulta").disabled = false;</script>';
                echo '<script>document.getElementById("btnSalvar").disabled = false;</script>';
            }
        } else {
            echo "<script>alert('Operação não encontrada!');</script>";
            return;
        }
    }

    if (isset($_POST['btnSalvar'])) {
        require_once('conexaoBD.php');

        $codOp = addslashes($_POST['operacao_emprestimo']);

        $sql = $conexao->prepare("SELECT * FROM emprestimo WHERE operacao = :c");
        $sql->bindParam(":c", $codOp);
        $sql->execute();

        $linha = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($linha as $dado) {
            $isbn = $dado['isbn_livro_operacao'];
            $situacao = $dado['situacao'];
        }

        if ($situacao == 'Pendente') {

            $sql = $conexao->prepare("UPDATE emprestimo SET situacao = 'Devolvido' WHERE operacao = :c");
            $sql->bindParam(":c", $codOp);

            if ($sql->execute()) {
                $sql = $conexao->prepare("UPDATE livro SET qtd_copias = qtd_copias + 1 WHERE isbn = :i");
                $sql->bindParam(":i", $isbn);
                $sql->execute();


                if (isset($_POST['motivo']) && isset($_POST['valor'])) {
                    $motivo = addslashes($_POST['motivo']);
                    $valor = addslashes($_POST['valor']);

                    $sql = $conexao->prepare("INSERT INTO caixa(motivo, valor, operacao_emprestimo) VALUES (:m, :v, :op)");
                    $sql->bindParam(":m", $motivo);
                    $sql->bindParam(":v", $valor);
                    $sql->bindParam(":op", $codOp);
                    if ($sql->execute()) {
                        echo "<script>alert('Multa registrada com sucesso')</script>";
                    }
                }

                echo "<script>alert('Devolução registrada com sucesso')</script>";
            } else {
                echo "<script>alert('Erro ao registrar devolução')</script>";
            }
        } else {
            echo "<script>alert('Este livro já foi devolvido!');</script>";
            return;
        }
    }
    ?>

    <script>
        function habilitaCampos() {
            document.getElementById("motivo").disabled = false;
            document.getElementById("valor").disabled = false;
        }
    </script>

</body>

</html>