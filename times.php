<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="csstimes.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <title>TIMES</title>
    
</head>
<body style="font-size: 30px;background-color: rgb(33, 25, 51);color: #a9dd0c; font-family: New Amsterdam, sans-serif;">
    <nav> 

        <div class="menu">
        <ul style="list-style-type: none; width: 100%;">
            <li id="mensageminicial" style="font-size: 70px;"><a href="bem vindo.php" style="color: #a9dd0c;;"> INTEGR4GIRLS</li></a>
            <li class="menu" style="position: absolute; left: 585px; top: 2px;"><a href="bem vindo.php#nossostimes"> TIMES </li></a>
            <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href="calendario.php"> AGENDA </li></a>
            <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="bem vindo.php#quemsomos2"> SOBRE </li></a>
            <li class="menu" style="position: absolute; left: 915px; top: 2px;"><a href="https://discord.gg/EyzRebJjkA"> DISCORD</li></a>
            <li class="menu" style="position: absolute; left: 1050px; top: 2px;"><a href="destaques.php"> DESTAQUES </li></a>
            <li style="font-size: 20px; position: absolute; left: 1300px; top: 9px;">Bem-vinde, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</li>
            <li class="menu" style="position: absolute; left: 1200px; top: 2px;"><a href="logout.php">Sair</a></li>
    </nav>    

    <p style="position:absolute; top: 70px; font-size: 80px;left: 30%;">TIMES DO INTEGR4GIRLS</p>

    <div class="login-container" style="position: absolute; top: 300px; text-decoration: none; height: 250px;">
        <label for="texto"> Shadow Valkyries</label>
        <img src="timelol.jpg" alt="" style="width: 60%; position: relative; left: 20px;">
        <label for="texto" style="color: black; font-size: 30px; position: relative;top: 40px; right: 65px;"> LOL </label>
    </div>

    <div class="login-container" style="position: absolute; top: 300px; left: 40%; text-decoration: none;">
        <label for="texto"> Eclipse Sisters </label> 
        <img src="timeval1.webp" alt="" style="width: 60%;">
        <label for="texto"> Valorant </label>
    </div>

    <div class="login-container" style="position: absolute; top: 300px;left: 65%; text-decoration: none;">
        <label for="texto"> New Guardians</label>
        <img src="timeval2.jpg" alt="" style="width: 65%;">
        <label for="texto"> Valorant </label>
    </div>


    
        
</body>
</html>