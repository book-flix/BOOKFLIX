<?php
require_once 'conexaoBD.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $conexao->prepare("SELECT nome FROM login_usuario WHERE email = :e AND senha = :s");

$senha = md5($senha);
$sql->bindParam(':e', $email);
$sql->bindParam(':s', $senha);

$sql->execute();
/* echo $resultado; */

if ($sql->rowCount() > 0) {
    //entrar na sessão
    $dado = $sql->fetch();
    session_start();
    $_SESSION['nome'] = $dado['nome'];
    echo "<script>location.href='paginaInicial.php'</script>"; //logado com sucesso
} else {
    echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>"; //não foi possível logar
}

?>
</div>
<? /*php require_once ('rodape.php');  */ ?>