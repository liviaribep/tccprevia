<?php
include 'autenticar.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="cssentrar.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <title>INSCRIÇÃO CONCLUIDA</title>
    
</head>
<body style="font-size: 30px;background-color: rgb(33, 25, 51);color: #a9dd0c; font-family: New Amsterdam, sans-serif;">
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

    <div class="login-container">
        <h1>INSCRIÇÃO CONCLUÍDA</h1>
        <label for="mensagem" style="color: rgb(33, 25, 51);"> entraremos em contato via discord ou email</label>
        <a href="bem vindo.php"> Voltar </a>
    </div>
</body>
</html>