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
    <title>Consultar Cliente</title>
</head>
<?php require_once('menu.php'); ?>
<body>
    <form method="POST" name="consultaCliente" action="">
        <div class="container-fluid all">
        <h1>Consulta de Cliente</h1>
            <div class="row">
                <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <label for="autoSizingInput">CPF*</label>
                        <input type="text" class="form-control" required name="cpf" id="cpf" maxlenght="11" placeholder="12345678912">
                    </div>

                    <div class="col-md-2 divBtn">
                        <input type="submit" class="form-control" name="btnPesquisar" value="Pesquisar"></input>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-2"><h6 style="margin-top: 30px; text-align: right;">Campos obrigatórios*</h6></div>
                    <div class="col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <label for="autoSizingInput">Nome Completo*</label>
                    <input type="text" class="form-control" disabled required name="nome" id="nome" maxlenght="80">
                </div>

                <div class="col-md-2">
                    <label for="autoSizingInput">RG*</label>
                    <input type="text" class="form-control" disabled required name="rg" id="rg" maxlenght="10">
                </div>    
                <div class="col-md-1"></div>            
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <label for="autoSizingInput">Email*</label>
                    <input type="text" class="form-control" disabled required name="email" id="email" maxlenght="80">
                </div>

                <div class="col-md-2">
                    <label for="autoSizingInput">Telefone</label>
                    <input type="text" class="form-control" disabled name="telefone" id="telefone" maxlenght="13">
                </div>
                <div class="col-md-2">
                    <label for="autoSizingInput">Data de Nascimento*</label>
                    <input type="date" class="form-control" disabled required name="data_nascimento" required id="data_nascimento">
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <label for="autoSizingInput">Logradouro*</label>
                    <input type="text" class="form-control" disabled required name="logradouro" id="logradouro" maxlenght="80">
                </div>

                <div class="col-md-1">
                    <label for="autoSizingInput">Número</label>
                    <input type="text" class="form-control" disabled name="numero" id="numero" maxlenght="10">
                </div>

                <div class="col-md-2">
                    <label for="autoSizingInput">CEP*</label>
                    <input type="text" class="form-control" disabled required name="cep" id="cep" maxlenght="8">
                </div>

                <div class="col-md-2">
                    <label for="autoSizingInput">Bairro*</label>
                    <input type="text" class="form-control" disabled required name="bairro" id="bairro" maxlenght="50">
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <label for="autoSizingInput">Cidade*</label>
                    <input type="text" class="form-control" disabled required name="cidade" id="cidade" maxlenght="50">
                </div>

                <div class="col-md-3">
                    <label class="selection"  for="autoSizingInput">Estado*</label>
                    <select class="form-select" disabled required id="uf" name="uf" required aria-label="estados">
                        <option value="" selected>Selecione</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BH">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">PernambucoPiauí</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="autoSizingInput">Complemento</label>
                    <input type="text" class="form-control" disabled name="complemento" id="complemento" maxlenght="30">
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row divBtn">
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <input type="submit" name="btnDeletar" id="btnDeletar" disabled onclick="return confirm('Deseja realmente excluir este cliente?');" value="Deletar">
                </div>

                <div class="col-md-2">
                    <input type="button" onclick="habilitaCampos()" disabled name="btnEditar" id="btnEditar" value="Editar">
                </div>

                <div class="col-md-2">
                    <input type="submit" disabled id="btnSalvar" name="btnSalvar" value="Salvar">
                </div>

                <div class="col-md-2">
                    <a href="consultaCliente.php"><input type="button" value="Cancelar"></a>
                </div>
                <div class="col-md-1"></div>
            </div>

            

        </div>

    </form>


    <?php

    if (isset($_POST['btnPesquisar'])) {

        $cpf = addslashes($_POST['cpf']);

        /* verificar se esta preenchido */

        /* Conecta o BD */
        require_once 'conexaoBD.php';

        /* verifica se o cliente ja está cadastrado no BD */
        $sql = $conexao->prepare("SELECT cpf FROM cliente WHERE cpf = :c");
        $sql->bindParam(":c", $cpf);
        $sql->execute();
        if ($sql->rowCount() != 0) {
            /* Se não está cadastrada no BD (=0), efetua o cadastro */
            $sql2 = $conexao->prepare("SELECT * FROM cliente WHERE cpf = :c");
            $sql2->bindParam(":c", $cpf);
            $sql2->execute();
            $linha = $sql2->fetchAll(PDO::FETCH_ASSOC);
            foreach ($linha as $dado) {
                echo '<script>document.getElementById("nome").value="' . $dado['nome'] . '";</script>';
                echo '<script>document.getElementById("rg").value="' . $dado['rg'] . '";</script>';
                echo '<script>document.getElementById("cpf").value="' . $dado['cpf'] . '";</script>';
                echo '<script>document.getElementById("data_nascimento").value="' . $dado['data_nascimento'] . '";</script>';
                echo '<script>document.getElementById("email").value="' . $dado['email'] . '";</script>';
                echo '<script>document.getElementById("telefone").value="' . $dado['telefone'] . '";</script>';
                echo '<script>document.getElementById("logradouro").value="' . $dado['logradouro'] . '";</script>';
                echo '<script>document.getElementById("numero").value="' . $dado['numero'] . '";</script>';
                echo '<script>document.getElementById("cep").value="' . $dado['cep'] . '";</script>';
                echo '<script>document.getElementById("bairro").value="' . $dado['bairro'] . '";</script>';
                echo '<script>document.getElementById("cidade").value="' . $dado['cidade'] . '";</script>';
                echo '<script>document.getElementById("uf").value="' . $dado['uf'] . '";</script>';
                echo '<script>document.getElementById("complemento").value="' . $dado['complemento'] . '";</script>';
                echo '<script>document.getElementById("btnEditar").disabled = false;</script>';
                echo '<script>document.getElementById("btnDeletar").disabled = false;
                </script>';
            }
        } else {
            echo "<script>alert('Cliente não encontrado!');</script>";
        }
    }

    if (isset($_POST['btnSalvar'])) {
        $nome = addslashes($_POST['nome']);
        $rg = addslashes($_POST['rg']);
        $cpf = addslashes($_POST['cpf']);
        $dtNasc = addslashes($_POST['data_nascimento']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $logradouro = addslashes($_POST['logradouro']);
        $numero = addslashes($_POST['numero']);
        $cep = addslashes($_POST['cep']);
        $bairro = addslashes($_POST['bairro']);
        $cidade = addslashes($_POST['cidade']);
        $estado = addslashes($_POST['uf']);
        $complemento = addslashes($_POST['complemento']);

        /* Conecta o BD */
        require_once 'conexaoBD.php';

        $sql_up = $conexao->prepare("UPDATE cliente SET nome = :n, rg = :rg, data_nascimento = :dtn, email = :e, telefone = :t, 
        logradouro = :l, numero = :num, cep = :cep, bairro = :b, cidade = :cid, uf = :est, complemento = :comp WHERE cpf = :c");
        $sql_up->bindParam(":n", $nome);
        $sql_up->bindParam(":rg", $rg);
        $sql_up->bindParam(":dtn", $dtNasc);
        $sql_up->bindParam(":e", $email);
        $sql_up->bindParam(":t", $telefone);
        $sql_up->bindParam(":l", $logradouro);
        $sql_up->bindParam(":num", $numero);
        $sql_up->bindParam(":cep", $cep);
        $sql_up->bindParam(":b", $bairro);
        $sql_up->bindParam(":cid", $cidade);
        $sql_up->bindParam(":est", $estado);
        $sql_up->bindParam(":comp", $complemento);
        $sql_up->bindParam(":c", $cpf);
        $retorno = $sql_up->execute();
        /* $retorno = $sql_up->fetchAll(PDO::FETCH_ASSOC); */

        if ($retorno != null) {
            echo "<script>alert('Alterações realizadas com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro.'); history.back();</script>";
        }
    }

    if (isset($_POST['btnDeletar'])) {
        $cpf = addslashes($_POST['cpf']);

        /* Conecta o BD */
        require_once 'conexaoBD.php';

        $sql_del = $conexao->prepare("DELETE FROM cliente WHERE cpf = :c");

        $sql_del->bindParam(":c", $cpf);
        $retorno = $sql_del->execute();

        if ($retorno != null) {
            echo "<script>alert('Exclusão realizada com sucesso!');</script>";
            echo "<script>location.href='consultaCliente.php'</script>";
        } else {
            echo "<script>alert('Erro.'); history.back();</script>";
        }
    }

    ?>

    <script>
        function habilitaCampos() {
            /* document.getElementById("cpf").disabled = true; */
            document.getElementById("nome").disabled = false;
            document.getElementById("rg").disabled = false;
            document.getElementById("data_nascimento").disabled = false;
            document.getElementById("email").disabled = false;
            document.getElementById("telefone").disabled = false;
            document.getElementById("logradouro").disabled = false;
            document.getElementById("numero").disabled = false;
            document.getElementById("cep").disabled = false;
            document.getElementById("bairro").disabled = false;
            document.getElementById("cidade").disabled = false;
            document.getElementById("uf").disabled = false;
            document.getElementById("complemento").disabled = false;
            document.getElementById("btnSalvar").disabled = false;
        }
    </script>
</body>

</html>