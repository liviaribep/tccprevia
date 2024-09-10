<?php
session_start();

// Configuração do banco de dados
$host = 'localhost:3306';
$dbname = 'cadastro'; // Nome do banco de dados
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
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Preparar a consulta para buscar o usuário
    $stmt = $pdo->prepare("SELECT senha FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);

    // Buscar o resultado
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar a senha
    if ($resultado && $resultado['senha'] === $senha) {
        // Login bem-sucedido
        $_SESSION['usuario'] = $usuario;
        header('Location: bem vindo.php');
        exit;
    } else {
        // Login falhou
        echo 'Usuário ou senha incorretos.';
    }
} 
?>
