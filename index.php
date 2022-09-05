<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloIndex.css">
    <title>Login</title>
</head>

<body>
    <h1>Entrar</h1>
    <img src="css/logo.png" width="100" height="100" alt="Logo">
    <form method="POST" name="index" action="loginAction.php">
        <div class="container-fluid form-login">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <input name="email" type="email" placeholder="Email" required for="autoSizingInput" id="nome" maxlenght="80">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    <input name="senha" type="password" placeholder="Senha" required for="autoSizingInput" id="senha" maxlenght="30">
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4">
                    <input type="submit" name="btnEntrar" value="Entrar">
                </div>
            </div>
        </div>
    </form>

    <div class="row divBtn">
        <div class="col-md-2 btn2">
            <a href="recuperarSenha.php"><input type="submit" name="btnRecuperarSenha" value="Recuperar Senha"></a>
        </div>

        <div class="col-md-2 btn2">
            <a href="cadastrar.php"><input type="button" value="Cadastrar"></a>
        </div>
    </div>
</body>

</html>