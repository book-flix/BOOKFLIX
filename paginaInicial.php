<?php require_once('verificarAcesso.php');?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="sortcut icon" href="css/logo.png" type="image/png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/estiloPaginaInicial.css">

    <title>Página Inicial</title>
</head>
<?php require_once('menu.php'); ?>

<body>
<!-- <h2>Nossos Livros</h2> -->

 <!-- <div class="container-fluid">
    <button class="btn-left" onclick="plusDivs(-1);">&#10094;</button>              

        <div class="wrapper" id="Sinopses">
            <div class="col-main slider">
                <div class="title">
                    <h4>Admirável Mundo Novo</h4>                    
                    <h5>Autor: Aldous Huxley</h5>
                    <h6>1/6</h6>
                </div> 
                
                <div class="col-left">
                    <div class="cover">
                        <img src="src/AdmiravelMundoNovo.jpg">
                    </div>
                    <div class="content">
                        <p> Um clássico moderno, o romance distópico de Aldous Huxley é incontornável para quem procura um dos exemplos mais marcantes da tematização 
                        de estados autoritários, ao lado de 1984, de George Orwell. 
                        <p>Ele mostra uma sociedade inteiramente organizada segundo princípios científicos, 
                        na qual a mera menção das antiquadas palavras “pai” e “mãe” produzem repugnância. Um mundo de pessoas programadas em laboratório, e adestradas 
                        para cumprir seu papel numa sociedade de castas biologicamente definidas já no nascimento. Um mundo no qual a literatura, a música e o cinema só 
                        têm a função de solidificar o espírito de conformismo. Um universo que louva o avanço da técnica, a linha de montagem, a produção em série, 
                        a uniformidade, e que idolatra Henry Ford. </p>
                        <p>Essa é a visão desenvolvida no clarividente romance Huxley. Ao lado de 1984, que criticava acidamente os governos totalitários de esquerda 
                        e de direita, o terror do stalinismo e a barbárie do nazifascismo, em Huxley o objeto é a sociedade capitalista, industrial e tecnológica, 
                        na qual a racionalidade se tornou a nova religião, a ciência é o novo ídolo, um mundo no qual a experiência do sujeito não parece mais fazer 
                        nenhum sentido, e no qual a obra de Shakespeare adquire tons revolucionários. </p>
                        <p>Entretanto, o moderno clássico de Huxley não é um mero exercício de futurismo ou de ficção científica. 
                        Trata-se, o que é mais grave, de um olhar agudo acerca das potencialidades autoritárias do próprio mundo em que vivemos. 
                        Como um alerta de que, ao não se preservarem os valores da civilização humanista, o que nos aguarda não é o róseo paraíso iluminista da 
                        liberdade, mas os grilhões de um admirável mundo novo.</p>
                    </div>
                </div>
            </div>

            <div class="col-main slider">
                <div class="title">
                    <h4>Admirável Mundo Novo</h4>                    
                    <h5>Autor: Aldous Huxley</h5>
                    <h6>1/6</h6>
                </div> 
                
                <div class="col-left">
                    <div class="cover">
                        <img src="src/AdmiravelMundoNovo.jpg">
                    </div>
                    <div class="content">
                        <p> Um clássico moderno, o romance distópico de Aldous Huxley é incontornável para quem procura um dos exemplos mais marcantes da tematização 
                        de estados autoritários, ao lado de 1984, de George Orwell. 
                        <p>Ele mostra uma sociedade inteiramente organizada segundo princípios científicos, 
                        na qual a mera menção das antiquadas palavras “pai” e “mãe” produzem repugnância. Um mundo de pessoas programadas em laboratório, e adestradas 
                        para cumprir seu papel numa sociedade de castas biologicamente definidas já no nascimento. Um mundo no qual a literatura, a música e o cinema só 
                        têm a função de solidificar o espírito de conformismo. Um universo que louva o avanço da técnica, a linha de montagem, a produção em série, 
                        a uniformidade, e que idolatra Henry Ford. </p>
                        <p>Essa é a visão desenvolvida no clarividente romance Huxley. Ao lado de 1984, que criticava acidamente os governos totalitários de esquerda 
                        e de direita, o terror do stalinismo e a barbárie do nazifascismo, em Huxley o objeto é a sociedade capitalista, industrial e tecnológica, 
                        na qual a racionalidade se tornou a nova religião, a ciência é o novo ídolo, um mundo no qual a experiência do sujeito não parece mais fazer 
                        nenhum sentido, e no qual a obra de Shakespeare adquire tons revolucionários. </p>
                        <p>Entretanto, o moderno clássico de Huxley não é um mero exercício de futurismo ou de ficção científica. 
                        Trata-se, o que é mais grave, de um olhar agudo acerca das potencialidades autoritárias do próprio mundo em que vivemos. 
                        Como um alerta de que, ao não se preservarem os valores da civilização humanista, o que nos aguarda não é o róseo paraíso iluminista da 
                        liberdade, mas os grilhões de um admirável mundo novo.</p>
                    </div>
                </div>
            </div>
        </div>
        
    <button class="btn-right" onclick="plusDivs(1);">&#10095;</button>

</div> -->
 



 <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner swiper-container">
            <div class="carousel-item active swiper-wrapper">
                <div class="row">
                    <div class="col-auto">
                        <a href="oCodigoDaVinci.php">
                            <img src = "src/oCodigoDaVinci.jpg" width="180" height="220" alt="Capa_O_Codigo_Da_Vinci">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="oAlquimista.php">
                            <img src = "src/oAlquimista.jpg" width="180" height="220" alt="Capa_O_Alquimista">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aMeninaQueRoubavaLivros.php">
                            <img src = "src/AmeninaQueRoubavaLivros.jpg" width="180" height="220" alt="Capa_A_menina_que_roubava_livros">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="umaBreveHistoriaDoTempo.php">
                            <img src = "src/UmaBreveHistoriaDoTempo.jpg" width="180" height="220" alt="Capa_Uma_Breve_Historia_Do_Tempo">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aMaquinaDoTempo.php">
                            <img src = "src/aMaquinaDoTempo.jpg" width="180" height="220" alt="Capa_A_Maquina_Do_Tempo">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a href="aHerdeira.php">
                            <img src = "src/aHerdeira.jpg" width="180" height="220" alt="Capa_Uma_Breve_Historia_Do_Tempo">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aindaEstouAqui.php">
                            <img src = "src/AindaEstouAqui.jpg" width="180" height="220" alt="Capa_O_Alquimista">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aRainhaVermelha.php">
                            <img src = "src/aRainhaVermelha.jpg" width="180" height="220" alt="Capa_A_menina_que_roubava_livros">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="vistaChinesa.php">
                            <img src = "src/vistaChinesa.jpg" width="180" height="220" alt="Capa_Uma_Breve_Historia_Do_Tempo">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="extraordinario.php">
                            <img src = "src/extraordinario.jpg" width="180" height="220" alt="Capa_O_Alquimista">
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-auto">
                        <a href="admiravelMundoNovo.php">
                            <img src = "src/AdmiravelMundoNovo.jpg" width="180" height="220" alt="Capa de: Admirável mundo novo">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aParteQueFalta.php">
                            <img src = "src/aParteQueFalta.jpg" width="180" height="220" alt="Capa de: O alquimista">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="vidasSecas.php">
                            <img src = "src/vidasSecas.jpg" width="180" height="220" alt="Capa de: A menina que roubava livros">
                        </a>
                    </div>
                    <div class="col-auto">                        
                        <a href="itAcoisa.php">
                            <img src = "src/itACoisa.jpg"  width="180" height="220" alt="Capa de: Drácula">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aliceNoPaisDasMaravilhas.php">
                            <img src = "src/aliceNoPaisDasMaravilhas.jpg"  width="180" height="220" alt="Capa de: Aventuras de Alice No País das Maravilhas">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <a href="oPequenoPrincipe.php">
                            <img src = "src/oPequenoPrincipe.jpg"  width="180" height="220" alt="Capa de: O pequeno príncipe">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="aGuerraDosMundos.php">
                            <img src = "src/aGuerraDosMundos.jpg"  width="180" height="220" alt="Capa de: A Guerra dos Mundos">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="irmaosGrimm.php">
                            <img src = "src/ContosDeFadasDosIrmaosGrimm.jpg"  width="180" height="220" alt="Capa de: Contos de fadas dos Irmãos Grimm">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="oMeninoDoPijamaListrado.php">
                            <img src = "src/oMeninoDoPijamaListrado.jpg"  width="180" height="220" alt="Capa de: O menino do pijama listrado">
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="oDiarioDeAnneFrank.php">
                            <img src = "src/oDiarioDeAnneFrank.jpg"  width="180" height="220" alt="Capa de: O Diário de Anne Frank">
                        </a>
                    </div>
                </div>
            </div>
        </div>    
    </div> 
</div>

    <!-- https://webdesign.tutsplus.com/tutorials/bootstrap-carousel-indicators-into-progress-bars--cms-37536  

    https://codepen.io/alvarotrigo/pen/gOGaovd-->
</body>    
</html>