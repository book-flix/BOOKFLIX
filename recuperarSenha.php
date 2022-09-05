<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <title>Recuperar Senha</title>
    <style>
        .lblInsiraEmail {
            font-size: 16pt;
            color: white;
            text-shadow: -1px -1px 0px #000, -1px 1px 0px #000, 1px -1px 0px #000, 1px 0px 0px #000;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <h1>Recuperar Senha</h1>

            <form method="POST" action="">
                <div class="container-fluid form-login">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email" class="lblInsiraEmail">Insira o email cadastrado. Enviaremos um código de recuperação.</label>
                            <input name="email" type="email" placeholder="Email" for="autoSizingInput" id="email" maxlenght="80" required>
                        </div>
                    </div>

                    <?php
                    require_once('src/PHPMailer.php');
                    require_once('src/SMTP.php');
                    require_once('src/Exception.php');

                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;

                    /* Verifica se o email foi preenchido */

                    if (isset($_POST['email'])) {

                        require_once("conexaoBD.php");
                        $email = addslashes($_POST['email']);

                        $sql = $conexao->prepare("SELECT * FROM login_usuario WHERE email = :e ");

                        $sql->bindParam(':e', $email, PDO::PARAM_STR);

                        $sql->execute();

                        /* Verifica se o email está cadastrado */
                        if ($sql->rowCount() > 0) {
                            $dado = $sql->fetch(PDO::FETCH_ASSOC);
                            $chave_recup_senha = geraCodigo();
                            $sql_up = $conexao->prepare("UPDATE login_usuario SET recup_senha = :recup_senha WHERE id_login = :id LIMIT 1");
                            $sql_up->bindParam(":recup_senha", $chave_recup_senha, PDO::PARAM_STR);
                            $sql_up->bindParam(":id", $dado['id_login'], PDO::PARAM_INT);

                            if ($sql_up->execute()) {

                                $mail = new PHPMailer();

                                try {
                                    /*$mail->SMTPDebug = SMTP::DEBUG_SERVER;*/ /* LOGS DE ENVIO DE EMAIL */
                                    $mail->isSMTP();
                                    $mail->Host = 'email-ssl.com.br';
                                    $mail->SMTPAuth = true;
                                    $mail->Username = 'bookflix@silviosantos.dev.br';
                                    $mail->Password = '@Bookflix2022';
                                    $mail->Port = 587;
                                    $mail->setFrom('bookflix@silviosantos.dev.br');
                                    $mail->addAddress($email);
                                    /* Email Destinatário */
                                    $mail->isHTML(true);
                                    /* $mail->Username = 'Booketec'; */
                                    $mail->Subject = 'Recuperar Senha';
                                    $nome = $dado['nome'];

                                    /* AQUI PRECISO DESCOBRIR COMO COLOCAR AS FONTES DO GOOGLE */


                                    $bodyEmail = <<<HTML
                                    <div style="width: 60%; margin: 40px auto; border: 1px solid #DEE2E6; padding: 2rem 4rem; border-radius: 8px; color: #495057; box-shadow: 5px 5px 5px #eee; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: 400; font-display: swap; font-size: 0.975rem; letter-spacing: 1.5px; box-sizing: border-box;">
                                        <p style="margin-bottom: 18px; text-align: center">
                                            Olá
                                            <span style="font-size: 1.5rem; color: rgb(165,42,42); font-family: cursive; font-weight: 700; font-display: swap;">$nome</span>,
                                        </p>
                                        <div style="width: 85%; margin: 0 auto; margin-bottom: 55px; background-color: #FAFAFA; padding: 1rem 2rem 1rem 2.4rem; border-radius: 8px; text-align: center;">
                                            <p style="margin-bottom: 18px;">
                                            Utilize o código a seguir para recuperar a sua senha:
                                            </p>
                                            <span class="recovery-code" style="color: #222; display: block; background: #eee; width: 60%; margin: 40px auto; font-size: 1.8rem; border: 1px solid #DEE2E6; border-radius: 8px; padding: 0.4rem 0; font-weight: 800;">$chave_recup_senha</span>
                                            <p style="margin-bottom: 10px; ">
                                            Este código irá expirar em
                                            <span style="font-weight: 800">2 horas.</span>
                                            </p>
                                            <p style="font-size: 0.920rem;">Caso você não tenha pedido a recuperação da sua senha, por favor contate a nossa equipe em <span style="font-weight: 800; text-decoration: none">bookflix@silviosantos.dev.br</span>.</p>
                                        </div>
                                        <p>
                                            Obrigada,
                                            <span style="font-family: cursive; font-size: 1rem; color: rgb(165,42,42); font-weight: 700; font-display: swap;"><br>Bookflix Team
                                            </span>
                                        </p>
                                    </div>
                                HTML;
                                    $mail->Body = $bodyEmail;
                                    /* $mail->Body = 'Este é o seu código para recuperar a senha <strong>' . $chave_recup_senha . '</strong><br><br>'; */
                                    $mail->AltBody = 'Chegou o email teste da Booketec';/* Texto Alternativo */
                                    /* $mail->Body .= '<img style="width:200px;" src="https://cdn.pixabay.com/photo/2017/10/04/12/17/qr-code-2816041_1280.png">'; */

                                    if ($mail->send()) {
                                        echo '
                                            <script>location.href="atualizarSenha.php"</script>
                                            ';
                                    } else {
                                        echo '
                                                <h1>Email não enviado</h1>
                                                <p>Tente novamente.</p>
                                                ';
                                    }
                                } catch (Exception $e) {
                                    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
                                }
                            } else {
                                echo "Erro tente novamente!";
                            }
                        } else {
                            echo '<br><label for="email" class="lblInsiraEmail">O email está incorreto ou não foi cadastrado. Insira um email válido.</label>';
                        }
                    }

                    function geraCodigo()
                    {
                        $v1 = random_int(100, 999);
                        $v2 = random_int(100, 999);
                        $v3 = random_int(0, 9);
                        $v4 = random_int(0, 9);
                        $v5 = bin2hex(random_bytes(1));

                        $codSeguranca = $v1 . $v3 . $v5 . $v4 . $v2;
                        return $codSeguranca;
                    }
                    ?>

                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <input type="submit" name="btnEntrar" value="Recuperar">
                        </div>
                    </div>
                </div>
            </form>
            <div class="container-fluid form-login">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <a href="index.php"><input type="submit" name="btnVoltar" value="Voltar"></a>
                    </div>
                </div>
            </div>
            <!-- <button class="btn400">Recuperar</button> -->

            <!-- <a href="index.php"><button class="btn400">Voltar</button></a> -->
            <!-- <a href="cadastrar.php"><button class="btn200">Cadastrar</button></a> -->

        </div>
    </div>
</body>

</html>