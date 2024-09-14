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
    <link rel="stylesheet" href="dycalendar.css">
    <link rel="stylesheet" href="csscalendario.css">
    <link rel="stylesheet" href="carrossel.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    


</head>

<body style="font-size: 30px;background-color: rgb(33, 25, 51); font-family: New Amsterdam, sans-serif; color: #a9dd0c;">


<nav> 

    <div class="menu">
    <ul style="list-style-type: none; width: 100%;">
        <li id="mensageminicial" style="font-size: 70px;"><a href="bem vindo.php" style="color: #a9dd0c;;"> INTEGR4GIRLS</li></a>
        <li class="menu" style="position: absolute; left: 585px; top: 2px;"><a href="bem vindo.php#nossostimes"> TIMES </li></a>
        <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href="calendario.php"> AGENDA </li></a>
        <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="bem vindo.php#quemsomos2"> SOBRE </li></a>
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





        <p id="nossostimes" style="top: 560px; font-size: 65px;"> AGENDA </p> 
    <section>
        <div class="box">
            <div class="container">
                <div id="dycalendar"></div>
            </div>
        </div>
    </section>
    <script src="dycalendar.js"></script>
    <script>
        dycalendar.draw({
            target: '#dycalendar',
            type: 'month',
            highlighttargetdate: true,
            prevnextbutton: 'show'
        })
    </script>

    <table style="position: absolute; top: 700px; left: 50%;text-align: center;">
        <th>DIA -</th>
        <th>EVENTOS</th>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">7</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">8</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">14</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">15</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">21</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">24</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>
        <tr> <td style="background-color: #a9dd0c;color: black;text-align: center; font-size: 20px; border: 3px solid #a9dd0c;
            border-radius: 20px ;">28</td> 
            <td> <a href="https://www.ubisoft.com/pt-br/esports/rainbow-six/siege/championship/53/5" target="_blank">
            RAINBOW SIX SIEGE - BRAZIL LEAGUE (stage 2)</a> </td>

    </table>
        <div style="position: absolute; top: 2400px; left: 0px; width: 100%; height: 20%; background-color: rgb(21, 16, 32); padding: 0px;"> 
            <p style="position: absolute; bottom: 0px; left: 10px; font-family: Arial; font-size: 15px;">  SITE: INTEGR4GIRLS - Parte prática da disciplina de Projeto Computacional, Para obtenção de diploma em tecnico em 
            informática!</p><a href="login.php"> Contate-nos via DISCORD</a> </div>

</body>
</html>



