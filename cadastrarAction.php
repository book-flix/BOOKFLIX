<?php

if (isset($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $cpf = addslashes($_POST['cpf']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);

    /* Conecta o BD */
    require_once 'conexaoBD.php';

    /* Confirma se as Senhas estão iguais */
    if ($senha == $confirmarSenha) {
        /* verifica se o CPF ja existe no BD */
        $sql = $conexao->prepare("SELECT cpf FROM login_usuario WHERE cpf = :c");
        $sql->bindValue(":c", $cpf);
        $sql->execute();
        if ($sql->rowCount() == 0) {
            /* Se não existe no BD (=0), efetua o cadastro */
            $sql2 = $conexao->prepare("INSERT INTO login_usuario (nome, cpf, telefone, email, senha) VALUES (:n, :c, :t, :e, :s)");
            $sql2->bindValue(":n", $nome);
            $sql2->bindValue(":c", $cpf);
            $sql2->bindValue(":t", $telefone);
            $sql2->bindValue(":e", $email);
            $sql2->bindValue(":s", md5($senha));
            $sql2->execute();

            /* Criar estrutura de verificação para saber se o cadastro foi realmente efetuado */
            echo "<script>alert('Cadastrado com sucesso. Acesse para entrar!'); </script>";
            echo "<script>location.href='index.php'</script>";
        } else {
            echo "<script>alert('Usuário já cadastrado. Clique em Recuperar Senha!'); history.back();</script>";
        }
    } else {
        echo "<script>alert('Senha e confirmar senha não correspondem!'); history.back();</script>";
    }
}
