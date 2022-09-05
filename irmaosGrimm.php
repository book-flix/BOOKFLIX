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
                    <img src = "src/ContosDeFadasDosIrmaosGrimm.jpg" width="300" height="410" alt="Capa_Contos_de_fadas_dos_Irmãos_Grimm">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> Reconhecidos mundialmente pela qualidade dos contos que produziram desde o começo do século XIX, os irmãos Grimm diziam estar só escrevendo 
                            as histórias que escutavam de camponeses e amigos. </p>
                            <p>Concomitantemente aos registros do cotidiano, começaram a pesquisar documentos e recolher histórias da 
                            Alemanha para a preservação da memória e das tradições populares. 
                            Neste livro encontram-se contos fantásticos que mantêm viva a memória da criação folclórica da população alemã.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>