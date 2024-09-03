<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" type="text/css" href="cssentrar.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <title>Tela de Login</title>
   
</head>
<body style="font-size: 30px;background-color: rgb(33, 25, 51);color: #a9dd0c;">
    <nav> 

        <div class="menu">
        <ul style="list-style-type: none; width: 100%;">
            <li id="mensageminicial" style="font-size: 70px;"><a href="index.html" style="color: #a9dd0c;;"> INTEGR4GIRLS</li></a>
            <li class="menu" style="position: absolute; left: 585px; top: 2px;"><a href="#nossostimes"> TIMES </li></a>
            <li class="menu" style="position: absolute; left: 680px; top: 2px;"><a href=""> AGENDA </li></a>
            <li class="menu" style="position: absolute; left: 800px; top: 2px;"><a href="#quemsomos2"> SOBRE </li></a>
            <li class="menu" style="position: absolute; left: 915px; top: 2px;"><a href=""> NOTÍCIAS </li></a>
            <li class="menu" style="position: absolute; left: 1050px; top: 2px;"><a href=""> DESTAQUES </li></a>
            <li class="menu" style="position: absolute; left: 1200px; top: 2px;"><a href="login.php"> ENTRAR </li></a></div>
    </nav>    

    <div class="login-container">
        <h1>Login</h1>
        <form action="autenticar.php" method="post">
            <input type="text" placeholder="Usuário" id="usuario" name="usuario" required>
            <input type="password" placeholder="Senha" id="senha" name="senha" required>
            <button type="submit">Entrar</button>
            <a href="conectacadastro.php">Cadastre-se</a>
        </form>
    </div>
</body>
</html>


