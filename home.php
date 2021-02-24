<?php
require_once 'process.php';
  
  // print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || DIVÃ</title>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/landing.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" 
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous">
</script>
</head>
<body>
  <div class="wrapper">
    <div class="nav">
      <div class="logo">
        <h4>DIVÃ</h4>
      </div>
      <div class="links">
        <a href="#" class="navmain">Marcar consulta</a>
        <a href="#">Ajuda</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
       <a href="logout.php"><button class="sair">Sair</button></a>
      </div>
    </div>
  </div>
 
  <div class="landing">
            <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                <h1>Olá  <?php session_start(); echo $_SESSION['nome'].",";?>
                <span> Seja bem vindo ao DIVÃ</span> </h1>
                <h3>Criado para ajudar pessoas de baixa renda para ter ajuda psicologica durante a pandemia <br> Ajudar faz bem.</h3>
                <div class="btn">
                    <a href="#">Saber mais</a>
                </div>
            </div>
            <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
                <img src="img/site.svg" alt="">
            </div>
        </div>

        <!-- ABOUT SECTION -->

        <div class="about">
            <div class="aboutText" data-aos="fade-up" data-aos-duration="1000">
                <h1>Um site para te ajudar <br> <span style="font-size:3vw">Como funcionamos?</span> </h1>
                <img src="img/doctor.png" alt="">
            </div>
            <div class="aboutList" data-aos="fade-left" data-aos-duration="1000">
                <ol>
                    <li> 
                        <span>01</span>
                         <p>Ajudando pessoas que não tem condiçoẽs para fazer consultas com psicologos nesse momento extremamente dificil.</p>
                    </li>
                    <li> 
                        <span>02</span>
                         <p>Com parcerias com psicologos que tem empenho por essa causa e aceitam fazer consultas com preços bem abaixo.</p>
                    </li>
                    <li> 
                        <span>03</span>
                         <p>Foi comprovado que com a pandemia x numeros de Brasileiros sofreram com algum tipo de transtorno mental durante a pandemia sendo mais comum ansiedade e depressão.</p>
                    </li>
                    <li> 
                        <span>04</span>
                         <p>A ajuda psicologica com consultas pode fazer bem a todos independente se você tem transtornos ou não</p>
                    </li>

                </ol>
            </div>
        </div>

        <!-- INFO SECTION -->

        <div class="infoSection">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1>Serviços que oferecemos <br> <span >com Profissionais da área.</span> </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <img src="img/video.svg" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <h2>Video Chamada</h2>
                        <p>Video chamadas com os especialistas</p>
                        <a href="#">
                            <div class="cardBtn">
                                <img src="img/next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card two" data-aos="fade-up" data-aos-duration="1300">
                    <img src="img/chat2.svg" class="cardtwoImg" alt="" data-aos="fade-up" data-aos-duration="1200">
                    <div class="cardbgtwo"></div>
                    <div class="cardContent">
                        <h2>Chat 24 horas</h2>
                        <p>Mande mensagens para os especialistas que estão online</p>
                        <a href="#">
                            <div class="cardBtn">
                                <img src="img/next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card three" data-aos="fade-up" data-aos-duration="1600">
                    <img src="img/selecao.svg" class="cardthreeImg" alt="" data-aos="fade-up" data-aos-duration="1300">
                    <div class="cardbgone"></div>
                    <div class="cardContent">
                        <h2>Marcar consultas</h2>
                        <p>Marque consultas de maeira pratica e rapida</p>
                        <a href="#">
                            <div class="cardBtn">
                                <img src="img/next.png" alt="" class="cardIcon">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- BANNER AND FOOTER -->

        <div class="banner">
            <div class="bannerText" data-aos="fade-right" data-aos-duration="1000">
                <h1>Faça o Download agora do nosso app <br> <span style="font-size:1.6vw;font-weight:normal"  class="bannerInnerText">
                    e veja o quão bom é se sentir bem!
                </span> </h1>
                <a href="#"> <img src="img/qr-code.png" alt=""> </a>
                <a href="#"> <img src="img/AndroidPNG.png" alt=""> </a>
                
            </div>
            <div class="bannerImg" data-aos="fade-up" data-aos-duration="1000">
                <img src="img/chat4.svg" alt="">
            </div>
        </div>

        <div class="footer">
            <h2>DIVÃ.</h2>
            <div class="footerlinks">
                <a href="#" class="mainlink">Marcar consultas</a>
                <a href="#">Ajuda</a>
                <a href="#">Sobre</a>
                <a href="#">Contato</a>
            </div>
        </div>
    </div>

    
    <script>
            AOS.init();
    </script>
</body>
</html>

<!-- ziones20@pes.com     ziones20 -->
<!-- 

  <a href="logout.php">Sair</a> -->