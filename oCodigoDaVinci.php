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
                    <img src = "src/oCodigoDaVinci.jpg" width="300" height="410" alt="Capa_O_código_Da_Vinci">
                </div>

                <div class="col">
                    <h2>Sinopse</h2>
                        <p> Um assassinato dentro do Museu do Louvre, em Paris, traz à tona uma sinistra conspiração para revelar um segredo que foi 
                            protegido por uma sociedade secreta desde os tempos de Jesus Cristo. <br>A vítima é o respeitado curador do museu, Jacques Saunière, 
                            um dos líderes dessa antiga fraternidade, o Priorado de Sião, que já teve como membros Leonardo da Vinci, Victor Hugo e Isaac Newton.
                            Momentos antes de morrer, Saunière deixa uma mensagem cifrada que apenas a criptógrafa Sophie Neveu e Robert Langdon, um simbologista, 
                            podem desvendar.<br> Eles viram suspeitos e detetives enquanto tentam decifrar um intricado quebra-cabeças que pode lhes revelar 
                            um segredo milenar que envolve a Igreja Católica. Apenas alguns passos à frente das autoridades e do perigoso assassino, Sophie e Robert vão 
                            à procura de pistas ocultas nas obras de Da Vinci e se debruçam sobre alguns dos maiores mistérios da cultura ocidental - da natureza do 
                            sorriso da Mona Lisa ao significado do Santo Graal. </p>
                            <p>Mesclando os ingredientes de um envolvente suspense com informações sobre obras de arte, 
                            documentos e rituais secretos, Dan Brown consagrou-se como um dos autores mais brilhantes da atualidade.
                        </p> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>