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
                    <img src = "src/aMaquinaDoTempo.jpg" width="300" height="410" alt="Capa_A_Maquina_do_tempo">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> Um cientista londrino viaja, a bordo de uma Máquina do Tempo, do século XIX para o ano de 802.701. <br>
                            Chegando no que seria a Londres do futuro, o Viajante do Tempo encontra duas espécies que evoluíram do ser humano: os Eloi, que viviam na superfície,
                             e os Morlocks, que se escondiam da luz no subterrâneo. <br>
                             O Mundo Superior era habitado por seres frívolos, delicados e infantis que estavam prestes a conhecer a sua Nêmesis, 
                            resultado de decisões tomadas no passado. <br>
                            O Viajante do Tempo perde a sua Máquina do Tempo e com apenas uma caixa de fósforos, se pergunta se conseguirá retornar ao presente.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>