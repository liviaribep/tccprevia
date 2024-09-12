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
    <title>Document</title>

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
        <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href=""> AGENDA </li></a>
        <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="#quemsomos2"> SOBRE </li></a>
        <li class="menu" style="position: absolute; left: 915px; top: 2px;"><a href=""> NOTÍCIAS </li></a>
        <li class="menu" style="position: absolute; left: 1050px; top: 2px;"><a href="destaques.php"> DESTAQUES </li></a>
        <li style="font-size: 20px; position: absolute; left: 1300px; top: 9px;">Bem-vinde, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</li>
        <li class="menu" style="position: absolute; left: 1200px; top: 2px;"><a href="logout.php">Sair</a></li>
</nav>    
<div class="carousel">
        <div class="carousel-slide">
            <img src="timePain.jpg" alt="Imagem 1">
            <div class="carousel-text">
                <h2>Título da Imagem 1</h2>
                <p>Descrição detalhada da imagem 1.</p>
                <a href="https://br.ign.com/esports/124403/news/pain-gaming-e-tricampea-da-ignis-cup-apos-derrotar-rise-gaming-por-3-a-1#:~:text=Fundada%20em%202022%2C%20a%20Ignis,parceria%20com%20a%20Gamers%20Club." target="_blank">Saiba mais</a>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="olga.jpg" alt="Imagem 2">
            <div class="carousel-text">
                <h2>Título da Imagem 2</h2>
                <p>Descrição detalhada da imagem 2.</p>
                <a href="destaques.php" target="_blank">Saiba mais</a>
            </div>
        </div>
        <div class="carousel-slide">
            <img src="agenda.jpg" alt="Imagem 3">
            <div class="carousel-text">
                <h2>Título da Imagem 3</h2>
                <p>Descrição detalhada da imagem 3.</p>
                <a href="eventos.php" target="_blank">Saiba mais</a>
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

        <p id="quemsomos2"> QUEM SOMOS? </p>
        <p class="quemsomos" style="font-size: 25px; top: 1750px; right: 250px;"><strong> SOMOS XXXXXXXXXXXXXXXX </strong></p>
        <p class="quemsomos" style="font-size: 15px; top: 1800px; right: 60px; font-family: monospace;">
                    Lorem ipsum dolor sit amet consectetur,adipisicing elit. faj<br>
                    quis rerum qui corporis voluptate omnis, distinctio veniafaj<br><br>
                    saepe labore repudiandae, vitae ipsum ratione cupiditate.faj<br>
                    quia facilis.Lorem ipsum dolor sit amet consectetur,adipifaj<br>
                    quis rerum qui corporis voluptate omnis, distinctio veniafaj<br>
                    saepe labore repudiandae, vitae ipsum ratione cupiditate.faj<br><br>
                    quia facilis. Lorem ipsum dolor sit amet consectetur,adipfaj<br>
                    quis rerum qui corporis voluptate omnis, distinctio veniafaj<br><br>
                    saepe labore repudiandae, vitae ipsum ratione cupiditate.faj<br>
                    quia facilis.</p>
        <img class="imagemquemsomos">
        <a href="" > <div id="times2"> <ul><li class="time2"> <b>SAIBA MAIS</b> </li></ul> </div> </a>
