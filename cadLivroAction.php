<?php require_once('verificarAcesso.php');

if (isset($_POST['nome'])) {
        $isbn = addslashes($_POST['isbn']);
        $nome = addslashes($_POST['nome']);
        $numPag = addslashes($_POST['numPag']);
        $autor = addslashes($_POST['autor']);
        $numEdicao = addslashes($_POST['numEdicao']);
        $categoria = addslashes($_POST['categoria']);
        $ano = addslashes($_POST['ano']);
        $editora = addslashes($_POST['editora']);

        /* verificar se esta preenchido */
        if (!empty($nome) && !empty($numPag) && !empty($autor) && !empty($numEdicao) && !empty($ano) && !empty($editora)) {
                /* Conecta o BD */
                require_once 'conexaoBD.php';

                /* verifica se o cliente ja está cadastrado no BD */
                $sql = $conexao->prepare("SELECT isbn FROM livro WHERE isbn = :i");
                $sql->bindParam(":i", $isbn);
                $sql->execute();
                if ($sql->rowCount() == 0) {
                        /* Se não está cadastrada no BD (=0), efetua o cadastro */
                        $sql_ins = $conexao->prepare("INSERT INTO livro (isbn, nome, numPag, autor, numEdicao, categoria, ano, editora) VALUES (:i, :n, :nmp, :a, :nme, :cat, :ano, :edt)");
                        $sql_ins->bindParam(":i", $isbn);
                        $sql_ins->bindParam(":n", $nome);
                        $sql_ins->bindParam(":nmp", $numPag);
                        $sql_ins->bindParam(":a", $autor);
                        $sql_ins->bindParam(":nme", $numEdicao);
                        $sql_ins->bindParam(":cat", $categoria);
                        $sql_ins->bindParam(":ano", $ano);
                        $sql_ins->bindParam(":edt", $editora);
                        $sql_ins->execute();

                        /* Criar estrutura de verificação para saber se o cadastro foi realmente efetuado*/
                        echo "<script>alert('Livro cadastrado com sucesso!');</script>";
                        echo "<script>location.href='cadLivro.php'</script>";
                } else {
                        echo "<script>alert('Livro já cadastrado.'); history.back();</script>";
                }
        } else {
                echo "<script>alert('Preencha todos os campos!'); history.back();</script>";
        }
}
