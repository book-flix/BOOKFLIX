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
                    <img src = "src/oDiarioDeAnneFrank.jpg" width="300" height="410" alt="Capa_O_Diário_de_Anne_Frank">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> 12 de junho de 1942 – 1º de agosto de 1944. </p>
                        <p> Ao longo deste período, a jovem Anne Frank escreveu em seu diário toda a tensão que a família Frank sofreu durante a Segunda Guerra Mundial. <br>
                        Ao fim de longos dias de silêncio e medo aterrorizante, eles foram descobertos pelos nazistas e deportados para campos de concentração. 
                        Anne inicialmente foi para Auschwitz, e mais tarde para Bergen-Belsen. </p> 
                        <p> A força da narrativa de Anne, com impressionantes relatos das atrocidades e horrores cometidos contra os judeus, faz deste livro um precioso 
                        documento. Seu diário já foi traduzido para 67 línguas, e é um dos livros mais lidos do mundo. </p> 
                        <p> Ele destaca sentimentos, aflições e pequenas alegrias de uma vida incomum, problemas da transformação da menina em mulher, o despertar do amor, 
                            a fé inabalável na religião e, principalmente, revela a rara nobreza de um espírito amadurecido no sofrimento. Um retrato da menina por trás do mito.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>