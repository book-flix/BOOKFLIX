<?php require_once('verificarAcesso.php');

if (isset($_POST['nome'])) {
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

    /* verificar se esta preenchido */

    /* Conecta o BD */
    require_once 'conexaoBD.php';

    /* verifica se o cliente ja está cadastrado no BD */
    $sql = $conexao->prepare("SELECT cpf FROM cliente WHERE cpf = :c");
    $sql->bindValue(":c", $cpf);
    $sql->execute();
    if ($sql->rowCount() == 0) {
        /* Se não está cadastrada no BD (=0), efetua o cadastro */
        $sql2 = $conexao->prepare("INSERT INTO cliente (nome, rg, cpf, data_nascimento, email, telefone, logradouro, numero, 
            cep, bairro, cidade, uf, complemento) VALUES (:n, :rg, :c, :dtn, :e, :t, :l, :num, :cep, :b, :cid, :est, :comp)");
        $sql2->bindValue(":n", $nome);
        $sql2->bindValue(":rg", $rg);
        $sql2->bindValue(":c", $cpf);
        $sql2->bindValue(":dtn", $dtNasc);
        $sql2->bindValue(":e", $email);
        $sql2->bindValue(":t", $telefone);
        $sql2->bindValue(":l", $logradouro);
        $sql2->bindValue(":num", $numero);
        $sql2->bindValue(":cep", $cep);
        $sql2->bindValue(":b", $bairro);
        $sql2->bindValue(":cid", $cidade);
        $sql2->bindValue(":est", $estado);
        $sql2->bindValue(":comp", $complemento);
        $sql2->execute();

        /* Criar estrutura de verificação para saber se o cadastro foi realmente efetuado*/
        echo "<script>alert('Cliente cadastrado com sucesso!');</script>";
        echo "<script>location.href='cadCliente.php'</script>";
    } else {
        echo "<script>alert('Cliente já cadastrado.'); history.back();</script>";
    }
}
