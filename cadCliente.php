<?php require_once('verificarAcesso.php');?>

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
    <title>Cadastrar Dados do Cliente</title>
</head>

<?php require_once('menu.php'); ?>

<body>

    <form method="POST" name="dadosUsuario" action="cadClienteAction.php">
        <div class="container-fluid all">
            <h1>Cadastro de Cliente</h1>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <label for="autoSizingInput">Nome Completo*</label>
                        <input type="text" class="form-control" required name="nome" id="nome" maxlenght="80" placeholder="Silvio da Silva Santos">
                    </div>

                    <div class="col-md-2">
                        <label for="autoSizingInput">CPF*</label>
                        <input type="text" class="form-control" required name="cpf" id="cpf" maxlenght="11" placeholder="12345678912">
                    </div>

                    <div class="col-md-2">
                        <label for="autoSizingInput">RG*</label>
                        <input type="text" class="form-control" required name="rg" id="rg" maxlenght="10" placeholder="987654321">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <label for="autoSizingInput">Email*</label>
                        <input type="text" class="form-control" required name="email" id="email" maxlenght="80" placeholder="silviosantos@uni9.edu.br">
                    </div>

                    <div class="col-md-2">
                        <label for="autoSizingInput">Telefone</label>
                        <input type="text" class="form-control" name="telefone" id="telefone" maxlenght="13" placeholder="1112345678">
                    </div>

                    <div class="col-md-2">
                        <label for="autoSizingInput">Data de Nascimento*</label>
                        <input type="date" class="form-control" name="data_nascimento" required id="data_nascimento" >
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <label for="autoSizingInput">Logradouro*</label>
                        <input type="text" class="form-control" required name="logradouro" id="logradouro" maxlenght="80" placeholder="Rua Vergueiro">
                    </div>

                    <div class="col-md-1">
                        <label for="autoSizingInput">Número</label>
                        <input type="text" class="form-control" name="numero" id="numero" maxlenght="10" placeholder="235">
                    </div>

                    <div class="col-md-2">
                        <label for="autoSizingInput">CEP*</label>
                        <input type="text" class="form-control" required name="cep" id="cep" maxlenght="8" placeholder="01525-000">
                    </div>

                    <div class="col-md-2">
                        <label for="autoSizingInput">Bairro*</label>
                        <input type="text" class="form-control" required name="bairro" id="bairro" maxlenght="50" placeholder="Liberdade">
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <label for="autoSizingInput">Cidade*</label>
                        <input type="text" class="form-control" required name="cidade" id="cidade" maxlenght="50" placeholder="São Paulo">
                    </div>

                    <div class="col-md-3">
                        <label class="selection"  for="autoSizingInput">Estado*</label>
                        <select class="form-select" name="uf" required aria-label="estados">
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
                        <input type="text" class="form-control" name="complemento" id="complemento" maxlenght="30" placeholder="Bloco A">
                    </div>
                    <div class="col-md-1"></div>
        </div>

            <div class="row divBtn">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <h6 style="margin: 0px 0px 25px 5px;">Campos obrigatórios*</h6>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <input type="submit" name="btnSalvar" value="Salvar">
                </div>

                <div class="col-md-2">
                    <a href="cadCliente.php"><input type="button" value="Cancelar"></a>
                </div>
                <div class="col-md-1"></div>
            </div>

        
    </form>

</body>

</html>