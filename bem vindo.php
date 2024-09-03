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
        <li id="mensageminicial" style="font-size: 70px;"><a href="index.html" style="color: #a9dd0c;;"> INTEGR4GIRLS</li></a>
        <li class="menu" style="position: absolute; left: 585px; top: 2px;"><a href="#nossostimes"> TIMES </li></a>
        <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href=""> AGENDA </li></a>
        <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="#quemsomos2"> SOBRE </li></a>
        <li class="menu" style="position: absolute; left: 915px; top: 2px;"><a href=""> NOTÍCIAS </li></a>
        <li class="menu" style="position: absolute; left: 1050px; top: 2px;"><a href=""> DESTAQUES </li></a>
        <li style="font-size: 20px; position: absolute; left: 1300px; top: 9px;">Bem-vinde, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</li>
        <li class="menu" style="position: absolute; left: 1200px; top: 2px;"><a href="logout.php">Sair</a></li>
</nav>    
<div class="carousel">
    <div class="carousel-images"> 
        <a href="https://br.ign.com/esports/124403/news/pain-gaming-e-tricampea-da-ignis-cup-apos-derrotar-rise-gaming-por-3-a-1#:~:text=Fundada%20em%202022%2C%20a%20Ignis,parceria%20com%20a%20Gamers%20Club." target="_blank" style="text-align: center; color: #a9dd0c; font-family: New Amsterdam, sans-serif;"> <img src="timePain.jpg" alt="Imagem 1">ULTIMAS NOTICIAS</a> 
        <img src="https://via.placeholder.com/600x400?text=Imagem+2" alt="Imagem 2">
        <img src="https://via.placeholder.com/600x400?text=Imagem+3" alt="Imagem 3">
    </div>
    <button class="carousel-button prev" onclick="prevSlide()">&#10094;</button>
    <button class="carousel-button next" onclick="nextSlide()">&#10095;</button>
</div>

<script>
    let currentIndex = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll('.carousel-images img');
        const totalSlides = slides.length;

        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }

        const offset = -currentIndex * 100;
        document.querySelector('.carousel-images').style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }
</script>






<p id="nossostimes" style="top: 500px;"> NOSSOS TIMES </p> 
        <div id="TAGtimes1"> <ul> <li class="times"><a href="timesvalorant.html"> VALORANT </li></a> </ul></div>
        <div id="TAGtimes2"> <ul> <li class="times"><a href=""> LOL </li></a> </ul></div>
        <div id="TAGtimes3"> <ul> <li class="times"><a href=""> OVERWATCH </li></a> </ul></div></div>
        <a href=""> <div id="times"> <ul><li class="time"> <b>VER TIMES</b> </li></ul> </div> </a>

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
