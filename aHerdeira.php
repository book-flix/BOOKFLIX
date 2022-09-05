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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estiloCad.css">
    <title>InfoLivros</title>
</head>
<?php include_once ('menu.php');?>
<body>
    <div class="container-fluid all">
        <div class="row">
            <div class="row info">
                <div class="col-auto">
                    <img src = "src/aHerdeira.jpg" width="300" height="410" alt="Capa_A_Herdeira">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> Vinte anos atrás, America Singer participou da Seleção e conquistou o coração do príncipe Maxon.<br>
                        Agora chegou a vez da princesa Eadlyn, filha do casal. Prestes a conhecer os trinta e cinco pretendentes que irão disputar sua mão numa nova Seleção, 
                            ela não tem esperanças de viver um conto de fadas como o de seus pais… <br>
                            Mas assim que a competição começa, ela percebe que encontrar seu príncipe encantado talvez não seja tão impossível quanto parecia.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>