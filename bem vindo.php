<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>  <link rel="stylesheet" type="text/css" href="cssindex.css"/>
<link rel="stylesheet" type="text/css" href="carrossel.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGR4GIRLS</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    


</head>

<body style="font-size: 30px;background-color: rgb(33, 25, 51); font-family: New Amsterdam, sans-serif; color: #a9dd0c;">

<nav> 
    <div class="menu">
    <ul style="list-style-type: none; width: 100%;">
        <li id="mensageminicial" style="font-size: 70px;"><a href="bem vindo.php" style="color: #a9dd0c;;"> INTEGR4GIRLS</li></a>
        <li class="menu" style="position: absolute; left: 585px; top: 2px;"><a href="#nossostimes"> TIMES </li></a>
        <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href="calendario.php"> AGENDA </li></a>
        <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="#quemsomos2"> SOBRE </li></a>
        <li class="menu" style="position: absolute; left: 915px; top: 2px;"><a href="https://discord.gg/EyzRebJjkA" target="_blank"> DISCORD </li></a>
        <li class="menu" style="position: absolute; left: 1050px; top: 2px;"><a href="destaques.php"> DESTAQUES </li></a>
        <li style="font-size: 20px; position: absolute; left: 1300px; top: 9px;">Bem-vinde, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</li>
        <li class="menu" style="position: absolute; left: 1200px; top: 2px;"><a href="logout.php">Sair</a></li>
</nav>    
<div class="carousel">
        <div class="carousel-slide">
            <img src="timePain.jpg" alt="Imagem 1">
            <div class="carousel-text">
                <h2>ÚLTIMAS NOTÍCIAS</h2>
                <p>Pain Gaming é tricampeã da Ignis Cup.</p>
                <a href="https://br.ign.com/esports/124403/news/pain-gaming-e-tricampea-da-ignis-cup-apos-derrotar-rise-gaming-por-3-a-1." target="_blank">Saiba mais</a>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="olga.jpg" alt="Imagem 2">
            <div class="carousel-text">
            <h2>MULHERES em destaque</h2>
            <p>conheça mais jogadoras profissionais.</p>
                <a href="destaques.php" target="_blank">Saiba mais</a>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="torneios.jpg" alt="Imagem 3">
            <div class="carousel-text">
            <h2>eventos</h2>
            <p>fique por dentro das competições online.</p>
                <a href="calendario.php" target="_blank">Saiba mais</a>
            </div>
        </div>
        <!-- Botões de navegação -->
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>


    <script type="text/javascript" src="script.js"></script>



<p id="nossostimes" style="top: 500px;"> NOSSOS TIMES </p> 
        <div id="TAGtimes1"> <ul> <li class="times"><a href="inscreverval.php"> VALORANT </li></a> </ul></div>
        <div id="TAGtimes2"> <ul> <li class="times"><a href="inscreverlol.php"> LOL </li></a> </ul></div>
        <div id="TAGtimes3"> <ul> <li class="times"><a href="inscreverover.php"> OVERWATCH </li></a> </ul></div></div>
        <a href="times.php"> <div id="times"> <ul><li class="time"> <b>VER TIMES</b> </li></ul> </div> </a>

        <p id="quemsomos2" style="position: absolute; top: 1550px; right: 190px;"> QUEM SOMOS? </p>
        <p class="quemsomos" style="font-size: 25px; top: 1700px; right: 300px;"><strong> SOMOS O INTEGR4GIRLS </strong></p>
        <p class="quemsomos" style="font-size: 15px; position: absolute; top: 1750px; right: 0px; font-family: monospace;">
                    <br>
                    Olá, nós, Lívia, Marcella e Caio,<br> somos estudantes do ensino médio integrado ao técnico em Informática<br>pelo Instituto Federal do Rio de Janeiro<br> e buscamos trazer um projeto com uma pauta bem importante para a sociedade<br> e que também nos afeta.<br><br> Lívia, a mais apaixonada nos games entre nós,<br> consegue expressar, de forma real, todos os problemas que uma jogadora<br>passa nesse lugar.<br><br> Marcella fala quanto o machismo em sua vida fez com que o seu interesse<br> em jogos fosse diminuído.<br> E Caio, como um homem, afirma que existe sim um grave problema<br> em relação ao tratamento recebido pelas mulheres nos games.<br> <br> Então, projetamos essa plataforma para juntarmos,<br> principalmente mulheres que compactuam com as nossas ideias e consigam ajudar<br> e mudar a realidade nos jogos.<br></p>
        <img class="imagemquemsomos" style="background-image: url(nois.jpg);">
    
    
        <div style="position: absolute; top: 2400px; left: 0px; width: 100%; height: 20%; background-color: rgb(21, 16, 32); padding: 0px;"> 
            <p style="position: absolute; bottom: 0px; left: 10px; font-family: Arial; font-size: 15px;">  SITE: INTEGR4GIRLS - Parte prática da disciplina de Projeto Computacional, Para obtenção de diploma em tecnico em 
            informática!</p><a href="https://discord.gg/FmczWuqE5g"> Contate-nos via DISCORD</a> </div>
