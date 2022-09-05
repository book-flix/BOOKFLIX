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
                    <img src = "src/aRainhaVermelha.jpg" width="300" height="410" alt="Capa_A_rainha_vermelha">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> O mundo de Mare Barrow é dividido pelo sangue: vermelho ou prateado.</p> 
                        <p> Mare e sua família são vermelhos: plebeus, humildes, destinados a servir uma elite prateada cujos poderes sobrenaturais os tornam quase deuses. 
                            Mare rouba o que pode para ajudar sua família a sobreviver e não tem esperanças de escapar do vilarejo miserável onde mora. <br>
                            Entretanto, numa reviravolta do destino, ela consegue um emprego no palácio real, onde, em frente ao rei e a toda a nobreza, descobre 
                            que tem um poder misterioso… <br>Mas como isso seria possível, se seu sangue é vermelho? Em meio às intrigas dos nobres prateados, 
                            as ações da garota vão desencadear uma dança violenta e fatal, que colocará príncipe contra príncipe - e Mare contra seu próprio coração.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>