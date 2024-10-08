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
        <link rel="stylesheet" type="text/css" href="cssdestaques.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESTAQUES</title>

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

<p id="nossostimes" style="top: 150px;"> MULHERES EM DESTAQUE </p> 

<div class="bloco">
    <section class="highlight">
        <img src="loud-liz.jpg" alt="Liz">
        <div class="info">
            <h2 >Liz  <a href="https://www.instagram.com/loud_liz1/" target="_blank" style="font-size: 30px; position: relative; left: 10px; bottom: 5px; text-decoration: underline; font-family:times new roman"> @loud_liz1 </a> </h2> 
            <p>Caçadora do time Academy da LOUD, Elizabeth "Liz" assumiu a titularidade da posição depois que Mateus "Mewkyo" foi oficializado no time principal. A carioca já teve passagem pela equipe feminina da Falkol e foi companheira de time da Ariel "Ari" - atualmente jogadora da E-Flix (antigo Cruzeiro). Liz fez a sua estreia no CBLoL Academy contra a Rensga Esports. Com o campeão Udyr, a jogadora conseguiu dominar os objetivos do mapa e transferir a vantagem para o resto da equipe. A caçadora é um dos destaques no cenário do Academy do LoL. Liz se tornou a primeira jogadora mulher a participar dos playoffs do Academy.</p>
        </div>
    </section>
    <section class="highlight">
        <img src="tay.jpg" alt="Tayhuhu">
        <div class="info">
            <h2>Tayhuhu <a href="https://www.instagram.com/tayhuhu/" target="_blank" style="font-size: 30px; position: relative; left: 10px; bottom: 5px; text-decoration: underline; font-family:times new roman"> @tayhuhu </a></h2>
            <p> Jogadora de Valorant pela INTZ Angels, Taynah "Tayhuhu" é bicampeã da Women’s Community Festival 2021. A equipe que tinha o nome de Fire Angels antes de fechar com a organização, conquistou o Girl Power Invitational. A jogadora também participou da 3ª edição da Copa Rakin como uma das treinadores das oito equipes. Pela seletiva da da WCF 2021, Tayhuhu foi um dos destaques do time, com uma média de 20 abates por partida, também foi dona do maior KDA que foi de 4,07. Ela se destacou também fora dos servidores: Tayhuhu foi quem liderou o movimento para que o streamer Emanuel "Nuel" tivesse o seu canal na Twitch de volta após banimento por conta da aparição do filho pequeno na live durante sua ausência; a própria jogadora já havia passado por situação semelhante na plataforma de streaming, por isso se engajou no acontecido com Nuel. </p>
    </section>

    <section class="highlight">
        <img src="olga.jpg" alt="Olga">
        <div class="info">
            <h2>OL6A <a href="https://www.instagram.com/olgatransborda/" target="_blank" style="font-size: 30px; position: relative; left: 10px; bottom: 5px; text-decoration: underline; font-family:times new roman"> @olgatransborda</a></h2>
            <p> Olga "OL6A" se tornou a primeira mulher trans no cenário competitivo de CS:GO. Jogadora da Black Dragons, OL6A teve passagens pelos times Dai Dai, SLK Gaming, SiteCs, Remo Brave e Bootkamp Gaming. A jogadora já venceu a Liga Pro da GC e Brasil Game Cup 2016. Com a equipe dos dragões, OL6A participou da WESG LATAM, Gamers Club Masters Feminina, BGS Esports e foi a única equipe composta por mulheres a participarem do Campeonato Brasileiro de Counter-Strike (CBCS). Atualmente, OL6A está disputando a AORUS League 2021 Feminina pela Black Dragons. Pela AORUS League 2021 Feminina OL6A terminou com +13 de KD/Diff e 1.12 de KDR.</p>
    </section>

    <section class="highlight">
        <img src="juliana.jpg" alt="Juliana">
        <div class="info">
            <h2>Showliana <a href="https://www.instagram.com/showliana/" target="_blank" style="font-size: 30px; position: relative; left: 10px; bottom: 5px; text-decoration: underline; font-family:times new roman"> @showliana</a></h2>
            <p> Uma das maiores figuras do cenário feminino nos eSports em geral, Juliana "showliana" é jogadora de CS:GO e Valorant pela Dignitas FEM. Inclusive, ela se tornou a 1ª brasileira a ser contratada por um time estrangeiro. Competidora desde 2008, showliana conquistou três títulos na sua passagem pela Keyd Stars, sendo eles: Brasil Game Cup SP Female 2017, WESG 2017 South American Finals: Female e XLG Summer Female; além disso, também ficou em quarto lugar na Intel Challenge Katowice 2018. A atleta ainda defendeu a organização da paiN Gaming. Recentemente, a Dignitas de CS:GO ficou em segundo lugar na DreamHack Showdown Winter 2020: NA, sendo que showliana teve um rating de 1.08 e 0.68 de mortes por rodada. Já pelo Valorant, showliana ficou em quarto lugar na VCT 2021 Game Changers NA Series 1.</p>
    </section>
   
</div>
</body>
</html>