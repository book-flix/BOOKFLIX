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
                    <img src = "src/UmaBreveHistoriaDoTempo.jpg" width="300" height="410" alt="Capa_Uma_Breve_História_do_Tempo">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> Uma das mentes mais geniais do mundo moderno, 
                        Stephen Hawking guia o leitor na busca por respostas a algumas das maiores dúvidas da humanidade: 
                        Qual a origem do universo? Ele é infinito? E o tempo? Houve um começo e haverá um fim? 
                        Existem outras dimensões além das três espaciais? E o que vai acontecer quando tudo terminar? </p>
                        <p>Com ilustrações criativas e texto bem-humorado, Hawking desvenda desde os mistérios da física de partículas 
                        até a dinâmica das centenas de milhões de galáxias do universo. Para o iniciado, é uma bela representação de conceitos complexos; 
                        para o leigo, é um vislumbre dos segredos mais profundos da criação.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>