<?php
session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ordem_servico";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Busca as informações do produto selecionado
$id_produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];

$sql = "SELECT nome, preco FROM produtos WHERE id = '$id_produto'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Armazena as informações do produto na sessão do usuário
    $_SESSION['carrinho'][$id_produto] = array(
        'nome' => $row['nome'],
        'preco' => $row['preco'],
        'quantidade' => $quantidade
    );

    // Atualiza o valor total do carrinho
    if (isset($_SESSION['valor_total'])) {
        $_SESSION['valor_total'] += $row['preco'] * $quantidade;
    } else {
        $_SESSION['valor_total'] = $row['preco'] * $quantidade;
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);

// Redireciona para a página do carrinho
header('Location: test.php');
