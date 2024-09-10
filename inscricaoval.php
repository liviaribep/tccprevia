<?php
// Configuração do banco de dados
$host = 'localhost:3306';
$dbname = 'inscricaoval'; // Nome do banco de dados
$user = 'root'; // Usuário do banco de dados
$pass = ''; // Senha do banco de dados

// Conectar ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Verificar se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contadisc = $_POST['contadisc'];
    $email = $_POST['email'];
    $rank = $_POST['rank'];

    // Verificar se o usuário já existe
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM jogadores WHERE contadisc = ?");
    $stmt->execute([$usuario]);
if ($stmt->fetchColumn() > 0) {
    echo 'Usuário já existe. Escolha outro nome de usuário.';
    exit;
}


    // Prepara e executa a query para inserir os dados
    $sql = "INSERT INTO jogadores (contadisc, email, rank) VALUES (:contadisc, :email, :rank)";
    $stmt = $pdo->prepare($sql);

    try {
        $stmt->execute([
            ':contadisc' => $contadisc,
            ':email' => $email,
            ':rank' => $rank
           
        ]); 
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
    header('Location: inscricaoconcluida.php');
    exit;
}


?>