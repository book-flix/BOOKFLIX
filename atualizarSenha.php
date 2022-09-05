<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <title>Atualizar Senha</title>
    <style>
        .lblInsiraCodigo {
            font-size: 16pt;
            color: white;
            text-shadow: -1px -1px 0px #000, -1px 1px 0px #000, 1px -1px 0px #000, 1px 0px 0px #000;
            font-family: Arial, Helvetica, sans-serif;
        }

        #btnAtualizar {
            margin: 5px 0px 3px 0px;
            border-radius: 30px;
            height: auto;
            border: 1px solid brown;
            font-size: 16pt;
            padding: 10px 10px 10px 10px;
            text-align: center;
            cursor: pointer;
            color: white;
            background-color: brown;
        }
    </style>

</head>

<body>
    <div class="container">
        <div>
            <h1>Atualizar Senha</h1>
            <form method="POST" action="">

                <div class="container-fluid form-login">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <label class="lblInsiraCodigo">Insira o código recebido por email para atualizar a senha.</label><br>
                            <input type="text" id="codSeguranca" name="codigoSeguranca" placeholder="Código de Segurança" for="autoSizingInput" maxlenght="15" required>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input name="novaSenha" type="password" placeholder="Nova Senha" for="autoSizingInput" id="NovaSenha" maxlenght="15" required>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input type="password" name="confNovaSenha" id="confNovaSenha" placeholder="Confirmar Senha" for="autoSizingInput" maxlenght="15" required>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_POST['btnAtualizar'])) {
                    require_once("conexaoBD.php");
                    $codSeguranca = addslashes($_POST['codigoSeguranca']);

                    $sql = $conexao->prepare("SELECT id_login FROM login_usuario WHERE recup_senha = :codSeguranca ");

                    $sql->bindParam(':codSeguranca', $codSeguranca, PDO::PARAM_STR);

                    $sql->execute();

                    if ($sql->rowCount() > 0) {
                        $dado = $sql->fetch(PDO::FETCH_ASSOC);

                        $novaSenha = $_POST['novaSenha'];
                        $confNovaSenha = $_POST['confNovaSenha'];

                        if ($novaSenha == $confNovaSenha) {
                            $novaSenha = md5($novaSenha);

                            $sql_up = $conexao->prepare("UPDATE login_usuario SET senha = :nova_senha, recup_senha = NULL WHERE id_login = :id");
                            $sql_up->bindParam(":nova_senha", $novaSenha, PDO::PARAM_STR);
                            $sql_up->bindParam(":id", $dado['id_login'], PDO::PARAM_INT);

                            if ($sql_up->execute()) {
                                echo "<script>alert('Senha Atualizada com sucesso. Acesse para entrar.'); </script>";
                                echo "<script>location.href='index.php'</script>";
                            } else {
                                echo "Erro tente novamente!";
                            }
                        } else {
                            echo '<br><div class="row align-items-center">
                            <div class="col-md-4"><label class="lblInsiraCodigo">Senhas não coincidem. Insira novamente.</label> </div>
                            </div><br>';
                        }
                    } else {
                        echo '<br><div class="row align-items-center">
                        <div class="col-md-4"><label class="lblInsiraCodigo">Código Incorreto ou Inválido. Insira novamente</label> </div>
                        </div><br>';
                        echo "<script>h</script>";
                    }
                }
                ?>

                <div class="row divBtn">
                    <div class="col-md-2 btn2">
                        <input type="button" onclick="limpar()" value="Limpar">
                    </div>

                    <div class="col-md-2 btn2">
                        <input type="submit" value="Atualizar" name="btnAtualizar">
                    </div>
                </div>
            </form>
            <div class="container-fluid form-login">
                <a href="index.php"><input type="button" value="Voltar"></a>
            </div>

        </div>

    </div>

    <script>
        function limpar() {
            document.getElementById('codSeguranca').value = null;
            document.getElementById('NovaSenha').value = null;
            document.getElementById('confNovaSenha').value = null;
        }
    </script>
</body>

</html>