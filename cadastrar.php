<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloCadastrar.css">
    <title>Cadastrar</title>
</head>

<body>
    <form method="POST" action="cadastrarAction.php">
        <div class="container-fluid">
            <h1>Cadastrar</h1>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo*" required maxlenght="80">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="cpf" placeholder="CPF* (apenas números)" required maxlenght="11">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone (apenas números)" maxlenght="13">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="email" class="form-control" name="email" placeholder="Email*" required maxlenght="80">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="password" class="form-control" name="senha" placeholder="Senha*" required maxlenght="30">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <input type="password" class="form-control" name="confSenha" placeholder="Confirmar Senha*" required maxlenght="30">
                </div>
            </div>
        </div>
        
        <div class="row divBtn">
            <div class="col-md-2 btn2">
                <input type="reset" value="Limpar">
            </div>

            <div class="col-md-2 btn2">
                <input type="submit" value="Cadastrar">
            </div>
        </div>
    </form>

    <div class="row divBtn">
        <div class="col-md-4">
            <a href="index.php"><input type="Button" value="Voltar"></a>
        </div>        
    </div>
    
    <div class="container-fluid">
        <h6>Campos obrigatórios*</h6>
    </div>
</body>
</html>