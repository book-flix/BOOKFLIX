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
    <title>Empréstimo</title>
</head>

<?php require_once('menu.php'); ?>

<body>

<form method="POST" name="emprestimo" action="">
        <div class="container-fluid">
            <h1>Efetuar Empréstimo</h1>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <label for="autoSizingInput">CPF do Cliente*</label>
                    <input type="text" class="form-control" required name="cpf" id="cpf" maxlenght="11" placeholder="12345678912">
                </div>

                <div class="col-md-2">
                    <label for="autoSizingInput">ISBN*</label>
                    <input type="text" class="form-control" required name="isbn" id="isbn" maxlenght="13" placeholder="1234567891234">
                </div>
                <div class="col-md-2 divBtn">
                    <input type="submit" class="form-control" name="btnBuscar" value="Buscar"></input>
                </div>
                <div class="col-md-3"></div>
            </div>
            
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <label for="autoSizingInput">Nome do Cliente</label>
                    <input type="text" class="form-control" disabled required name="nome" id="nome" maxlenght="80">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <label for="autoSizingInput">Título do Livro</label>
                    <input type="text" class="form-control" disabled required name="titulo" id="titulo" maxlenght="80">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <label for="autoSizingInput">Data</label>
                    <input type="date" class="form-control" required disabled name="data_emp" id="data_emp">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <label for="autoSizingInput">Devolução</label>
                    <input type="date" class="form-control" required disabled name="data_dev" id="data_dev">
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2"><h6 style="margin: 10px;">Campos Obrigatórios*</h6></div>
                <div class="divBtn col-md-2">
                    <input type="submit" name="btnSalvar" disabled id="btnSalvar" value="Salvar">
                </div>

                <div class="divBtn col-md-2">
                    <a href="emprestimo.php"><input type="button" value="Cancelar"></a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
</form>

    <?php require_once('verificarAcesso.php');
    function buscaCli_Livro()
    {
        require_once('conexaoBD.php');
        $cpf = addslashes($_POST['cpf']);

        /* verifica se CPF digitado está cadastrado no sistema */
        $sql = $conexao->prepare("SELECT cpf FROM cliente WHERE cpf = :c");
        $sql->bindParam(":c", $cpf);
        $sql->execute();
        if ($sql->rowCount() != 0) {
            /* verifica pendencias */
            $sql = $conexao->prepare("SELECT cpf_cliente_operacao FROM emprestimo WHERE cpf_cliente_operacao = :c AND situacao = 'Pendente'");
            $sql->bindParam(":c", $cpf);
            $sql->execute();
            if ($sql->rowCount() == 0) {

                $sql = $conexao->prepare("SELECT cpf, nome FROM cliente WHERE  cpf = :c;");
                $sql->bindParam(":c", $_POST['cpf']);
                $sql->execute();
                $linha = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach ($linha as $dado) {
                    echo '<script>document.getElementById("cpf").value="' . $dado['cpf'] . '";</script>';
                    echo '<script>document.getElementById("nome").value="' . $dado['nome'] . '";</script>';
                }
            } else {
                echo "<script>alert('CPF possui empréstimo pendente!'); location.href='emprestimo.php'</script>";
                return;
            }
        } else {
            echo "<script>alert('CPF não cadastrado!'); location.href='emprestimo.php'</script>";
            return;
        }

        $isbn = addslashes($_POST['isbn']);

        /* verifica se ISBN digitado está cadastrado no sistema */
        $sql = $conexao->prepare("SELECT isbn FROM livro WHERE isbn = :i");
        $sql->bindParam(":i", $isbn);
        $sql->execute();
        if ($sql->rowCount() != 0) {
            /* verifica se está disponível */
            $sql = $conexao->prepare("SELECT isbn FROM livro WHERE isbn = :i AND qtd_copias > 0");
            $sql->bindParam(":i", $isbn);
            $sql->execute();
            if ($sql->rowCount() != 0) {

                $sql = $conexao->prepare("SELECT isbn, nome FROM livro WHERE isbn = :i;");
                $sql->bindParam(":i", $_POST['isbn']);
                $sql->execute();
                $linha = $sql->fetchAll(PDO::FETCH_ASSOC);
                foreach ($linha as $dado) {
                    echo '<script>document.getElementById("isbn").value="' . $dado['isbn'] . '";</script>';
                    echo '<script>document.getElementById("titulo").value="' . $dado['nome'] . '";</script>';
                }
            } else {
                echo "<script>alert('Livro não disponivel para empréstimo!'); location.href='emprestimo.php'</script>";
                return;
            }
        } else {
            echo "<script>alert('ISBN não cadastrado!'); location.href='emprestimo.php'</script>";
            return;
        }
    }

    if (isset($_POST['btnBuscar'])) {
        buscaCli_Livro();

        echo '<script>document.getElementById("data_emp").disabled = false;</script>';
        echo '<script>document.getElementById("data_dev").disabled = false;</script>';
        echo '<script>document.getElementById("btnSalvar").disabled = false;</script>';
    } else if (isset($_POST['btnSalvar'])) {
        require_once('conexaoBD.php');
        $dataEmp = addslashes($_POST['data_emp']);
        $dataDev = addslashes($_POST['data_dev']);
        $cpf = addslashes($_POST['cpf']);
        $isbn = addslashes($_POST['isbn']);

        $sql = $conexao->prepare("INSERT INTO emprestimo(data_emprestimo, data_devolucao, cpf_cliente_operacao, isbn_livro_operacao) VALUES (:dte, :dtd, :c, :i)");
        $sql->bindParam(":dte", $dataEmp);
        $sql->bindParam(":dtd", $dataDev);
        $sql->bindParam(":c", $cpf);
        $sql->bindParam(":i", $isbn);

        if ($sql->execute() === TRUE) {
            $codOp = $conexao->lastInsertId();
            echo '<script>alert("Empréstimo Efetuado com Sucesso! Código da operação: '. $codOp .' ")</script>';
            $sql = $conexao->prepare("UPDATE livro SET qtd_copias = qtd_copias - 1 WHERE isbn = :i");
            $sql->bindParam(":i", $isbn);
            $sql->execute();
        } else {
            echo '<script>alert("Erro!")</script>';
        }
    }
    ?>
</body>
</html>