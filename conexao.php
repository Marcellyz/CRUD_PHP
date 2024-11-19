<?php
// Carregar as variáveis do .env
require_once __DIR__ . '/vendor/autoload.php'; // Carregando o autoload do Composer

use Dotenv\Dotenv;

// Carregar o arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Acessar as variáveis do .env
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$senha = $_ENV['DB_PASSWORD'];
$db = $_ENV['DB_NAME'];

// Conectar ao banco de dados usando mysqli
$conexao = mysqli_connect($host, $user, $senha, $db);

// Verificar se a conexão foi bem-sucedida
if (!$conexao) {
    die('Não foi possível conectar: ' . mysqli_connect_error());
}


?>